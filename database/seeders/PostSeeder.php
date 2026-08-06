<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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

        Post::factory()
            ->count(5)
            ->published()
            ->state([
                'user_id' => $author->id,
                'category_id' => $category->id,
                'permalink_format' => 'tahun_bulan_slug',
            ])
            ->create();

        Post::factory()
            ->count(5)
            ->published()
            ->state([
                'user_id' => $author->id,
                'category_id' => $category->id,
                'permalink_format' => 'slug',
            ])
            ->create();
    }
}
