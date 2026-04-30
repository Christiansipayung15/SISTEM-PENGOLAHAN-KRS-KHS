<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Baris ini yang memanggil file halaman_dashboard.blade.php
        return view('halaman_dashboard');
    }
    
}
