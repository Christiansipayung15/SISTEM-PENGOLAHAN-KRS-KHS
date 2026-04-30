<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pengolahankrsdankhsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

// Jadikan komentar route lama
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/register', 'register');
Route::view('/dashboard mahasiswa', 'dashboard_mahasiswa');
Route::view('/dashboard dosen', 'dashboard_dosen');
Route::view('/dashboard admin', 'dashboard_admin');
Route::view('/login mahasiswa', 'login_mahasiswa');
Route::view('/login dosen', 'login_dosen');

// Tambahkan route baru menggunakan Controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/list-product', [ProductController::class, 'index']);

Route::get('/list', function () {
    return view('layout.list'); 
});

Route::get('/dashboard', function () {
    return view('halaman_dashboard'); 
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [LoginController::class, 'index']);
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::get('/list-product', function () {
    // Data dummy untuk simulasi isi tabel
    $data = [
        ['id' => '1', 'produk' => 'Laptop Asus'],
        ['id' => '2', 'produk' => 'Mouse Logitech'],
        ['id' => '3', 'produk' => 'Keyboard Mechanical'],
    ];

    return view('list_product', compact('data'));
});


// routes/web.php

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});


// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pengolahankrsdankhs/{id}/{nama}', [pengolahankrsdankhsController::class, 'tampilkan']);

Route::get('/christian', function () {
        return view('christian');
    });
    Route::get('/dashboard_mahasiswa', function () {
    return view('dashboard_mahasiswa');
});
 Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
});
 Route::get('/dashboard_dosen', function () {
    return view('dashboard_dosen');
});
 Route::get('/pengolahan_krs_dan_khs', function () {
    return view('pengolahan_krs_dan_khs');
});
Route::get('/barang', [ListBarangController::class, 'tampilkan']);