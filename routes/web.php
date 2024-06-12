<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awards', [App\Http\Controllers\AwardController::class, 'index']);

Route::get('/genres', [App\Http\Controllers\GenreController::class, 'index']);

Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);

Route::get('/games', [App\Http\Controllers\GameController::class, 'index']);

Route::get('/shawshank-redemption', [App\Http\Controllers\GameController::class, 'index']);