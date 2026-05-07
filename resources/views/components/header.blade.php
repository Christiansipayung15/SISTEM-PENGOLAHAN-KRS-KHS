<div class="sidebar">
    <div class="brand">
        <img src="logo poltek.png" alt="Logo">
        <div class="brand-text">
            <span class="brand-title">Si Pekas Polibatam</span>
            <span class="brand-subtitle">Dashboard Dosen</span>
        </div>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link active" data-target="dashboard"><i class="bi bi-grid me-2"></i> Dashboard</a>
        <a class="nav-link" data-target="matkul-ampu"><i class="bi bi-book me-2"></i> Matakuliah Diampu</a>
        <a class="nav-link" data-target="input-nilai"><i class="bi bi-pencil-square me-2"></i> Input Nilai Akhir</a>
        <hr class="border-secondary">
      <a href="{{ url('/login_dosen') }}" class="nav-link text-warning" onclick="confirmLogout()">
        <i class="bi bi-box-arrow-right me-2"></i> Keluar
    </a>
</div>