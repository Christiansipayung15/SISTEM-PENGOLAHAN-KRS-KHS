@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="card p-4 text-center">
    <img src="{{ asset('logo poltek.png') }}" alt="Logo Polibatam" class="logo mb-3">
    <h5 class="mb-1">Pengolahan KRS & KHS</h5>
    <p class="text-muted mb-4">Login Admin</p>

    <form action="{{ route('login.proses') }}" method="POST">
        @csrf
        
        <div class="mb-3 text-start">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

      
        <div class="d-grid">
            <x-button-primary>
                Masuk Sekarang
            </x-button-primary>
        </div>
    </form>

    {{-- Sekarang Footer ini akan muncul karena berada SEBELUM @endsection --}}
    <small class="text-muted d-block mt-4">
        © 2026 Politeknik Negeri Batam. All rights reserved.
    </small>
</div>
@endsection