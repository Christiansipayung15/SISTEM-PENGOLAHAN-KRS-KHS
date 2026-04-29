<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Mahasiswa | Si Pekas Polibatam</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2d9d6c5f8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    body { background-color: #f8faff; font-family: 'Poppins', sans-serif; }
    
    /* Sidebar Styling dengan Skema Warna Biru Gelap Profesional */
    .sidebar { 
      height: 100vh; 
      width: 260px; 
      background-color: #0f172a; /* Warna Biru Navy Gelap */
      padding-top: 20px; 
      position: fixed; 
      z-index: 1000;
    }
    
    /* Branding Header Sidebar */
    .sidebar-brand { 
      display: flex; 
      align-items: center; 
      padding: 0 20px; 
      margin-bottom: 30px; 
    }
    .brand-logo { 
      width: 45px; 
      height: 45px; 
      background-color: #1e293b; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      border-radius: 12px; 
      margin-right: 12px; 
      overflow: hidden;
    }
    .brand-text { line-height: 1.2; }
    .brand-text h6 { margin: 0; font-weight: 800; color: #ffffff; font-size: 16px; }
    .brand-text span { font-size: 13px; color: #94a3b8; }

    /* Menu Navigasi */
    .sidebar a { 
      color: #cbd5e1; 
      text-decoration: none; 
      display: block; 
      padding: 12px 20px; 
      border-radius: 10px; 
      margin: 5px 15px; 
      transition: 0.3s; 
    }
    .sidebar a.active { background-color: #3b82f6; color: #fff; font-weight: 600; }
    .sidebar a:hover:not(.active) { background-color: #1e293b; color: #3b82f6; }
    
    .content { margin-left: 260px; padding: 30px; width: calc(100% - 260px); }
    .card-stat { border-radius: 15px; border: none; box-shadow: 0 4px 12px rgba(0,0,0,0.05); background: #fff; }
    
    section { display: none; }
    section.active-section { display: block; animation: fadeIn 0.3s; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

    /* Gaya Logo Profil */
    .profile-section { display: flex; align-items: center; background: #fff; padding: 8px 15px; border-radius: 50px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    .profile-avatar { width: 40px; height: 40px; background-color: #3b82f6; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; margin-right: 12px; text-transform: uppercase; }
    .profile-info { line-height: 1.2; }
    .profile-info .name { font-size: 14px; font-weight: bold; margin: 0; }
    .profile-info .nim { font-size: 12px; color: #777; margin: 0; }
  </style>
</head>
<body>

<div class="d-flex">
  <div class="sidebar">
    <div class="sidebar-brand">
      <div class="brand-logo">
        <img src="logo poltek.png" alt="Logo" style="width: 80%; height: 80%; object-fit: contain;">
      </div>
      <div class="brand-text">
        <h6>Si Pekas Polibatam</h6>
        <span>Dashboard Mahasiswa</span>
      </div>
    </div>
    
    <a href="javascript:void(0)" class="nav-link-custom active" data-target="dashboard"><i class="fas fa-home me-2"></i> Dashboard</a>
    <a href="javascript:void(0)" class="nav-link-custom" data-target="krs"><i class="fas fa-edit me-2"></i> Pengambilan KRS</a>
    <a href="javascript:void(0)" class="nav-link-custom" data-target="khs"><i class="fas fa-file-invoice me-2"></i> Lihat KHS</a>
    <hr class="mx-3 border-secondary">
    <a href="#" class="text-warning" onclick="confirmLogout()"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
  </div>

  <div class="content">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold">Dashboard Mahasiswa</h4>
        <p class="text-muted">Halo, <strong id="user-fullname">Lambok Christian Sipayung</strong> (NIM: <span id="user-nim">3312511087</span>)</p>
      </div>
      
      <div class="profile-section">
        <div class="profile-avatar" id="profile-initial">--</div>
        <div class="profile-info">
          <p class="name">Lambok Christian Sipayung</p>
          <p class="nim">3312511087</p>
        </div>
      </div>
    </div>

    <section id="dashboard" class="active-section">
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <div class="card card-stat p-4 border-start border-primary border-4">
            <h6 class="text-muted small fw-bold">IP SEMESTER LALU</h6>
            <h2 class="fw-bold text-primary">3.45</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-stat p-4 border-start border-success border-4">
            <h6 class="text-muted small fw-bold">MAKSIMAL SKS</h6>
            <h2 class="fw-bold text-success"><span id="max-sks">24</span> SKS</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-stat p-4 border-start border-warning border-4">
            <h6 class="text-muted small fw-bold">SKS TERPILIH (KRS)</h6>
            <h2 class="fw-bold text-warning"><span id="current-sks-dash">0</span> SKS</h2>
          </div>
        </div>
      </div>
    </section>

    <section id="krs">
      <div class="card card-stat p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h5 class="fw-bold"><i class="fas fa-tasks me-2"></i>Pengambilan KRS</h5>
          <div class="d-flex align-items-center">
            <label class="me-2 small fw-bold">Semester:</label>
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

        <div class="alert alert-info py-2 small border-0" style="background-color: #e0f2fe; color: #0369a1;">
          <i class="fas fa-info-circle me-2"></i>Total SKS Terpilih: <strong id="total-sks">0</strong> / 24 SKS.
        </div>

        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th width="50">Pilih</th>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th class="text-center">SKS</th>
                <th class="text-center">Sem</th>
                <th>Dosen Pengampu</th>
              </tr>
            </thead>
            <tbody id="krs-table">
              <tr data-semester="2">
                <td><input type="checkbox" class="krs-cb" data-sks="3" data-code="IF101"></td>
                <td>IF101</td>
                <td>Pemrograman Web (Laravel)</td>
                <td class="text-center">3</td>
                <td class="text-center">2</td>
                <td>Dr. Aris Sudaryanto</td>
              </tr>
              <tr data-semester="2">
                <td><input type="checkbox" class="krs-cb" data-sks="4" data-code="IF202"></td>
                <td>IF202</td>
                <td>Basis Data (MySQL)</td>
                <td class="text-center">4</td>
                <td class="text-center">2</td>
                <td>Evaliata Br. Sembiring</td>
              </tr>
              <tr data-semester="4">
                <td><input type="checkbox" class="krs-cb" data-sks="3" data-code="IF303"></td>
                <td>IF303</td>
                <td>Kecerdasan Buatan</td>
                <td class="text-center">3</td>
                <td class="text-center">4</td>
                <td>Dosen Tamu</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
          <button class="btn btn-outline-secondary me-2" onclick="exportPDF('KRS')"><i class="fas fa-file-pdf me-2"></i>Export KRS (PDF)</button>
          <button class="btn btn-primary px-4" onclick="saveKRS()">Simpan KRS</button>
        </div>
      </div>
    </section>

    <section id="khs">
      <div class="card card-stat p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="fw-bold"><i class="fas fa-graduation-cap me-2"></i>Kartu Hasil Studi (KHS)</h5>
          <button class="btn btn-sm btn-outline-primary" onclick="exportPDF('KHS')"><i class="fas fa-download me-2"></i>Export KHS (PDF)</button>
        </div>
        <table class="table table-bordered align-middle text-center">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Nilai Akhir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>IF101</td>
              <td class="text-start">Pemrograman Web</td>
              <td>3</td>
              <td><span class="badge bg-success">A</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>IF202</td>
              <td class="text-start">Basis Data</td>
              <td>4</td>
              <td><span class="badge bg-primary">B</span></td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="table-light fw-bold">
              <td colspan="3" class="text-end">Total SKS & IP Semester:</td>
              <td>7 SKS</td>
              <td class="text-primary">3.45</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>
  </div>
</div>

<script>
  // Inisialisasi Avatar Profil
  function generateInitial() {
    const name = document.getElementById('user-fullname').innerText;
    const words = name.split(' ');
    let initial = words.length > 1 ? words[0][0] + words[1][0] : words[0][0];
    document.getElementById('profile-initial').innerText = initial;
  }

  window.onload = generateInitial;

  // Navigasi Sidebar
  const links = document.querySelectorAll('.nav-link-custom');
  const sections = document.querySelectorAll('section');

  links.forEach(link => {
    link.addEventListener('click', function() {
      links.forEach(l => l.classList.remove('active'));
      this.classList.add('active');
      sections.forEach(s => s.classList.remove('active-section'));
      document.getElementById(this.getAttribute('data-target')).classList.add('active-section');
    });
  });

  // Filter Semester
  document.getElementById('filter-semester').addEventListener('change', function() {
    const val = this.value;
    const rows = document.querySelectorAll('#krs-table tr');
    rows.forEach(row => {
      row.style.display = (val === 'all' || row.getAttribute('data-semester') === val) ? '' : 'none';
    });
  });

  // Logika Perhitungan SKS
  const checkboxes = document.querySelectorAll('.krs-cb');
  const totalSksLabel = document.getElementById('total-sks');
  const dashSksLabel = document.getElementById('current-sks-dash');
  let currentTotalSks = 0;
  const limitSks = 24; 

  checkboxes.forEach(cb => {
    cb.addEventListener('change', function() {
      const sksValue = parseInt(this.getAttribute('data-sks'));
      if (this.checked) {
        if (currentTotalSks + sksValue > limitSks) {
          alert(`Sistem Menolak: Total SKS tidak boleh melebihi batas ${limitSks} SKS!`);
          this.checked = false;
        } else {
          currentTotalSks += sksValue;
        }
      } else {
        currentTotalSks -= sksValue;
      }
      totalSksLabel.innerText = currentTotalSks;
      dashSksLabel.innerText = currentTotalSks;
    });
  });

  function saveKRS() {
    if (currentTotalSks === 0) {
      alert("Peringatan: Anda belum memilih mata kuliah untuk disimpan.");
    } else {
      alert(`Berhasil! KRS dengan total ${currentTotalSks} SKS telah disimpan ke sistem.`);
    }
  }

  function exportPDF(type) {
    alert(`Mengunduh dokumen ${type} dalam format PDF...`);
  }

  function confirmLogout() {
    if (confirm("Apakah Anda yakin ingin keluar?")) {
      window.location.reload();
    }
  }
</script>

</body>
</html>