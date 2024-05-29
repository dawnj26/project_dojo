<?php
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


// Routes for Authentication
Route::controller(AuthenticationController::class)->group(
    function () {
        Route::get('/', 'showLogin')->name('login');
        Route::get('/register', 'showRegister')->name('register');
        Route::get('/logout', 'logout')->name('logout');
    }
);

// Routes for Dashboard
Route::prefix('dashboard')->controller(DashboardController::class)->group(
    function () {
        Route::get('/{category?}', 'showHome')
            ->where('category', '[0-9]+')
            ->name('home');
        Route::get('/browse', 'showBrowse')->name('browse');
        Route::get('/browse/{id}', 'showDetails')->name('details');
    }
);
