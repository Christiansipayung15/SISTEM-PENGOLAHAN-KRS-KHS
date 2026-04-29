<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Dosen - Sistem KRS & KHS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }
    .sidebar { height: 100vh; width: 260px; background-color: #0f172a; position: fixed; top: 0; left: 0; padding: 1.5rem 1rem; color: white; z-index: 1000; }
    
    /* Branding Sidebar sesuai Si Pekas Polibatam */
    .sidebar .brand { display: flex; align-items: center; margin-bottom: 2rem; padding-left: 0.5rem; }
    .sidebar .brand img { width: 45px; height: 45px; border-radius: 8px; margin-right: 12px; object-fit: cover; }
    .sidebar .brand-text { display: flex; flex-direction: column; }
    .sidebar .brand-title { font-weight: 700; font-size: 1.1rem; color: white; line-height: 1.2; }
    .sidebar .brand-subtitle { font-size: 0.85rem; color: #94a3b8; }

    .sidebar .nav-link { color: #cbd5e1; border-radius: 10px; padding: 12px 15px; margin-bottom: 8px; transition: 0.3s; text-decoration: none; display: block; cursor: pointer; }
    .sidebar .nav-link:hover, .sidebar .nav-link.active { background-color: #1e293b; color: #3b82f6; }
    .content { margin-left: 260px; padding: 2rem; }
    .card-custom { border: none; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); background: white; }
    section { display: none; }
    section.active-section { display: block; animation: fadeIn 0.3s ease-in-out; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    .table-hover tbody tr:hover { background-color: #f1f5f9; }
  </style>
</head>
<body>

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
      <a href="#" class="nav-link text-warning" onclick="confirmLogout()"><i class="bi bi-box-arrow-right me-2"></i> Keluar</a>
    </nav>
  </div>

  <div class="content">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-1">Dashboard Dosen</h4>
        <p class="text-muted">Selamat Datang, <strong>Dr. Aris Sudaryanto</strong></p>
      </div>
      <div class="badge bg-info text-dark p-2">Tahun Ajaran 2024/2025</div>
    </div>

    <section id="dashboard" class="active-section">
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <div class="card card-custom p-4 border-start border-primary border-4 text-center">
            <h6 class="text-muted small">Mata Kuliah Diampu</h6>
            <h2 class="fw-bold">2</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-custom p-4 border-start border-success border-4 text-center">
            <h6 class="text-muted small">Total Mahasiswa</h6>
            <h2 class="fw-bold">60</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-custom p-4 border-start border-warning border-4 text-center">
            <h6 class="text-muted small">Progress Input Nilai</h6>
            <h2 class="fw-bold">75%</h2>
          </div>
        </div>
      </div>
    </section>

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
              <tr class="student-row">
                <td class="fw-bold nim-col">3312101002</td>
                <td>Budi Setiawan</td>
                <td>
                  <select class="form-select select-nilai" id="nilai-2">
                    <option value="">-- Pilih Nilai --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                  </select>
                </td>
                <td><span id="status-2" class="badge bg-warning text-dark">Belum Input</span></td>
                <td><button class="btn btn-success btn-sm" onclick="saveGrade('2', '3312101002')"><i class="bi bi-check-circle me-1"></i>Simpan</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <script>
    const currentLecturer = "Dr. Aris Sudaryanto";
    const ampuData = {
        'IF101': { nama: 'Pemrograman Web', pengampu: 'Dr. Aris Sudaryanto' },
        'IF202': { nama: 'Basis Data', pengampu: 'Dr. Aris Sudaryanto' }
    };

    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    links.forEach(link => {
      link.addEventListener('click', function() {
        if(this.dataset.target) {
          links.forEach(l => l.classList.remove('active'));
          this.classList.add('active');
          sections.forEach(s => s.classList.remove('active-section'));
          document.getElementById(this.dataset.target).classList.add('active-section');
        }
      });
    });

    function goToInput(matkulCode) {
      const matkul = ampuData[matkulCode];
      
      if (matkul.pengampu !== currentLecturer) {
        alert("Akses Ditolak: Anda tidak memiliki wewenang untuk mata kuliah ini.");
        return;
      }

      document.getElementById('matkul-title').innerText = matkul.nama;
      document.getElementById('matkul-code').innerText = matkulCode;
      document.querySelector('[data-target="input-nilai"]').click();
    }

    function backToMatkul() {
      document.querySelector('[data-target="matkul-ampu"]').click();
    }

    function saveGrade(id, nim) { 
      const selectElement = document.getElementById(`nilai-${id}`);
      const grade = selectElement.value;
      const statusLabel = document.getElementById(`status-${id}`);

      if (!grade) {
        alert("Harap pilih nilai akhir (A-E)!");
        return;
      }

      if (confirm(`Konfirmasi: Berikan nilai ${grade} untuk NIM ${nim}?`)) {
        commitSave(selectElement, statusLabel, grade);
      }
    }

    function saveAllGrades() {
      const rows = document.querySelectorAll('.student-row');
      let updatedCount = 0;

      if(confirm("Apakah Anda ingin menyimpan semua nilai kelas ini sekaligus?")) {
          rows.forEach((row, index) => {
              const id = index + 1;
              const select = document.getElementById(`nilai-${id}`);
              const status = document.getElementById(`status-${id}`);
              
              if(select.value && !select.disabled) {
                  commitSave(select, status, select.value);
                  updatedCount++;
              }
          });
          
          if(updatedCount > 0) {
              alert(`Berhasil menyimpan ${updatedCount} nilai ke database.`);
          } else {
              alert("Tidak ada input nilai baru yang valid.");
          }
      }
    }

    function commitSave(el, label, val) {
        label.className = "badge bg-success";
        label.innerText = "Tersimpan";
        el.disabled = true;
    }

    function confirmLogout() {
      if (confirm("Apakah Anda yakin ingin keluar?")) {
          alert("Sesi berakhir.");
      }
    }
  </script>
</body>
</html>