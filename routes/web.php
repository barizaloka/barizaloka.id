<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\LocationPageController;
use App\Http\Controllers\NicheLocationPageController;
use App\Http\Controllers\NichePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/solusi', 'solusi')->name('solusi');
Route::view('/komunitas', 'komunitas')->name('komunitas');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/harga', 'harga')->name('harga');
Route::view('/kontak', 'kontak')->name('kontak');

Route::get('/layanan', [ServiceController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{service:slug}', [ServiceController::class, 'show'])->name('layanan.show');

Route::get('/portofolio', [ProjectController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{project:slug}', [ProjectController::class, 'show'])->name('portofolio.show');

Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimoni.index');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/jasa-website-{niche}-di-{location}', [NicheLocationPageController::class, 'show'])
    ->where('niche', implode('|', array_keys(config('niche_pages'))))
    ->where('location', implode('|', array_keys(config('location_pages'))))
    ->name('niche-lokasi.show');
Route::get('/jasa-website-di-{location}', [LocationPageController::class, 'show'])->name('lokasi.show');
Route::get('/jasa-website-{niche}', [NichePageController::class, 'show'])->name('niche.show');

Route::get('/sitemap.xml', function () {
    $posts = Post::published()->get();
    $services = Service::ordered()->get();
    $projects = Project::ordered()->get();

    return response(view('sitemap', compact('posts', 'services', 'projects')), 200, [
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
