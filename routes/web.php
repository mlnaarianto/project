<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tampilan.home');
});

Route::get('/about', function () {
    return view('tampilan.about');
});

Route::get('/login', function () {
    return view('tampilan.login');
})->name('login');

Route::get('/register', function () {
    return view('tampilan.register');
})->name('register');

