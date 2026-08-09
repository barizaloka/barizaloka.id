<?php

namespace Database\Factories;

use App\Models\Popup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Popup>
 */
class PopupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'is_active' => true,
            'html_content' => '<div class="bg-white rounded-xl p-6 shadow-xl">'.$this->faker->paragraph().'</div>',
            'target_type' => 'all',
            'pages' => null,
            'url_patterns' => null,
            'category_ids' => null,
            'frequency' => 'once_per_session',
            'delay_seconds' => 0,
            'priority' => 0,
            'start_at' => null,
            'end_at' => null,
        ];
    }
}
