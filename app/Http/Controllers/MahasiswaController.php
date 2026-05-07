<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Letakkan kodenya di sini
    public function index()
    {
        // Untuk sementara, isi manual agar error hilang
        $nama_user = "Lambok Christian Sipayung"; 

       return view('pages.dashboard_mahasiswa', compact('nama_user'));
       return view('pages.dashboard_dosen', compact('nama_user'));
       return view('pages.dashboard_admin', compact('nama_user'));
    }
}