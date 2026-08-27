<?php

use App\Models\Faq;
use App\Models\PackageJasaWebsite;
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

test('harga page is reachable and lists packages from the database', function () {
    PackageJasaWebsite::factory()->create(['name' => 'Paket Landing', 'price_label' => 'Rp 350rb']);

    $this->get(route('harga'))
        ->assertOk()
        ->assertSee('Paket Landing')
        ->assertSee('Rp 350rb');
});

test('jasa-website landing page lists packages from the database', function () {
    PackageJasaWebsite::factory()->create(['name' => 'Paket Landing', 'price_label' => 'Rp 350rb']);

    $this->get(route('jasa-website'))
        ->assertOk()
        ->assertSee('Paket Landing')
        ->assertSee('Rp 350rb');
});

test('jasa-website landing page links to every niche and location page', function () {
    $response = $this->get(route('jasa-website'));

    $response->assertOk();

    foreach (array_keys(require __DIR__.'/../../../config/niche_pages.php') as $niche) {
        $response->assertSee(route('niche.show', $niche), false);
    }

    foreach (array_keys(require __DIR__.'/../../../config/location_pages.php') as $location) {
        $response->assertSee(route('lokasi.show', $location), false);
    }

    $response->assertSee(route('provinsi.index'), false);
});

test('sitemap includes jasa-website landing page', function () {
    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('jasa-website'), false);
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
})->with(fn () => array_keys(require __DIR__.'/../../../config/niche_pages.php'));

test('niche landing page 404s for an unknown niche', function () {
    $this->get('/jasa-website-tidak-ada')->assertNotFound();
});

test('location landing page is reachable for each configured location', function (string $location) {
    $this->get(route('lokasi.show', $location))
        ->assertOk()
        ->assertSee(config("location_pages.{$location}.name"));
})->with(fn () => array_keys(require __DIR__.'/../../../config/location_pages.php'));

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

test('niche-lokasi combination landing page is reachable', function (string $niche, string $location) {
    $this->get(route('niche-lokasi.show', [$niche, $location]))
        ->assertOk()
        ->assertSee(config("niche_pages.{$niche}.label"))
        ->assertSee(config("location_pages.{$location}.name"));
})->with(function () {
    $combinations = [];

    foreach (array_keys(require __DIR__.'/../../../config/niche_pages.php') as $niche) {
        foreach (array_keys(require __DIR__.'/../../../config/location_pages.php') as $location) {
            $combinations["{$niche}-di-{$location}"] = [$niche, $location];
        }
    }

    return $combinations;
});

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
})->with(fn () => array_keys(require __DIR__.'/../../../config/provinsi_pages.php'));

test('provinsi landing page 404s for an unknown province', function () {
    $this->get('/potensi-digital-tidak-ada')->assertNotFound();
});

test('sitemap includes provinsi landing pages', function () {
    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('provinsi.index'), false);
    $response->assertSee(route('provinsi.show', 'jawa-tengah'), false);
});

test('sitemap includes every static, publicly indexable page route', function () {
    $response = $this->get(route('sitemap'));

    $response->assertOk();
    $response->assertSee(route('kalkulator-biaya-admin-marketplace'), false);
    $response->assertSee(route('tentang'), false);
    $response->assertSee(route('sumu'), false);
    $response->assertSee(route('tokoh-ekonomi-teknologi'), false);
    $response->assertSee(route('bapak-ekonomi-digital'), false);
    $response->assertSee(route('faq.index'), false);
});

test('sumu static page is reachable and renders analysis content', function () {
    $this->get(route('sumu'))
        ->assertOk()
        ->assertSee('Serikat Usaha Muhammadiyah')
        ->assertSee('Web Software Engineer')
        ->assertSee('Laravel')
        ->assertSee('Transparansi')
        ->assertSee('Marketplace Sendiri')
        ->assertSee('sumu.or.id');
});

test('tokoh ekonomi teknologi static page is reachable and renders profiles of 5 tech founders', function () {
    $this->get(route('tokoh-ekonomi-teknologi'))
        ->assertOk()
        ->assertSee('Nadiem Makarim')
        ->assertSee('Ferry Unardi')
        ->assertSee('Natali Ardianto')
        ->assertSee('Achmad Zaky')
        ->assertSee('William Tanuwijaya')
        ->assertSee('Go-Jek')
        ->assertSee('Traveloka')
        ->assertSee('Tiket.com')
        ->assertSee('Bukalapak')
        ->assertSee('Tokopedia');
});

test('bapak ekonomi digital static page is reachable and renders Bung Hatta digital sovereignty content', function () {
    $this->get(route('bapak-ekonomi-digital'))
        ->assertOk()
        ->assertSee('Bapak Ekonomi Indonesia')
        ->assertSee('Mohammad Hatta')
        ->assertSee('Demokrasi Ekonomi')
        ->assertSee('Kedaulatan Digital')
        ->assertSee('Laravel')
        ->assertSee('Web Mandiri');
});
