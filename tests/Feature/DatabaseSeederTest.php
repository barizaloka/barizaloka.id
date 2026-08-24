<?php

use App\Models\Category;
use App\Models\Faq;
use App\Models\PackageJasaWebsite;
use App\Models\Partner;
use App\Models\Popup;
use App\Models\PopupSlide;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('database seeder executes all factories and populates models', function () {
    $this->seed();

    expect(User::count())->toBeGreaterThan(0)
        ->and(Category::count())->toBeGreaterThan(0)
        ->and(Tag::count())->toBeGreaterThan(0)
        ->and(Post::count())->toBeGreaterThan(0)
        ->and(Faq::count())->toBeGreaterThan(0)
        ->and(PackageJasaWebsite::count())->toBeGreaterThan(0)
        ->and(Partner::count())->toBeGreaterThan(0)
        ->and(Project::count())->toBeGreaterThan(0)
        ->and(Popup::count())->toBeGreaterThan(0)
        ->and(PopupSlide::count())->toBeGreaterThan(0);
});
