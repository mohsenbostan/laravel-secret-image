<?php

use \Illuminate\Support\Facades\Route;
use \Mohsenbostan\LaravelSecretImage\Http\Controllers\LaravelSecretImageController;

Route::middleware(config('laravel-secret-image.middlewares'))->name('secret-image.')->group(function () {
    Route::get('/secret-image', [
        LaravelSecretImageController::class,
        'showImage'
    ])->name('show-image');
});
