<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pengolahan_krs_dan_khs;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

// Jadikan komentar route lama
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/lupa-password', 'lupa_password');
Route::view('/welcome', 'welcome');
Route::view('/dashboard_mahasiswa', 'dashboard_mahasiswa');
Route::view('/dashboard_dosen', 'dashboard_dosen');
Route::view('/contact', 'contact');
Route::view('/dashboard_admin', 'dashboard_admin');
Route::view('/login_mahasiswa', 'login_mahasiswa');
Route::view('/list_product', 'list_product');
Route::view('/list_barang', 'list_barang');
Route::view('/halaman_dashboard', 'halaman_dashboard');
Route::view('/login_dosen', 'login_dosen');
Route::view('/halaman_login', 'halaman_login');
Route::view('/pengolahan_krs_dan_khs', 'pengolahan_krs_dan_khs');
Route::view('/home', 'home');
Route::view('/login_admin', 'login_admin');

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
Route::get('/dashboard_mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard_admin', [AdminController::class, 'index']);
Route::get('/alamat-url', [pengolahan_krs_dan_khs::class, 'namaFungsi']);
Route::get('/christian', function () {
        return view('christian');
    });
Route::get('/dashboard-mahasiswa', function () {
    return view('dashboard_mahasiswa'); // Ini akan memanggil file dashboard_mahasiswa.blade.php
});
// Ubah di web.php baris 101
Route::get('/lupa_password', function () {
    return view('pages.lupa_password'); 
});

Route::get('/dashboard_admin', [AdminController::class, 'index'])->name('dashboard');

Route::post('/login-dosen', [LoginController::class, 'prosesLogin'])->name('login.proses');
Route::get('/dashboard_dosen', function () {
    // Tambahkan 'pages.' sebelum nama file
    return view('pages.dashboard_dosen');
})->name('dashboard.dosen');

Route::get('/', function () {
    return view('login_dosen');
})->name('login_dosen');

// Route untuk menampilkan halaman login
Route::get('/login_mahasiswa', function () {
    return view('login_mahasiswa');
})->name('login');

// Route untuk memproses form login
Route::post('/login-proses', function () {
    // Sementara arahkan ke dashboard admin
    return redirect()->route('dashboard');
})->name('login.process');

// Route untuk halaman pengolahan
Route::get('/pengolahan_krs_dan_khs', function () {
    return view('pengolahan_krs_dan_khs');
});