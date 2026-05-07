@extends('layouts.app') 

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold">Dashboard Mahasiswa</h4>
            <p class="text-muted">Hi, <strong id="user-fullname">{{ $nama_user }}</strong>! 👋</p>
        </div>
        <div class="profile-section">
            <div class="profile-avatar" id="profile-initial">--</div>
            <div class="profile-info">
                <p class="name" id="display-name">Memuat...</p>
                <p class="nim">Mahasiswa</p> 
            </div>
        </div>
    </div>

    {{-- Dashboard Stats --}}
    <section id="dashboard" class="active-section">
        <div class="row g-3 mb-4">
  {{-- Di file dashboard_mahasiswa.blade.php --}}
<x-stat-card title="IP SEMESTER LALU" count="3.45" color="primary" />
<x-stat-card title="MAKSIMAL SKS" count="24 SKS" color="success" />
<x-stat-card title="SKS TERPILIH" count="0 SKS" color="warning" />
</div>
    </section>

    {{-- Pengambilan KRS --}}
    <section id="krs">
        <div class="card card-stat p-4" id="area-krs">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold"><i class="fas fa-tasks me-2"></i>Pengambilan KRS</h5>
                <div class="filter-area">
                    <select class="form-select form-select-sm w-auto" id="filter-semester">
                        <option value="1">Semester 1</option>
                        <option value="2" selected>Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                    </select>
                </div>
            </div>
            
            <div class="alert alert-info py-2 small border-0">
                Total SKS Terpilih: <strong id="total-sks">0</strong> / 24 SKS.
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="no-print">Pilih</th>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Sem</th>
                            <th>Dosen</th>
                        </tr>
                    </thead>
                    <tbody id="krs-table">
                        <tr data-semester="2">
                            <td class="no-print"><input type="checkbox" class="krs-cb" data-sks="4"></td>
                            <td>IF202</td>
                            <td>Basis Data (MySQL)</td>
                            <td>4</td>
                            <td>2</td>
                            <td>Evaliata Br. Sembiring</td>
                        </tr>
                        {{-- Tambahkan baris MK lainnya di sini --}}
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-3 no-print">
                <button class="btn btn-outline-secondary me-2" onclick="downloadPDF('area-krs', 'KRS_Mahasiswa')">Export PDF</button>
                <button class="btn btn-primary px-4" onclick="alert('KRS Berhasil Disimpan!')">Simpan KRS</button>
            </div>
        </div>
    </section>

    {{-- KHS --}}
    <section id="khs">
        <div class="card card-stat p-4" id="area-khs">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold">Kartu Hasil Studi (KHS)</h5>
                <button class="btn btn-sm btn-outline-primary no-print" onclick="downloadPDF('area-khs', 'KHS_Mahasiswa')">Export PDF</button>
            </div>
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr><th>No</th><th>Kode</th><th>Mata Kuliah</th><th>SKS</th><th>Nilai</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>IF101</td><td class="text-start">Pemrograman Web</td><td>3</td><td>A</td></tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    let totalSks = 0;

    function loadUserData() {
        // Menggunakan sintaks Blade yang lebih bersih
        const savedName = "{{ $nama_user }}";

        if(document.getElementById('user-fullname')) {
            document.getElementById('user-fullname').innerText = savedName;
        }
        if(document.getElementById('display-name')) {
            document.getElementById('display-name').innerText = savedName;
        }

        const initials = savedName.split(' ')
                                   .filter(word => word.length > 0)
                                   .map(n => n[0])
                                   .join('')
                                   .substring(0, 2)
                                   .toUpperCase();
        
        const profileElement = document.getElementById('profile-initial');
        if(profileElement) {
            profileElement.innerText = initials;
        }
    }

    window.onload = function() {
        loadUserData();
        filterTable('2');
    };

    // Logika Filter, Navigasi, dan SKS tetap sama...
</script>
@endsection