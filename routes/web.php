<?php

use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Welcome\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/our-services', [ServiceController::class, 'services']);
