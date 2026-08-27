<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StorePostApiRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    /**
     * Store a newly created post via API.
     */
    public function store(StorePostApiRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $userId = $validated['user_id']
            ?? config('api.default_user_id')
            ?? User::query()->first()?->id;

        if (! $userId) {
            Log::error('API article creation failed: No user found to assign as author.', [
                'ip' => $request->ip(),
                'title' => $validated['title'] ?? null,
            ]);

            return response()->json([
                'message' => 'Unable to determine author for article.',
            ], 422);
        }

        $status = $validated['status'] ?? 'published';
        $publishedAt = $validated['published_at'] ?? ($status === 'published' ? now() : null);

        $post = Post::create([
            'user_id' => $userId,
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'slug' => $validated['slug'] ?? null,
            'excerpt' => $validated['excerpt'] ?? null,
            'content' => $validated['content'],
            'status' => $status,
            'published_at' => $publishedAt,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
        ]);

        if (! empty($validated['tag_ids'])) {
            $post->tags()->sync($validated['tag_ids']);
        }

        $post->load(['author', 'category', 'tags']);

        Log::info('Article created successfully via API.', [
            'post_id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'user_id' => $post->user_id,
            'category_id' => $post->category_id,
            'status' => $post->status,
            'ip' => $request->ip(),
        ]);

        return response()->json([
            'message' => 'Article created successfully.',
            'data' => $post,
        ], 201);
    }
}
