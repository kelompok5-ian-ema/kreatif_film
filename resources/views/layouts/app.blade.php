<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreatif Film</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <a href="{{ route('movies.index') }}">Movies</a>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
    </nav>
    <div>
        @yield('content') <!-- Konten lainnya akan ditampilkan di sini -->
    </div>
</body>
</html>
