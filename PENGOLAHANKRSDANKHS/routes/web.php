<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan namanya sama dengan file di folder views
});

Route::get('/login', function () {
    return view('login');
});

// Format: Route::view('URL-YANG-DIKETIK', 'NAMA-FILE-DI-VIEWS');

Route::view('/home', 'home');
Route::view('/login', 'login');
Route::view('/dashboard', 'dashboard');
Route::view('/welcome', 'welcome');
Route::view('/register', 'register');
Route::view('/khs', 'khs');

