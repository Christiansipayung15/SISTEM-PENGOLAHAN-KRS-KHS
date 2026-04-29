<?php

use Illuminate\Support\Facades\Route;
// Pastikan baris ini ada dan tidak typo (perhatikan backslash \)
use App\Http\Controllers\ATMController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Baris ini yang mendaftarkan URL /atm
Route::get('/atm', [ATMController::class, 'demo']);
// Pastikan formatnya seperti ini
Route::get('/login', [LoginController::class, 'index']);