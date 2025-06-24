<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account | Shoppiko</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header style="background: #1976d2; color: #fff; padding: 1rem;">
        <h2>👤 Customer Area</h2>
        <nav>
            <a href="{{ route('customer.dashboard') }}">Dashboard</a> |
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
