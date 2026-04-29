<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun Baru | Polibatam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background: #eef5ff; 
            min-height: 100vh; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        .card { 
            border: none; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
            width: 100%; 
            max-width: 480px; 
            padding: 2.5rem;
        }
        .logo-polibatam {
            width: 80px;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 500;
            color: #333;
            margin-bottom: 5px;
        }
        .form-control, .form-select {
            background-color: #f3f4f6;
            border: 1px solid #e5e7eb;
            padding: 10px 15px;
            border-radius: 8px;
        }
        .form-control:focus, .form-select:focus {
            background-color: #fff;
            box-shadow: none;
            border-color: #004d99;
        }
        .btn-primary {
            background-color: #004d99;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            margin-top: 10px;
        }
        .btn-primary:hover {
            background-color: #003366;
        }
        .footer-text {
            font-size: 0.85rem;
            color: #777;
            margin-top: 20px;
        }
        .login-link {
            text-decoration: none;
            color: #004d99;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <img src="logo poltek.png" alt="Polibatam Logo" class="logo-polibatam">

    <div class="card">
        <div class="text-center mb-4">
            <h3 class="fw-bold mb-1">Daftar Akun Baru</h3>
            <p class="text-muted small">PENGOLAHAN KRS&KHS </p>
        </div>

        <form>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Peran</label>
                <select id="peran" class="form-select" onchange="updateLabel()" required>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div id="id-container" class="mb-3">
                <label id="label-id" class="form-label">NIM (Nomor Induk Mahasiswa)</label>
                <input type="text" class="form-control" placeholder="Masukkan Nomor Induk" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" placeholder="Konfirmasi password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>

        <div class="text-center mt-4">
            <p class="small mb-0">Sudah punya akun? <a href="#" class="login-link">Masuk di sini</a></p>
        </div>
    </div> 

    <div class="footer-text">
        © 2026 Politeknik Negeri Batam. All rights reserved.
    </div>

    <script>
        function updateLabel() {
            const peran = document.getElementById('peran').value;
            const container = document.getElementById('id-container');
            const label = document.getElementById('label-id');
            
            if (peran === 'mahasiswa') {
                container.style.display = 'block';
                label.innerText = 'NIM (Nomor Induk Mahasiswa)';
            } else if (peran === 'dosen') {
                container.style.display = 'block';
                label.innerText = 'NIDN (Nomor Induk Dosen)';
            } else {
                container.style.display = 'none';
            }
        }
    </script>
</body>
</html>