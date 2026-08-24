<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\JasaWebsiteController;
use App\Http\Controllers\KalkulatorBiayaAdminMarketplaceController;
use App\Http\Controllers\LocationPageController;
use App\Http\Controllers\NicheLocationPageController;
use App\Http\Controllers\NichePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProvinsiPageController;
use App\Http\Middleware\EnsureAdminUser;
use App\Livewire\AdminV2\Categories\Index;
use App\Livewire\AdminV2\Dashboard;
use App\Livewire\AdminV2\Posts\Create;
use App\Livewire\AdminV2\Posts\Edit;
use App\Livewire\AdminV2\Posts\Show;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $partners = Partner::active()->ordered()->get();

    return view('welcome', compact('partners'));
})->name('home');
Route::get('/jasa-website', [JasaWebsiteController::class, 'index'])->name('jasa-website');
Route::view('/komunitas', 'komunitas')->name('komunitas');
Route::view('/tentang', 'tentang')->name('tentang');
Route::get('/harga', [HargaController::class, 'index'])->name('harga');
Route::view('/kontak', 'kontak')->name('kontak');
Route::get('/kalkulator-biaya-admin-marketplace', [KalkulatorBiayaAdminMarketplaceController::class, 'index'])->name('kalkulator-biaya-admin-marketplace');

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

Route::get('/artikel/{slug}', [PostController::class, 'showBySlug'])
    ->where('slug', '[a-z0-9-]+')
    ->name('posts.showBySlug');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth', EnsureAdminUser::class])
    ->prefix('admin-v2')
    ->name('admin-v2.')
    ->group(function () {
        Route::get('/', Dashboard::class)->name('dashboard');

        // Categories
        Route::get('/categories', Index::class)->name('categories.index');

        // Tags
        Route::get('/tags', App\Livewire\AdminV2\Tags\Index::class)->name('tags.index');

        // Posts
        Route::get('/posts', App\Livewire\AdminV2\Posts\Index::class)->name('posts.index');
        Route::get('/posts/create', Create::class)->name('posts.create');
        Route::get('/posts/{post}/edit', Edit::class)->name('posts.edit');
        Route::get('/posts/{post}', Show::class)->name('posts.show');

        // Projects
        Route::get('/projects', App\Livewire\AdminV2\Projects\Index::class)->name('projects.index');
        Route::get('/projects/create', App\Livewire\AdminV2\Projects\Create::class)->name('projects.create');
        Route::get('/projects/{project}/edit', App\Livewire\AdminV2\Projects\Edit::class)->name('projects.edit');
        Route::get('/projects/{project}', App\Livewire\AdminV2\Projects\Show::class)->name('projects.show');

        // Package Jasa Website
        Route::get('/package-jasa-websites', App\Livewire\AdminV2\PackageJasaWebsites\Index::class)->name('package-jasa-websites.index');
        Route::get('/package-jasa-websites/create', App\Livewire\AdminV2\PackageJasaWebsites\Create::class)->name('package-jasa-websites.create');
        Route::get('/package-jasa-websites/{package}', App\Livewire\AdminV2\PackageJasaWebsites\Show::class)->name('package-jasa-websites.show');
        Route::get('/package-jasa-websites/{package}/edit', App\Livewire\AdminV2\PackageJasaWebsites\Edit::class)->name('package-jasa-websites.edit');

        // Partners
        Route::get('/partners', App\Livewire\AdminV2\Partners\Index::class)->name('partners.index');
        Route::get('/partners/create', App\Livewire\AdminV2\Partners\Create::class)->name('partners.create');
        Route::get('/partners/{partner}', App\Livewire\AdminV2\Partners\Show::class)->name('partners.show');
        Route::get('/partners/{partner}/edit', App\Livewire\AdminV2\Partners\Edit::class)->name('partners.edit');

        // Popups
        Route::get('/popups', App\Livewire\AdminV2\Popups\Index::class)->name('popups.index');
        Route::get('/popups/create', App\Livewire\AdminV2\Popups\Create::class)->name('popups.create');
        Route::get('/popups/{popup}', App\Livewire\AdminV2\Popups\Show::class)->name('popups.show');
        Route::get('/popups/{popup}/edit', App\Livewire\AdminV2\Popups\Edit::class)->name('popups.edit');

        // Faqs
        Route::get('/faqs', App\Livewire\AdminV2\Faqs\Index::class)->name('faqs.index');
        Route::get('/faqs/create', App\Livewire\AdminV2\Faqs\Create::class)->name('faqs.create');
        Route::get('/faqs/{faq}', App\Livewire\AdminV2\Faqs\Show::class)->name('faqs.show');
        Route::get('/faqs/{faq}/edit', App\Livewire\AdminV2\Faqs\Edit::class)->name('faqs.edit');

        // Media
        Route::get('/media', App\Livewire\AdminV2\Media\Index::class)->name('media.index');
    });

require __DIR__.'/settings.php';

// Legacy URLs from before articles moved under /artikel/{slug}. Redirect
// 301 so search rankings and old backlinks carry over to the new path.
Route::get('/{slug}', [PostController::class, 'redirectLegacySlug'])
    ->where('slug', '[a-z0-9-]+')
    ->name('posts.legacySlug');
