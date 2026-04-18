<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/solusi', 'solusi')->name('solusi');
Route::view('/komunitas', 'komunitas')->name('komunitas');

Route::get('/sitemap.xml', function () {
    return response(view('sitemap'), 200, [
        'Content-Type' => 'application/xml; charset=utf-8',
    ]);
})->name('sitemap');

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/search', [BlogController::class, 'search'])->name('search');
    Route::get('/category/{slug}', [BlogController::class, 'category'])->name('category');
    Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('tag');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
