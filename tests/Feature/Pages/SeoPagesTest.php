<?php

use App\Models\Faq;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('portofolio index shows an empty state when there are no projects', function () {
    $this->get(route('portofolio.index'))
        ->assertOk()
        ->assertSee('Portofolio proyek kami sedang kami susun');
});

test('portofolio show page displays a single project', function () {
    $project = Project::factory()->create(['title' => 'Website Masjid Al-Ikhlas']);

    $this->get(route('portofolio.show', $project))
        ->assertOk()
        ->assertSee('Website Masjid Al-Ikhlas');
});

test('faq index lists active faqs and hides inactive ones', function () {
    Faq::factory()->create(['question' => 'Apakah ada garansi?', 'is_active' => true]);
    Faq::factory()->create(['question' => 'Pertanyaan lama yang disembunyikan', 'is_active' => false]);

    $response = $this->get(route('faq.index'));

    $response->assertOk();
    $response->assertSee('Apakah ada garansi?');
    $response->assertDontSee('Pertanyaan lama yang disembunyikan');
});

test('harga page is reachable', function () {
    $this->get(route('harga'))->assertOk();
});

test('kontak page is reachable', function () {
    $this->get(route('kontak'))->assertOk();
});

test('sitemap includes portofolio urls', function () {
    $project = Project::factory()->create();

    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('portofolio.show', $project), false);
});

test('niche landing page is reachable for each configured niche', function (string $niche) {
    $this->get(route('niche.show', $niche))
        ->assertOk()
        ->assertSee(config("niche_pages.{$niche}.hero_title"));
})->with(['pesantren', 'masjid', 'desa', 'umkm']);

test('niche landing page 404s for an unknown niche', function () {
    $this->get('/jasa-website-tidak-ada')->assertNotFound();
});

test('location landing page is reachable for each configured location', function (string $location) {
    $this->get(route('lokasi.show', $location))
        ->assertOk()
        ->assertSee(config("location_pages.{$location}.name"));
})->with(['rembang', 'sedan', 'sarang', 'lasem', 'pamotan']);

test('location landing page 404s for an unknown location', function () {
    $this->get('/jasa-website-di-tidak-ada')->assertNotFound();
});

test('sitemap includes niche and location landing pages', function () {
    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('niche.show', 'pesantren'), false);
    $response->assertSee(route('lokasi.show', 'rembang'), false);
});

test('niche landing page renders faq structured data', function () {
    $response = $this->get(route('niche.show', 'pesantren'));

    $response->assertOk();
    $response->assertSee('"@context":"https://schema.org"', false);
    $response->assertSee('"@type":"FAQPage"', false);
});

test('niche-lokasi combination landing page is reachable', function (string $niche) {
    $this->get(route('niche-lokasi.show', [$niche, 'rembang']))
        ->assertOk()
        ->assertSee(config("niche_pages.{$niche}.label"))
        ->assertSee(config('location_pages.rembang.name'));
})->with(['pesantren', 'masjid', 'desa', 'umkm']);

test('niche-lokasi combination landing page 404s for an unknown niche or location', function () {
    $this->get('/jasa-website-tidak-ada-di-rembang')->assertNotFound();
    $this->get('/jasa-website-pesantren-di-tidak-ada')->assertNotFound();
});

test('sitemap includes niche-lokasi combination landing pages', function () {
    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('niche-lokasi.show', ['pesantren', 'rembang']), false);
});

test('provinsi index page is reachable and lists all 34 provinces', function () {
    $response = $this->get(route('provinsi.index'));

    $response->assertOk();
    $response->assertSee(config('provinsi_pages.jawa-tengah.name'));
    $response->assertSee(config('provinsi_pages.papua.name'));
});

test('provinsi landing page is reachable for each configured province', function (string $provinsi) {
    $this->get(route('provinsi.show', $provinsi))
        ->assertOk()
        ->assertSee(config("provinsi_pages.{$provinsi}.name"));
})->with(['aceh', 'jawa-tengah', 'bali', 'kalimantan-timur', 'sulawesi-selatan', 'papua']);

test('provinsi landing page 404s for an unknown province', function () {
    $this->get('/potensi-digital-tidak-ada')->assertNotFound();
});

test('sitemap includes provinsi landing pages', function () {
    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('provinsi.index'), false);
    $response->assertSee(route('provinsi.show', 'jawa-tengah'), false);
});
