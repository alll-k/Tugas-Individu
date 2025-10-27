<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0; padding: 0;
            background: #f5f3fa; /* abu-abu keunguan lembut */
            color: #333;
        }

        /* Navigasii sayangg */
        nav {
            background: #6A0DAD; /* ungu elegan */
            padding: 14px 30px;
            display: flex;
            justify-content: center;
            gap: 25px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            position: relative;
            padding: 6px 10px;
            transition: 0.3s;
        }
        nav a:hover {
            color: #FFD700; /* emas */
        }
        nav a.active::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 3px;
            background: #FFD700;
            bottom: -5px;
            left: 0;
            border-radius: 2px;
        }

        /* ini kontennya sayanggg */
        .content {
            min-height: 70vh;
            padding: 40px 20px;
        }

        /* Hero Style (Home) */
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #6A0DAD, #9b59b6);
            border-radius: 12px;
            color: #fff;
        }
        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 20px;
        }
        .hero a.btn {
            display: inline-block;
            padding: 12px 24px;
            background: #fff;
            color: #6A0DAD;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }
        .hero a.btn:hover {
            background: #FFD700;
            color: #000;
        }

        /* Footer */
        footer {
            background: #6A0DAD;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a>
        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ url('/berita') }}" class="{{ request()->is('berita') ? 'active' : '' }}">Berita</a>
        <a href="{{ url('/mahasiswa') }}" class="{{ request()->is('mahasiswa') ? 'active' : '' }}">Data Mahasiswa</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
