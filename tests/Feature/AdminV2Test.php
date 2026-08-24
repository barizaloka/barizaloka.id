<?php

use App\Livewire\AdminV2\Categories\Index as CategoriesIndex;
use App\Livewire\AdminV2\Tags\Index as TagsIndex;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Livewire\Livewire;

test('guest cannot access admin-v2 dashboard', function () {
    $response = $this->get(route('admin-v2.dashboard'));
    $response->assertRedirect('/login');
});

test('non-admin user is forbidden from admin-v2 dashboard', function () {
    $user = User::factory()->create(['email' => 'user@example.com']);
    $response = $this->actingAs($user)->get(route('admin-v2.dashboard'));
    $response->assertForbidden();
});

test('admin user can access admin-v2 dashboard and routes', function () {
    $admin = User::factory()->create(['email' => 'admin@barizaloka.id']);

    $this->actingAs($admin)->get(route('admin-v2.dashboard'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.categories.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.tags.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.posts.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.projects.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.package-jasa-websites.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.partners.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.popups.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.faqs.index'))->assertSuccessful();
    $this->actingAs($admin)->get(route('admin-v2.media.index'))->assertSuccessful();
});

test('admin can create a category using livewire', function () {
    $admin = User::factory()->create(['email' => 'admin@barizaloka.id']);

    Livewire::actingAs($admin)
        ->test(CategoriesIndex::class)
        ->set('name', 'Kategori V2 Baru')
        ->set('slug', 'kategori-v2-baru')
        ->call('save')
        ->assertHasNoErrors();

    expect(Category::where('slug', 'kategori-v2-baru')->exists())->toBeTrue();
});

test('admin can create a tag using livewire', function () {
    $admin = User::factory()->create(['email' => 'admin@barizaloka.id']);

    Livewire::actingAs($admin)
        ->test(TagsIndex::class)
        ->set('name', 'Tag V2 Baru')
        ->set('slug', 'tag-v2-baru')
        ->call('save')
        ->assertHasNoErrors();

    expect(Tag::where('slug', 'tag-v2-baru')->exists())->toBeTrue();
});
