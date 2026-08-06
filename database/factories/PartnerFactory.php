<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'icon' => fake()->randomElement(['🕌', '🏢', '🏫', '🤝']),
            'location' => fake()->city(),
            'url' => fake()->url(),
            'order' => 0,
            'is_active' => true,
        ];
    }
}
