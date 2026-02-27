<?php

use App\Http\Controllers\PlatillosController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::resource('platillos', PlatillosController::class);
Route::resource('menus', MenuController::class);
