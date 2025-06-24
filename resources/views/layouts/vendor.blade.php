<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor | Shoppiko</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header style="background: #00695c; color: #fff; padding: 1rem;">
        <h2>🏬 Vendor Dashboard</h2>
        <nav>
            <a href="{{ route('vendor.dashboard') }}">Dashboard</a> |
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </nav>
    </header>

    <main style="padding: 2rem;">
        @yield('content')
    </main>

    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>
</body>
</html>
