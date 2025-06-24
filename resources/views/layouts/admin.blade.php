<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Shoppiko</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header style="background: #222; color: #fff; padding: 1rem;">
        <h2>🛠️ Admin Panel</h2>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
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
