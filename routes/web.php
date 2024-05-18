<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Routes for Authentication
Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/', 'showLogin')->name('login');
    Route::get('/register', 'showRegister')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

// Routes for Dashboard
Route::get('/dashboard', function() {
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    return view('dashboard.home');
})->name('dashboard');
