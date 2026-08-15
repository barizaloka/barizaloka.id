<?php

use App\Models\Post;
use App\Rules\UniqueSlugGlobal;
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

test('a post defaults to the tahun/bulan/slug permalink format', function () {
    $post = Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    expect($post->fresh()->permalink_format)->toBe('tahun_bulan_slug');
});

test('a post using the slug permalink format is reachable at /artikel/slug', function () {
    $post = Post::factory()->published()->create([
        'slug' => 'kabar-gembira',
        'permalink_format' => 'slug',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    $this->get('/artikel/kabar-gembira')->assertOk();
    expect($post->permalink())->toBe(url('/artikel/kabar-gembira'));
});

test('a slug-format post is not reachable at its /year/month/slug path', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-gembira',
        'permalink_format' => 'slug',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    $this->get('/2026/03/kabar-gembira')->assertNotFound();
});

test('a tahun-bulan-slug post is not reachable at the plain /slug path', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-baik',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    $this->get('/kabar-baik')->assertNotFound();
});

test('the legacy /slug path 301-redirects a slug-format post to /artikel/slug', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-gembira',
        'permalink_format' => 'slug',
        'published_at' => '2026-03-10 10:00:00',
    ]);

    $this->get('/kabar-gembira')
        ->assertRedirect('/artikel/kabar-gembira')
        ->assertStatus(301);
});

test('the legacy /slug path 404s when no matching slug-format post exists', function () {
    $this->get('/tidak-ada-artikel-seperti-ini')->assertNotFound();
});

test('two slug-format posts with the same slug fails the global uniqueness rule', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-gembira',
        'permalink_format' => 'slug',
    ]);

    $validator = Validator::make(
        ['slug' => 'kabar-gembira'],
        ['slug' => [new UniqueSlugGlobal]],
    );

    expect($validator->fails())->toBeTrue();
});

test('a slug-format post does not conflict with a tahun-bulan-slug post sharing the same slug', function () {
    Post::factory()->published()->create([
        'slug' => 'kabar-gembira',
        'published_at' => '2026-01-15 10:00:00',
    ]);

    $validator = Validator::make(
        ['slug' => 'kabar-gembira'],
        ['slug' => [new UniqueSlugGlobal]],
    );

    expect($validator->fails())->toBeFalse();
});

test('editing a slug-format post ignores its own slug when checking global uniqueness', function () {
    $post = Post::factory()->published()->create([
        'slug' => 'kabar-gembira',
        'permalink_format' => 'slug',
    ]);

    $validator = Validator::make(
        ['slug' => 'kabar-gembira'],
        ['slug' => [new UniqueSlugGlobal($post->id)]],
    );

    expect($validator->fails())->toBeFalse();
});

test('blog index only lists published posts', function () {
    Post::factory()->published()->create(['title' => 'Sudah Terbit']);
    Post::factory()->draft()->create(['title' => 'Masih Draft']);

    $response = $this->get(route('blog.index'));

    $response->assertOk();
    $response->assertSee('Sudah Terbit');
    $response->assertDontSee('Masih Draft');
});
