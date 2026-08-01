<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => null,
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'quote' => fake()->paragraph(),
            'rating' => fake()->numberBetween(4, 5),
            'avatar' => null,
            'is_featured' => false,
            'order' => 0,
        ];
    }
}
