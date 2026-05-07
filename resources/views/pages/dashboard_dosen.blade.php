@extends('layouts.app') 

@section('title', 'Dashboard Dosen') <!-- Mengatur judul tab browser -->

@section('content')
<!-- Bagian isi dashboard yang diambil dari kode awal Anda -->
<style>
    /* Menghapus pembatasan lebar agar teks bisa memanjang horizontal */
    .card h6, .card h3 {
        white-space: nowrap; /* Memaksa teks tetap satu baris */
        display: block;
        width: 100%;
    }

    .card-custom {
        min-width: 200px; /* Memberi lebar minimal agar tidak gepeng */
    }

    /* Pastikan row menggunakan flex-wrap agar tidak bertumpuk */
    .row {
        display: flex;
        flex-wrap: wrap;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-1">Dashboard Dosen</h4>
        <p class="text-muted">Selamat Datang, <strong>Dr. Aris Sudaryanto</strong></p>
    </div>
    <div class="badge bg-info text-dark p-2">Tahun Ajaran 2024/2025</div>
</div>

<!-- Section Dashboard -->
<section id="dashboard" class="active-section">
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <x-stats-card title="Mata Kuliah Diampu" value="2" color="primary" />
        </div>
        <div class="col-md-4">
            <x-stats-card title="Total Mahasiswa" value="60" color="success" />
        </div>
        <div class="col-md-4">
            <x-stats-card title="Progress Input Nilai" value="75%" color="warning" />
        </div>
    </div>
</section>



<!-- Section Matkul Ampu -->
<section id="matkul-ampu">
    <h5 class="fw-bold mb-3">Daftar Mata Kuliah yang Anda Ampu</h5>
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card card-custom p-4">
                <span class="badge bg-primary w-25 mb-2">IF101</span>
                <h5 class="fw-bold">Pemrograman Web</h5>
                <p class="text-muted mb-3">SKS: 3 | Semester: Genap</p>
                <button class="btn btn-sm btn-outline-primary" onclick="goToInput('IF101')">Input Nilai Kelas</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-custom p-4">
                <span class="badge bg-primary w-25 mb-2">IF202</span>
                <h5 class="fw-bold">Basis Data</h5>
                <p class="text-muted mb-3">SKS: 4 | Semester: Genap</p>
                <button class="btn btn-sm btn-outline-primary" onclick="goToInput('IF202')">Input Nilai Kelas</button>
            </div>
        </div>
    </div>
</section>

<!-- Section Input Nilai -->
<section id="input-nilai">
    <div class="card card-custom p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h5 class="fw-bold mb-0"><i class="bi bi-pencil-square me-2"></i>Input Nilai: <span id="matkul-title">Pilih Matakuliah</span></h5>
                <small class="text-muted" id="matkul-code">Kode Matakuliah</small>
            </div>
            <div class="btn-group">
                <button class="btn btn-sm btn-outline-success" onclick="saveAllGrades()"><i class="bi bi-send-check me-1"></i> Simpan Semua Nilai</button>
                <button class="btn btn-sm btn-secondary" onclick="backToMatkul()"><i class="bi bi-arrow-left"></i> Kembali</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th style="width: 200px;">Nilai Akhir (A-E)</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="student-list">
                    <tr class="student-row">
                        <td class="fw-bold nim-col">3312511087</td>
                        <td>Lambok Christian Sipayung</td>
                        <td>
                            <select class="form-select select-nilai" id="nilai-1">
                                <option value="">-- Pilih Nilai --</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </td>
                        <td><span id="status-1" class="badge bg-warning text-dark">Belum Input</span></td>
                        <td><button class="btn btn-success btn-sm" onclick="saveGrade('1', '3312511087')"><i class="bi bi-check-circle me-1"></i>Simpan</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Pindahkan logika JavaScript Anda di sini (goToInput, saveGrade, dsb)
    const currentLecturer = "Dr. Aris Sudaryanto";
    const ampuData = {
        'IF101': { nama: 'Pemrograman Web', pengampu: 'Dr. Aris Sudaryanto' },
        'IF202': { nama: 'Basis Data', pengampu: 'Dr. Aris Sudaryanto' }
    };

    // Logika navigasi antar section
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    function goToInput(matkulCode) {
        const matkul = ampuData[matkulCode];
        document.getElementById('matkul-title').innerText = matkul.nama;
        document.getElementById('matkul-code').innerText = matkulCode;
        
        sections.forEach(s => s.classList.remove('active-section'));
        document.getElementById('input-nilai').classList.add('active-section');
    }

    function backToMatkul() {
        sections.forEach(s => s.classList.remove('active-section'));
        document.getElementById('matkul-ampu').classList.add('active-section');
    }

    function saveGrade(id, nim) {
        const selectElement = document.getElementById(`nilai-${id}`);
        const grade = selectElement.value;
        if (!grade) return alert("Pilih nilai!");
        if (confirm(`Simpan nilai ${grade} untuk ${nim}?`)) {
            document.getElementById(`status-${id}`).className = "badge bg-success";
            document.getElementById(`status-${id}`).innerText = "Tersimpan";
            selectElement.disabled = true;
        }
    }
</script>
@endsection