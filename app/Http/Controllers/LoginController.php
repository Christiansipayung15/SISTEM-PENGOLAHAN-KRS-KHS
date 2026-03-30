<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
   return view('halaman_login');// Manajer Login membuka ruangan halaman_login
}
}
