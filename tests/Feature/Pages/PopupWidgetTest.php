<?php

use App\Http\Middleware\EnsurePopupVisitorId;
use App\Models\Category;
use App\Models\Popup;
use App\Models\PopupView;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('popup targeted at all pages shows on the homepage', function () {
    Popup::factory()->create([
        'name' => 'Promo Semua Halaman',
        'is_active' => true,
        'target_type' => 'all',
        'html_content' => '<div id="promo-all">Promo!</div>',
    ]);

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('promo-all', false);
});

test('inactive popup is not shown', function () {
    Popup::factory()->create([
        'is_active' => false,
        'target_type' => 'all',
        'html_content' => '<div id="promo-inactive">Promo!</div>',
    ]);

    $response = $this->get(route('home'));

    $response->assertDontSee('promo-inactive', false);
});

test('popup outside its schedule is not shown', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
        'html_content' => '<div id="promo-expired">Promo!</div>',
        'end_at' => now()->subDay(),
    ]);

    $response = $this->get(route('home'));

    $response->assertDontSee('promo-expired', false);
});

test('popup targeted at specific pages only shows on matching pages', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'pages',
        'pages' => ['harga'],
        'html_content' => '<div id="promo-harga">Promo Harga!</div>',
    ]);

    $this->get(route('harga'))->assertSee('promo-harga', false);
    $this->get(route('home'))->assertDontSee('promo-harga', false);
});

test('popup targeted at a url pattern matches dynamic pages', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'pages',
        'url_patterns' => ['jasa-website-*'],
        'html_content' => '<div id="promo-niche">Promo Niche!</div>',
    ]);

    $this->get(route('niche.show', 'pesantren'))->assertSee('promo-niche', false);
    $this->get(route('harga'))->assertDontSee('promo-niche', false);
});

test('popup targeted at a category only shows on that category page', function () {
    $category = Category::factory()->create();
    $otherCategory = Category::factory()->create();

    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'categories',
        'category_ids' => [$category->id],
        'html_content' => '<div id="promo-category">Promo Kategori!</div>',
    ]);

    $this->get(route('blog.category', $category))->assertSee('promo-category', false);
    $this->get(route('blog.category', $otherCategory))->assertDontSee('promo-category', false);
    $this->get(route('home'))->assertDontSee('promo-category', false);
});

test('only the highest priority matching popup is shown', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
        'priority' => 1,
        'html_content' => '<div id="promo-low">Low Priority</div>',
    ]);

    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
        'priority' => 10,
        'html_content' => '<div id="promo-high">High Priority</div>',
    ]);

    $response = $this->get(route('home'));

    $response->assertSee('promo-high', false);
    $response->assertDontSee('promo-low', false);
});

test('a view is recorded in the database when a popup is shown', function () {
    $popup = Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
        'html_content' => '<div id="promo-tracked">Promo!</div>',
    ]);

    $this->get(route('home'))->assertSee('promo-tracked', false);

    expect(PopupView::where('popup_id', $popup->id)->count())->toBe(1);
});

test('frequency once_ever does not show the popup again to the same visitor', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
        'frequency' => 'once_ever',
        'html_content' => '<div id="promo-once">Promo!</div>',
    ]);

    $first = $this->get(route('home'));
    $first->assertSee('promo-once', false);

    $visitorId = $first->getCookie(EnsurePopupVisitorId::COOKIE, false)->getValue();

    $second = $this->withUnencryptedCookie(EnsurePopupVisitorId::COOKIE, $visitorId)->get(route('home'));
    $second->assertDontSee('promo-once', false);
});

test('a different visitor still sees a once_ever popup', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
        'frequency' => 'once_ever',
        'html_content' => '<div id="promo-once">Promo!</div>',
    ]);

    $this->get(route('home'))->assertSee('promo-once', false);
    $this->get(route('home'))->assertSee('promo-once', false);
});
