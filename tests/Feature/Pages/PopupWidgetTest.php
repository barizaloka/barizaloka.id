<?php

use App\Http\Middleware\EnsurePopupVisitorId;
use App\Models\Category;
use App\Models\Popup;
use App\Models\PopupView;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function createPopupWithSlide(array $attributes = [], array $slideAttributes = []): Popup
{
    $popup = Popup::factory()->create($attributes);
    $popup->slides()->create(array_merge([
        'type' => 'image',
        'media_path' => 'popup-slides/default.jpg',
    ], $slideAttributes));

    return $popup;
}

test('popup targeted at all pages shows on the homepage', function () {
    createPopupWithSlide([
        'name' => 'Promo Semua Halaman',
        'is_active' => true,
        'target_type' => 'all',
    ], [
        'button_label' => 'Promo All',
    ]);

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Promo All');
});

test('inactive popup is not shown', function () {
    createPopupWithSlide([
        'is_active' => false,
        'target_type' => 'all',
    ], [
        'button_label' => 'Promo Inactive',
    ]);

    $response = $this->get(route('home'));

    $response->assertDontSee('Promo Inactive');
});

test('popup outside its schedule is not shown', function () {
    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'all',
        'end_at' => now()->subDay(),
    ], [
        'button_label' => 'Promo Expired',
    ]);

    $response = $this->get(route('home'));

    $response->assertDontSee('Promo Expired');
});

test('popup targeted at specific pages only shows on matching pages', function () {
    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'pages',
        'pages' => ['harga'],
    ], [
        'button_label' => 'Promo Harga',
    ]);

    $this->get(route('harga'))->assertSee('Promo Harga');
    $this->get(route('home'))->assertDontSee('Promo Harga');
});

test('popup targeted at a url pattern matches dynamic pages', function () {
    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'pages',
        'url_patterns' => ['jasa-website-*'],
    ], [
        'button_label' => 'Promo Niche',
    ]);

    $this->get(route('niche.show', 'pesantren'))->assertSee('Promo Niche');
    $this->get(route('harga'))->assertDontSee('Promo Niche');
});

test('popup targeted at a category only shows on that category page', function () {
    $category = Category::factory()->create();
    $otherCategory = Category::factory()->create();

    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'categories',
        'category_ids' => [$category->id],
    ], [
        'button_label' => 'Promo Category',
    ]);

    $this->get(route('blog.category', $category))->assertSee('Promo Category');
    $this->get(route('blog.category', $otherCategory))->assertDontSee('Promo Category');
    $this->get(route('home'))->assertDontSee('Promo Category');
});

test('only the highest priority matching popup is shown', function () {
    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'all',
        'priority' => 1,
    ], [
        'button_label' => 'Promo Low',
    ]);

    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'all',
        'priority' => 10,
    ], [
        'button_label' => 'Promo High',
    ]);

    $response = $this->get(route('home'));

    $response->assertSee('Promo High');
    $response->assertDontSee('Promo Low');
});

test('a popup with no slides is not shown', function () {
    Popup::factory()->create([
        'is_active' => true,
        'target_type' => 'all',
    ]);

    $response = $this->get(route('home'));

    $response->assertDontSee('site-popup', false);
});

test('a view is recorded in the database when a popup is shown', function () {
    $popup = createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'all',
    ], [
        'button_label' => 'Promo Tracked',
    ]);

    $this->get(route('home'))->assertSee('Promo Tracked');

    expect(PopupView::where('popup_id', $popup->id)->count())->toBe(1);
});

test('frequency once_ever does not show the popup again to the same visitor', function () {
    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'all',
        'frequency' => 'once_ever',
    ], [
        'button_label' => 'Promo Once',
    ]);

    $first = $this->get(route('home'));
    $first->assertSee('Promo Once');

    $visitorId = $first->getCookie(EnsurePopupVisitorId::COOKIE, false)->getValue();

    $second = $this->withUnencryptedCookie(EnsurePopupVisitorId::COOKIE, $visitorId)->get(route('home'));
    $second->assertDontSee('Promo Once');
});

test('a different visitor still sees a once_ever popup', function () {
    createPopupWithSlide([
        'is_active' => true,
        'target_type' => 'all',
        'frequency' => 'once_ever',
    ], [
        'button_label' => 'Promo Once',
    ]);

    $this->get(route('home'))->assertSee('Promo Once');
    $this->get(route('home'))->assertSee('Promo Once');
});
