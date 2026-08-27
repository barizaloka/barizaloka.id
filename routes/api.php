<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Middleware\EnsureValidApiBearerToken;
use Illuminate\Support\Facades\Route;

Route::middleware([EnsureValidApiBearerToken::class])->group(function () {
    Route::post('/v1/posts', [PostController::class, 'store'])->name('api.v1.posts.store');
});
