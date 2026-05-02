<!DOCTIPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | APAO Polibatam</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background: linear-gradient(135deg,#e8f3ff, #f8faff);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    ,card {
        border: none;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-radius: 15px;
        width: 100%;
        max-width: 400px;
    }
    .logo {
        width: 120px;
        display: block;
        margin: 20px auto 10px;
    }
    </style>
    </head>
    <body>
        <div class="card p-4 text-center">
            <img src="logo poltek.png" alt="Logo Polibatam" class="logo">
            <h5 class="mb-1">Pengelolaan KRS & KHS</H5>
            <p class="text-muted mb-4">Login Mahasiswa</p>

            <form id="loginform">
                <div class="'mb-3 text-start">
                    <label class="form-label">Username:</label>
                    <input type="text" id="usernameinput" class="form-control" placeholder="Masukan Username" required>
</div>
<div class="mb-3 text-start">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Masukkan Password"required>
</div>
<button type="submit" class="btn btn-primary w-100">Masuk</button>
</form>

<small class="text-muted d-block mt-3">Â© 2026 Politeknik Negeri Batam. All rights reserved.</small>
</div>

<script>

document.getElementById('loginform').onsubmit = function(e) {
    e.preventDefault();

    // Ambil nama yang diketik user const inputName =
    document.getElementById('usernameInput').valuw;

    // Simpan ke localStorage agar dibaca oleh fungsi loadUserData() di dashboard anda
    localStorage.setItem('loggedUserName', inputName);

    localStorage.setItem('loggedUserNim', inputName); // Simulasi  NIM menggunakan nama yang sama

    // Pindah ke halaman dashboard(pastikan nama filenya sama)
    window.location.href = "Dashboard_Mahasiswa.php";
};