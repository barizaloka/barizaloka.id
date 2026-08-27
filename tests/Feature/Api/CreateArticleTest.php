<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;

uses(RefreshDatabase::class);

beforeEach(function () {
    config(['api.bearer_token' => 'test-bearer-token']);
});

test('creating an article without bearer token returns 401 unauthenticated', function () {
    Log::spy();

    $response = $this->postJson('/api/v1/posts', [
        'title' => 'Test Title',
    ]);

    $response->assertStatus(401)
        ->assertJson(['message' => 'Unauthenticated.']);

    Log::shouldHaveReceived('warning')
        ->once()
        ->with('Unauthorized API access attempt to create article.', Mockery::type('array'));
});

test('creating an article with invalid bearer token returns 401 unauthenticated', function () {
    Log::spy();

    $response = $this->withToken('wrong-token')->postJson('/api/v1/posts', [
        'title' => 'Test Title',
    ]);

    $response->assertStatus(401)
        ->assertJson(['message' => 'Unauthenticated.']);

    Log::shouldHaveReceived('warning')
        ->once()
        ->with('Unauthorized API access attempt to create article.', Mockery::type('array'));
});

test('creating an article with valid bearer token successfully creates post and logs event', function () {
    Log::spy();

    $user = User::factory()->create();
    $category = Category::factory()->create();
    $tag1 = Tag::factory()->create();
    $tag2 = Tag::factory()->create();

    $payload = [
        'title' => 'Panduan API Barizaloka',
        'category_id' => $category->id,
        'content' => '<p>Ini adalah isi artikel dari API.</p>',
        'excerpt' => 'Ringkasan artikel singkat.',
        'status' => 'published',
        'tag_ids' => [$tag1->id, $tag2->id],
        'user_id' => $user->id,
        'meta_title' => 'SEO Title API',
        'meta_description' => 'SEO Description API',
    ];

    $response = $this->withToken('test-bearer-token')
        ->postJson('/api/v1/posts', $payload);

    $response->assertStatus(201)
        ->assertJson([
            'message' => 'Article created successfully.',
            'data' => [
                'title' => 'Panduan API Barizaloka',
                'category_id' => $category->id,
                'user_id' => $user->id,
                'status' => 'published',
            ],
        ]);

    $this->assertDatabaseHas('posts', [
        'title' => 'Panduan API Barizaloka',
        'slug' => 'panduan-api-barizaloka',
        'category_id' => $category->id,
        'user_id' => $user->id,
    ]);

    $post = Post::where('title', 'Panduan API Barizaloka')->first();
    expect($post->tags->pluck('id')->toArray())->toEqualCanonicalizing([$tag1->id, $tag2->id]);

    Log::shouldHaveReceived('info')
        ->once()
        ->with('Article created successfully via API.', Mockery::on(function ($context) use ($post) {
            return isset($context['post_id'], $context['title'], $context['slug'])
                && $context['post_id'] === $post->id
                && $context['title'] === 'Panduan API Barizaloka';
        }));
});

test('creating an article fails validation when required fields are missing', function () {
    $response = $this->withToken('test-bearer-token')
        ->postJson('/api/v1/posts', []);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['title', 'category_id', 'content']);
});
