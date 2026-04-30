<div>
  <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KRS & KHS Mahasiswa</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        .card { border: 2px solid #333; padding: 20px; border-radius: 10px; width: fit-content; background-color: #f9f9f9; }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Halaman Pengolahan KRS & KHS</h1>
    
    <div class="card">
    <h3>Data Mahasiswa:</h3>
    <!-- Variabel ini sekarang sudah terdefinisi -->
    <p><strong>NIM:</strong> {{ $id }}</p>
    <p><strong>Nama:</strong> {{ $nama }}</p>
</div>

    <a href="/dashboard" class="btn"> Kembali ke Dashboard</a>
</body>
</html>
</div>