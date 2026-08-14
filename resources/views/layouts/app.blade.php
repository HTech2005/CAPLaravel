<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de produits</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .success { background: #d4edda; padding: 10px; margin-bottom: 10px; }
        .error { color: red; font-size: 0.9em; }
        form div { margin-bottom: 12px; }
        label { display: block; margin-bottom: 4px; }
    </style>
</head>
<body>
    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>