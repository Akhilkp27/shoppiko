 {{-- <header>
        <div class="container header-container">
            <div class="logo">Lumina<span>Shop</span></div>

            <nav id="main-nav">
                <ul>
                    <li><a href="{{route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ route('shop') }}" class="nav-link">Shop</a></li>
                    <li><a href="{{ route('categories') }}" class="nav-link">Categories</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li><a href="{{route('contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        <div class="header-actions">
            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn btn-outline btn-login">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-signup">Sign Up</a>

            </div>

        </div>
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search products...">
                <button class="search-btn"><i class="fas fa-search"></i></button>
                <button class="close-search">&times;</button>
            </div>
        </div>
    </header> --}}
<header>
        <nav class="navbar">
            <a href="#" class="logo">
                <i class="fas fa-crown"></i>
                StyleHub
            </a>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <a href="#">Categories</a>
                <a href="#">New Arrivals</a>
                <a href="#">Deals</a>
                <a href="#">Contact</a>
            </div>
            <div class="header-actions">
            <div class="auth-buttons">

                <a href="{{ route('login') }}" class="auth-button login-btn">🔐 Login</a>
                <a href="{{ route('register') }}" class="auth-button register-btn">✨ Register</a>
            </div>
<style>

</style>

<!-- Login & Register Buttons -->



        </div>
            {{-- <div class="nav-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </a>
            </div> --}}
        </nav>
    </header>
