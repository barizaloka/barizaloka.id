<?php

use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Filament\Resources\Posts\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create(['email' => 'admin@barizaloka.id']));
});

test('bulk publish action publishes selected draft posts', function () {
    $posts = Post::factory()->draft()->count(2)->create();

    Livewire::test(ListPosts::class)
        ->callTableBulkAction('publish', $posts);

    expect(Post::whereIn('id', $posts->pluck('id'))->pluck('status')->unique()->all())
        ->toBe(['published']);
});

test('bulk unpublish action reverts selected posts to draft', function () {
    $posts = Post::factory()->published()->count(2)->create();

    Livewire::test(ListPosts::class)
        ->callTableBulkAction('unpublish', $posts);

    expect(Post::whereIn('id', $posts->pluck('id'))->pluck('status')->unique()->all())
        ->toBe(['draft']);
});

test('posts with complete seo metadata are globally searchable and detailed', function () {
    Post::factory()->create([
        'title' => 'Panduan Website Pesantren',
        'meta_title' => 'Panduan Website Pesantren — Barizaloka',
        'meta_description' => 'Panduan lengkap.',
        'featured_image' => 'posts/example.jpg',
    ]);

    expect(PostResource::getGloballySearchableAttributes())->toContain('title');

    $results = PostResource::getGlobalSearchResults('Pesantren');

    expect($results)->toHaveCount(1);
});
