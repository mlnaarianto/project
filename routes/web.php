<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// PUBLIC PAGE
Route::get('/', function () {
    return view('tampilan.home');
});

Route::get('/about', function () {
    return view('tampilan.about');
});

// LOGIN PAGE (Google Only)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// GOOGLE OAUTH
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

// FACEBOOK LOGIN
Route::get('/auth/facebook', [AuthController::class, 'redirectToFacebook'])->name('facebook.redirect');
Route::get('/auth/facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('facebook.callback');


// DASHBOARD (HANYA BISA DI AKSES SETELAH LOGIN)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
