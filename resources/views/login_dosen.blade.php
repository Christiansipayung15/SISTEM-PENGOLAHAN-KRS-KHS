@extends('layouts.app')

@section('title', 'Login')

@section('content')

  <div class="card p-4 text-center">
    <img src="logo poltek.png" alt="Logo Polibatam" class="logo">
    <h5 class="mb-1">Pengolahan KRS & KHS </h5>
    <p class="text-muted mb-4">Login Dosen</p>

    <!-- Perhatikan perubahan action dan penambahan @csrf -->
<form action="#" method="POST">
    @csrf 
    
    <x-input-field label="Username" name="username" placeholder="Masukkan username" />
    <x-input-field label="Password" name="password" type="password" placeholder="Masukkan password" />
    
    <button type="submit" class="btn btn-primary w-100">Masuk</button>
</form>

    
    <small class="text-muted d-block mt-3">© 2026 Politeknik Negeri Batam. All rights reserved.</small>
  </div>

@endsection

