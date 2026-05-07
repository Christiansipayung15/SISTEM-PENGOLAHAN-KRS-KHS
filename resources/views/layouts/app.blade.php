<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si Pekas Polibatam</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        /* Masukkan semua kode CSS (Internal Style) dari file dashboard_dosen kamu di sini */
        /* Supaya desain Glassmorphism dan Sidebar-nya tetap berfungsi di semua halaman */
        body {
            background-color: #f8f9fa;
        }
        .content {
            margin-left: 260px; /* Sesuaikan dengan lebar sidebar kamu */
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Panggil Sidebar/Header -->
    @include('components.header')

    <!-- Wrapper untuk Konten Utama -->
    <div class="content">
        
        <!-- Bagian ini akan diisi secara otomatis oleh halaman lain -->
        @yield('content')
        
        <!-- Panggil Footer -->
        @include('components.footer')
        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        /* Masukkan kode JavaScript/Script dari file dashboard_dosen kamu di sini */
        /* Agar fitur konfirmasi logout dan navigasi tetap jalan */
    </script>
</body>
</html>


<body>
    <!-- Panggil Navbar di sini agar konsisten -->
    <x-navbar /> 

    <div class="container py-5">
        @yield('content')
    </div>

    <!-- Panggil Footer di sini -->
    <x-footer />
</body>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | APAO Polibatam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #e8f3ff, #f8faff); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { border-radius: 15px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        @stack('styles')
    </style>
</head>
<body>
    @yield('content')
</body>
</html>