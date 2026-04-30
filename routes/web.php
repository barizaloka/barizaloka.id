<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/solusi', 'solusi')->name('solusi');
Route::view('/komunitas', 'komunitas')->name('komunitas');

Route::get('/sitemap.xml', function () {
    return response(view('sitemap'), 200, [
        'Content-Type' => 'application/xml; charset=utf-8',
    ]);
})->name('sitemap');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
