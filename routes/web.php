<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/solusi', 'solusi')->name('solusi');
Route::view('/komunitas', 'komunitas')->name('komunitas');
Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/sitemap.xml', function () {
    $posts = Post::published()->get();

    return response(view('sitemap', compact('posts')), 200, [
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
