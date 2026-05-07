@extends('layouts.app') 

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
    <img src="{{ asset('logo poltek.png') }}" alt="Polibatam Logo" style="width: 80px; margin-bottom: 20px;">

    <div class="card shadow-sm p-4" style="max-width: 480px; width: 100%; border-radius: 12px; border: none; background: #fff;">
        <div class="text-center mb-4">
            <h3 class="fw-bold mb-1">Reset Password</h3>
            <p class="text-muted small">PENGOLAHAN KRS & KHS</p>
        </div>

        <form id="resetPasswordForm">
            @csrf {{-- Wajib di Laravel untuk keamanan form --}}
            
            <div class="mb-3">
                <label class="form-label fw-bold">Peran</label>
                <select id="peran" class="form-select" required>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Username</label>
                <input type="text" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Password Lama</label>
                <input type="password" class="form-control" placeholder="Masukkan password lama" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Password Baru</label>
                <input type="password" class="form-control" placeholder="Masukkan password baru" required>
            </div>

            {{-- BUKTI PENGGUNAAN COMPONENT --}}
            <x-primary-button type="submit">
            </x-primary-button>
        </form>

        <div class="text-center mt-4">
            <p class="small mb-0">Batal ganti password? <a href="/" class="text-decoration-none fw-bold" style="color: #004d99;">Kembali ke Login</a></p>
        </div>
    </div> 

    <div class="footer-text mt-4 text-muted small text-center">
        © 2026 Politeknik Negeri Batam. All rights reserved.
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const peran = document.getElementById('peran').options[document.getElementById('peran').selectedIndex].text;
        alert('Password untuk akun ' + peran + ' berhasil diperbarui!');
    });
</script>
@endsection