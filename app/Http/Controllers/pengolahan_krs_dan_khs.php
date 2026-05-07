<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengolahan_krs_dan_khs extends Controller
{
    public function index()
    {
        // Mendefinisikan data yang ingin ditampilkan
        $id = "23411000"; // Ganti dengan NIM Anda
        $nama = "Lambok Christian Sipayung"; // Ganti dengan Nama Anda
        
        // Mengirimkan variabel 'id' dan 'nama' ke view
        return view('pengolahan_krs_dan_khs', compact('id', 'nama'));
    }
}