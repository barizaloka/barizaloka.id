<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);

        return [
            'icon' => fake()->randomElement(['🕌', '🏘️', '🛍️', '🤝']),
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'summary' => fake()->sentence(),
            'description' => fake()->paragraphs(3, true),
            'price_from' => 'Rp 350.000',
            'features' => fake()->sentences(4),
            'is_featured' => false,
            'order' => 0,
            'meta_title' => null,
            'meta_description' => null,
        ];
    }
}
