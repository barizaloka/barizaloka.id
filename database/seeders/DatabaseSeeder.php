<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Faq;
use App\Models\PackageJasaWebsite;
use App\Models\Partner;
use App\Models\Popup;
use App\Models\PopupSlide;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@barizaloka.id',
        ]);

        User::factory(5)->create();

        Category::factory(5)->create();
        Tag::factory(10)->create();

        $this->call([
            FaqSeeder::class,
            PackageJasaWebsiteSeeder::class,
            PostSeeder::class,
        ]);

        Faq::factory(5)->create();
        PackageJasaWebsite::factory(3)->create();
        Partner::factory(5)->create();
        Project::factory(5)->create();
        Popup::factory(3)->has(PopupSlide::factory()->count(2), 'slides')->create();
    }
}
