<?php

use Illuminate\Support\Facades\Route;

Route::get('/destination', [\App\Http\Controllers\DestinationController::class, 'index']);
Route::post('/destination/search', [\App\Http\Controllers\DestinationController::class, 'search']);
Route::get('/top-destination', [\App\Http\Controllers\TopDestinationController::class, 'index']);