<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Middleware\EnsureValidApiBearerToken;
use Illuminate\Support\Facades\Route;

Route::middleware([EnsureValidApiBearerToken::class])->group(function () {
    Route::post('/posts', [PostController::class, 'store'])->name('api.posts.store');
});
