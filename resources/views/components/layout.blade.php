<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
=======
    <title>{{ $title ?? 'My Laravel App' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)
</head>
<body>
    <div class="container">
       {{ $slot }}
    </div>
</body>
</html>
