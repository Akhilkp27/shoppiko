<header>
        <nav class="navbar">
            <a href="#" class="logo">
                <i class="fas fa-crown"></i>
                StyleHub
            </a>
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('shop') }}">Shop</a>
                <a href="{{ route('categories') }}">Categories</a>
                <a href="#">New Arrivals</a>
                <a href="#">Deals</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="header-actions">
            <div class="auth-buttons">

                <a href="{{ route('login') }}" class="auth-button login-btn">🔐 Login</a>
                <a href="{{ route('register') }}" class="auth-button register-btn">✨ Register</a>
            </div>

        </div>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="{{ route('product-checkout') }}">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </nav>
    </header>
