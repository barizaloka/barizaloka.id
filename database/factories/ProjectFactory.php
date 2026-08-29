<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->words(3, true);

        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'client_name' => fake()->company(),
            'category' => fake()->randomElement(['pesantren', 'desa', 'umkm']),
            'summary' => fake()->sentence(),
            'description' => fake()->paragraphs(3, true),
            'url' => fake()->url(),
            'thumbnail' => null,
            'is_featured' => false,
            'order' => 0,
            'meta_title' => null,
            'meta_description' => null,
        ];
    }
}
