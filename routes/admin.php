<?php

use App\Http\Middleware\EnsureAdminUser;
use App\Livewire\AdminV2;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel (Admin V2) Routes
|--------------------------------------------------------------------------
| File ini menampung seluruh route untuk dashboard & modul admin v2.
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', EnsureAdminUser::class])
    ->prefix('admin-v2')
    ->name('admin-v2.')
    ->group(function () {
        Route::get('/', AdminV2\Dashboard::class)->name('dashboard');

        // Categories & Tags
        Route::get('/categories', AdminV2\Categories\Index::class)->name('categories.index');
        Route::get('/tags', AdminV2\Tags\Index::class)->name('tags.index');

        // Posts
        Route::get('/posts', AdminV2\Posts\Index::class)->name('posts.index');
        Route::get('/posts/create', AdminV2\Posts\Create::class)->name('posts.create');
        Route::get('/posts/{post}/edit', AdminV2\Posts\Edit::class)->name('posts.edit');
        Route::get('/posts/{post}', AdminV2\Posts\Show::class)->name('posts.show');

        // Projects
        Route::get('/projects', AdminV2\Projects\Index::class)->name('projects.index');
        Route::get('/projects/create', AdminV2\Projects\Create::class)->name('projects.create');
        Route::get('/projects/{project}/edit', AdminV2\Projects\Edit::class)->name('projects.edit');
        Route::get('/projects/{project}', AdminV2\Projects\Show::class)->name('projects.show');

        // Package Jasa Website
        Route::get('/package-jasa-websites', AdminV2\PackageJasaWebsites\Index::class)->name('package-jasa-websites.index');
        Route::get('/package-jasa-websites/create', AdminV2\PackageJasaWebsites\Create::class)->name('package-jasa-websites.create');
        Route::get('/package-jasa-websites/{package}', AdminV2\PackageJasaWebsites\Show::class)->name('package-jasa-websites.show');
        Route::get('/package-jasa-websites/{package}/edit', AdminV2\PackageJasaWebsites\Edit::class)->name('package-jasa-websites.edit');

        // Partners
        Route::get('/partners', AdminV2\Partners\Index::class)->name('partners.index');
        Route::get('/partners/create', AdminV2\Partners\Create::class)->name('partners.create');
        Route::get('/partners/{partner}', AdminV2\Partners\Show::class)->name('partners.show');
        Route::get('/partners/{partner}/edit', AdminV2\Partners\Edit::class)->name('partners.edit');

        // Popups
        Route::get('/popups', AdminV2\Popups\Index::class)->name('popups.index');
        Route::get('/popups/create', AdminV2\Popups\Create::class)->name('popups.create');
        Route::get('/popups/{popup}', AdminV2\Popups\Show::class)->name('popups.show');
        Route::get('/popups/{popup}/edit', AdminV2\Popups\Edit::class)->name('popups.edit');

        // Faqs
        Route::get('/faqs', AdminV2\Faqs\Index::class)->name('faqs.index');
        Route::get('/faqs/create', AdminV2\Faqs\Create::class)->name('faqs.create');
        Route::get('/faqs/{faq}', AdminV2\Faqs\Show::class)->name('faqs.show');
        Route::get('/faqs/{faq}/edit', AdminV2\Faqs\Edit::class)->name('faqs.edit');

        // Media
        Route::get('/media', AdminV2\Media\Index::class)->name('media.index');
    });
