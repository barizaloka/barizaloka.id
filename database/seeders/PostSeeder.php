<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $author = User::first() ?? User::factory()->create();
        $category = Category::first() ?? Category::factory()->create();
        $tags = Tag::all();

        $posts = Post::factory()
            ->count(5)
            ->published()
            ->state([
                'user_id' => $author->id,
                'category_id' => $category->id,
                'permalink_format' => 'tahun_bulan_slug',
            ])
            ->create();

        $morePosts = Post::factory()
            ->count(5)
            ->published()
            ->state([
                'user_id' => $author->id,
                'category_id' => $category->id,
                'permalink_format' => 'slug',
            ])
            ->create();

        if ($tags->isNotEmpty()) {
            $posts->concat($morePosts)->each(function (Post $post) use ($tags) {
                $post->tags()->sync($tags->random(min(3, $tags->count()))->pluck('id'));
            });
        }
    }
}
