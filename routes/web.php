<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\JasaWebsiteController;
use App\Http\Controllers\KalkulatorBiayaAdminMarketplaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 1. Halaman Utama & Informasi Umum
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $partners = Partner::active()->ordered()->get();

    return view('welcome', compact('partners'));
})->name('home');

Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/kontak', 'kontak')->name('kontak');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

/*
|--------------------------------------------------------------------------
| 2. Layanan & Fitur Utama
|--------------------------------------------------------------------------
*/
Route::get('/jasa-website', [JasaWebsiteController::class, 'index'])->name('jasa-website');
Route::get('/harga', [HargaController::class, 'index'])->name('harga');
Route::get('/kalkulator-biaya-admin-marketplace', [KalkulatorBiayaAdminMarketplaceController::class, 'index'])->name('kalkulator-biaya-admin-marketplace');

// Portofolio
Route::get('/portofolio', [ProjectController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{project:slug}', [ProjectController::class, 'show'])->name('portofolio.show');

/*
|--------------------------------------------------------------------------
| 3. Halaman SEO & Landing Pages On-Page
|--------------------------------------------------------------------------
| Seluruh route khusus SEO, landing page, dan programmatic SEO dimuat dari
| file routes/seo.php.
|--------------------------------------------------------------------------
*/
require __DIR__.'/seo.php';

/*
|--------------------------------------------------------------------------
| 4. Blog & Artikel
|--------------------------------------------------------------------------
*/
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

Route::get('/artikel/{slug}', [PostController::class, 'showBySlug'])
    ->where('slug', '[a-z0-9-]+')
    ->name('posts.showBySlug');

/*
|--------------------------------------------------------------------------
| 5. System Utilities (Sitemap, dll)
|--------------------------------------------------------------------------
*/
Route::get('/sitemap.xml', function () {
    $posts = Post::published()->get();
    $projects = Project::ordered()->get();

    return response(view('sitemap', compact('posts', 'projects')), 200, [
        'Content-Type' => 'application/xml; charset=utf-8',
    ]);
})->name('sitemap');

/*
|--------------------------------------------------------------------------
| 6. Area Autentikasi User (User Dashboard)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| 7. Admin Panel (Admin V2)
|--------------------------------------------------------------------------
| Seluruh route admin panel dimuat dari file routes/admin.php.
|--------------------------------------------------------------------------
*/
require __DIR__.'/admin.php';

require __DIR__.'/settings.php';

/*
|--------------------------------------------------------------------------
| 8. Fallback / Legacy Redirects (Harus di Paling Bawah)
|--------------------------------------------------------------------------
| Route dynamic /{slug} legacy ini harus selalu berada di paling akhir.
|--------------------------------------------------------------------------
*/
Route::get('/{slug}', [PostController::class, 'redirectLegacySlug'])
    ->where('slug', '[a-z0-9-]+')
    ->name('posts.legacySlug');
