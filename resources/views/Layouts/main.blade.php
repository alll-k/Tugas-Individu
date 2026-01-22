<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Perbaikan agar footer di bawah */
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f3fa;
            color: #333;
            margin: 0;
        }

        /* Navigasi */
        nav {
            background: #6A0DAD;
            padding: 10px 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            padding: 6px 10px;
        }
        nav a:hover, nav a.active {
            color: #FFD700;
        }

        /* Konten Utama */
        .content-wrapper {
            flex: 1 0 auto; /* Ini yang mendorong footer ke bawah */
            padding: 40px 20px;
        }

        /* Footer */
        footer {
            flex-shrink: 0;
            background: #6A0DAD;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #fff;
        }

        .btn-logout {
            background: none;
            border: none;
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a>
        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
        
        @auth
            <a href="{{ url('/mahasiswa') }}" class="{{ request()->is('mahasiswa') ? 'active' : '' }}">Data Mahasiswa</a>
            <span style="color: #FFD700; margin-left: 20px;">Halo, {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">Login</a>
            <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">Register</a>
        @endauth
    </nav>

    <div class="content-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} - Program Studi Data Science. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>