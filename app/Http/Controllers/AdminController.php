<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // TAMBAHKAN FUNGSI INI:
    public function index()
    {
        // Pastikan file view ini sudah ada di resources/views/pages/admin/dashboard.blade.php
        
        return view('pages.dashboard_admin');

    }
}