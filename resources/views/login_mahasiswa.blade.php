@extends('layouts.auth')

@section('title', 'Login Mahasiswa | APAO Polibatam')

@section('content')
    <img src="{{ asset('logo poltek.png') }}" alt="Logo Polibatam" class="logo">
    <h5 class="mb-1">Pengolahan KRS & KHS</h5>
    <p class="text-muted mb-4">Login Mahasiswa</p>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        
        {{-- Menggunakan Component untuk NIM --}}
       <div class="mb-3 text-start">
    <label class="form-label">Nim:</label>
    <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
</div>

        {{-- Menggunakan Component untuk Password --}}
        <div class="mb-3 text-start">
    <label class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
</div>

        {{-- Menggunakan Component untuk Tombol --}}
        <button type="submit" class="btn btn-primary w-100">
    Masuk
</button>
    </form>

    <small class="text-muted d-block mt-3">© 2026 Politeknik Negeri Batam. All rights reserved.</small>
@endsection