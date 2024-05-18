<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

// Routes for Authentication
Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/', 'showLogin')->name('login');
});
