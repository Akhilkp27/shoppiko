 <header>
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
            {{-- <div class="header-icons">
                <a href="#" class="search-toggle"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#" id="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </a>
                <div class="mobile-menu" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div> --}}
        </div>
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search products...">
                <button class="search-btn"><i class="fas fa-search"></i></button>
                <button class="close-search">&times;</button>
            </div>
        </div>
    </header>
