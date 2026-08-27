<?php

use App\Http\Controllers\LocationPageController;
use App\Http\Controllers\NicheLocationPageController;
use App\Http\Controllers\NichePageController;
use App\Http\Controllers\ProvinsiPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Halaman SEO & Landing Pages On-Page
|--------------------------------------------------------------------------
| File ini khusus menampung route SEO, kampanye landing page, serta
| programmatic SEO (niche, lokasi, dan provinsi).
|--------------------------------------------------------------------------
*/

// SEO - Campaign & Static On-Page Landing Pages
Route::view('/sumu-serikat-usaha-muhammadiyah', 'sumu')->name('sumu');
Route::view('/tokoh-ekonomi-indonesia-yuk-jadi-seperti-mereka-bidang-teknologi', 'tokoh-ekonomi-teknologi')->name('tokoh-ekonomi-teknologi');
Route::view('/bapak-ekonomi-indonesia-solusi-digital-sekarang', 'bapak-ekonomi-digital')->name('bapak-ekonomi-digital');

// SEO - Dynamic Programmatic SEO Pages (Lokasi & Niche)
Route::get('/jasa-website-{niche}-di-{location}', [NicheLocationPageController::class, 'show'])
    ->where('niche', implode('|', array_keys(config('niche_pages'))))
    ->where('location', implode('|', array_keys(config('location_pages'))))
    ->name('niche-lokasi.show');

Route::get('/jasa-website-di-{location}', [LocationPageController::class, 'show'])->name('lokasi.show');
Route::get('/jasa-website-{niche}', [NichePageController::class, 'show'])->name('niche.show');

// SEO - Potensi Digital Provinsi
Route::get('/potensi-digital-provinsi', [ProvinsiPageController::class, 'index'])->name('provinsi.index');
Route::get('/potensi-digital-{provinsi}', [ProvinsiPageController::class, 'show'])
    ->where('provinsi', implode('|', array_keys(config('provinsi_pages'))))
    ->name('provinsi.show');
