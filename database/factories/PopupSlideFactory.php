<?php

namespace Database\Factories;

use App\Models\Popup;
use App\Models\PopupSlide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PopupSlide>
 */
class PopupSlideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'popup_id' => Popup::factory(),
            'type' => 'image',
            'media_path' => 'popup-slides/'.$this->faker->uuid().'.jpg',
            'button_label' => null,
            'button_url' => null,
            'sort_order' => 0,
        ];
    }
}
