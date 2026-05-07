@extends('layouts.app') 

@section('content')
    <!-- HEADER SECTION -->
    <div class="py-4 border-bottom mb-4">
        <h2 class="fw-bold">Si Pekas Polibatam</h2>
        <p class="text-muted">Selamat Datang Admin, Otoritas penuh pengelolaan data sistem KRS & KHS</p>
    </div>

    <!-- STATISTIC CARDS -->
    <div class="row g-3 mb-5">
        <x-stat-card title="Total Mahasiswa" count="1" color="primary" id="count-mhs" />
        <x-stat-card title="Total Dosen" count="1" color="success" id="count-dsn" />
        <x-stat-card title="Total Matakuliah" count="1" color="warning" id="count-matkul" />
    </div>

    <!-- ACTION SECTION -->
    <div class="d-flex gap-2 mb-4">
        <button class="btn btn-outline-primary active nav-link-admin" data-target="dash">Dashboard</button>
        <button class="btn btn-outline-primary nav-link-admin" data-target="data-matkul">Kelola Matakuliah</button>
        <button class="btn btn-outline-primary nav-link-admin" data-target="data-pengguna">Kelola Pengguna</button>
    </div>

    <!-- ISI KONTEN -->
    <section id="dash" class="active-section">
        {{-- Konten Dashboard --}}
    </section>
    
    <section id="data-matkul" style="display:none;">
        {{-- Form & Table Matkul --}}
    </section>
@endsection