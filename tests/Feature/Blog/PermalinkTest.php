<?php

use App\Models\Post;
use App\Rules\UniqueSlugPerMonth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;

uses(RefreshDatabase::class);

test('same slug can be used by posts published in different months', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-01-15 10:00:00',
    ]);
    Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-02-15 10:00:00',
    ]);

    expect(Post::where('slug', 'kabar-baik')->count())->toBe(2);
});

test('same slug in the same month fails the uniqueness rule', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-01-05 10:00:00',
    ]);

    $validator = Validator::make(
        ['slug' => 'kabar-baik'],
        ['slug' => [new UniqueSlugPerMonth('2026-01-20 10:00:00')]],
    );

    expect($validator->fails())->toBeTrue();
});

test('editing a post ignores its own slug when checking uniqueness', function () {
    $post = Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-01-05 10:00:00',
    ]);

    $validator = Validator::make(
        ['slug' => 'kabar-baik'],
        ['slug' => [new UniqueSlugPerMonth('2026-01-20 10:00:00', $post->id)]],
    );

    expect($validator->fails())->toBeFalse();
});

test('a published post is reachable at /year/month/slug', function () {
    $post = Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    $this->get('/2026/03/kabar-baik')->assertOk();
    expect($post->permalink())->toBe(url('/2026/03/kabar-baik'));
});

test('a wrong year/month for an existing slug 404s', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    $this->get('/2026/04/kabar-baik')->assertNotFound();
});

test('blog index only lists published posts', function () {
    Post::factory()->published()->create(['title' => 'Sudah Terbit']);
    Post::factory()->draft()->create(['title' => 'Masih Draft']);

    $response = $this->get(route('blog.index'));

    $response->assertOk();
    $response->assertSee('Sudah Terbit');
    $response->assertDontSee('Masih Draft');
});
