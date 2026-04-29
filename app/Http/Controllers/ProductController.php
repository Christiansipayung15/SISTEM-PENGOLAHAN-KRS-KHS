<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengirim data ID dan Produk dari sini
        $data = [
            ['id' => '1', 'produk' => 'Laptop Asus'],
            ['id' => '2', 'produk' => 'Mouse Logitech'],
            ['id' => '3', 'produk' => 'Keyboard Mechanical'],
        ];

        return view('list_product', compact('data'));
    }
}

