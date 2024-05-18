<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

// Routes for Authentication
Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/', 'showLogin')->name('login');
});

// Routes for Dashboard
Route::get('/dashboard', function() {
    return view('dashboard.home');
})->name('dashboard');
