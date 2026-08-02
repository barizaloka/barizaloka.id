<?php

namespace Database\Factories;

use App\Models\PackageJasaWebsite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<PackageJasaWebsite>
 */
class PackageJasaWebsiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = 'Paket '.fake()->unique()->word();
        $price = fake()->randomElement([350000, 600000, 1000000]);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'tagline' => fake()->sentence(),
            'price' => $price,
            'price_label' => 'Rp '.number_format($price / 1000).'rb',
            'price_period' => 'per tahun',
            'features' => collect(fake()->sentences(5))
                ->map(fn (string $text) => ['text' => $text, 'indent' => false])
                ->all(),
            'cta_label' => 'Pilih '.$name,
            'whatsapp_message' => "Halo Barizaloka, saya tertarik dengan {$name}",
            'is_featured' => false,
            'badge_label' => null,
            'order' => 0,
        ];
    }
}
