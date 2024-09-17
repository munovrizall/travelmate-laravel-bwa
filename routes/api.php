<?php

use Illuminate\Support\Facades\Route;

Route::get('/destination', [\App\Http\Controllers\DestinationController::class, 'index']);