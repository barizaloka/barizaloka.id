<?php

use App\Models\Partner;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('home page lists active partners ordered', function () {
    Partner::factory()->create(['name' => 'Mitra Kedua', 'order' => 1, 'is_active' => true]);
    Partner::factory()->create(['name' => 'Mitra Pertama', 'order' => 0, 'is_active' => true]);
    Partner::factory()->create(['name' => 'Mitra Nonaktif', 'order' => 2, 'is_active' => false]);

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSeeInOrder(['Mitra Pertama', 'Mitra Kedua']);
    $response->assertDontSee('Mitra Nonaktif');
});
