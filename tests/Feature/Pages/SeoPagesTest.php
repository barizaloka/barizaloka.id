<?php

use App\Models\Faq;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('layanan index lists services', function () {
    Service::factory()->create(['name' => 'Website Pesantren']);

    $this->get(route('layanan.index'))
        ->assertOk()
        ->assertSee('Website Pesantren');
});

test('layanan show page displays a single service', function () {
    $service = Service::factory()->create(['name' => 'Website Desa']);

    $this->get(route('layanan.show', $service))
        ->assertOk()
        ->assertSee('Website Desa');
});

test('layanan show page 404s for an unknown slug', function () {
    $this->get('/layanan/tidak-ada')->assertNotFound();
});

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

test('testimoni index shows an empty state when there are no testimonials', function () {
    $this->get(route('testimoni.index'))->assertOk();
});

test('testimoni index lists featured testimonials', function () {
    Testimonial::factory()->create(['name' => 'Ustadz Ahmad', 'quote' => 'Website jadi cepat dan mudah dikelola.']);

    $this->get(route('testimoni.index'))
        ->assertOk()
        ->assertSee('Ustadz Ahmad')
        ->assertSee('Website jadi cepat dan mudah dikelola.');
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

test('sitemap includes layanan and portofolio urls', function () {
    $service = Service::factory()->create();
    $project = Project::factory()->create();

    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('layanan.show', $service), false);
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
