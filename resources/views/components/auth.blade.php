<div>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #e8f3ff, #f8faff); height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px; width: 100%; max-width: 400px; }
        .logo { width: 120px; display: block; margin: 20px auto 10px; }
    </style>
</head>
<body>
    <div class="card p-4 text-center">
        @yield('content')
    </div>
</body>
</html>
</div>