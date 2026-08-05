<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\JasaWebsiteController;
use App\Http\Controllers\LocationPageController;
use App\Http\Controllers\NicheLocationPageController;
use App\Http\Controllers\NichePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProvinsiPageController;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/jasa-website', [JasaWebsiteController::class, 'index'])->name('jasa-website');
Route::view('/komunitas', 'komunitas')->name('komunitas');
Route::view('/tentang', 'tentang')->name('tentang');
Route::get('/harga', [HargaController::class, 'index'])->name('harga');
Route::view('/kontak', 'kontak')->name('kontak');

Route::get('/portofolio', [ProjectController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{project:slug}', [ProjectController::class, 'show'])->name('portofolio.show');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/jasa-website-{niche}-di-{location}', [NicheLocationPageController::class, 'show'])
    ->where('niche', implode('|', array_keys(config('niche_pages'))))
    ->where('location', implode('|', array_keys(config('location_pages'))))
    ->name('niche-lokasi.show');
Route::get('/jasa-website-di-{location}', [LocationPageController::class, 'show'])->name('lokasi.show');
Route::get('/jasa-website-{niche}', [NichePageController::class, 'show'])->name('niche.show');

Route::get('/potensi-digital-provinsi', [ProvinsiPageController::class, 'index'])->name('provinsi.index');
Route::get('/potensi-digital-{provinsi}', [ProvinsiPageController::class, 'show'])
    ->where('provinsi', implode('|', array_keys(config('provinsi_pages'))))
    ->name('provinsi.show');

Route::get('/sitemap.xml', function () {
    $posts = Post::published()->get();
    $projects = Project::ordered()->get();

    return response(view('sitemap', compact('posts', 'projects')), 200, [
        'Content-Type' => 'application/xml; charset=utf-8',
    ]);
})->name('sitemap');

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/cari', [PostController::class, 'search'])->name('search');
    Route::get('/kategori/{category:slug}', [PostController::class, 'category'])->name('category');
    Route::get('/tag/{tag:slug}', [PostController::class, 'tag'])->name('tag');
});

Route::get('/{year}/{month}/{slug}', [PostController::class, 'show'])
    ->where('year', '[0-9]{4}')
    ->where('month', '[0-9]{2}')
    ->name('posts.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/{slug}', [PostController::class, 'showBySlug'])
    ->where('slug', '[a-z0-9-]+')
    ->name('posts.showBySlug');
