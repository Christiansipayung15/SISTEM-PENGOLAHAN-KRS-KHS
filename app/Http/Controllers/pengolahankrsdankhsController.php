<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengolahankrsdankhsController extends Controller
{
    public function tampilkan($id, $nama)
    {
        // Menyimpan data id (NIM) dan nama ke dalam array untuk dikirim ke View
        return view('pengolahan_krs_dan_khs', [
            'id' => $id, 
            'nama' => $nama
        ]);
    }
}
