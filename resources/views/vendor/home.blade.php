<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Portal | LuminaShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
</head>
<body>
    <!-- Vendor Header -->
    <header class="vendor-header">
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">
                    <img src="/images/lumina-logo.png" alt="LuminaShop">
                    <span>Vendor Portal</span>
                </a>
                <nav class="vendor-nav">
                    <a href="#features">Features</a>
                    <a href="#pricing">Pricing</a>
                    <a href="#faq">FAQ</a>
                </nav>
                <div class="auth-buttons">
                    <button class="btn btn-outline" id="loginBtn">Login</button>
                    <button class="btn btn-primary" id="registerBtn">Register</button>
                </div>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="vendor-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Sell on LuminaShop</h1>
                <p class="subtitle">Join our marketplace and reach millions of customers worldwide</p>
                <div class="cta-buttons">
                    <button class="btn btn-primary btn-lg" id="heroRegisterBtn">Start Selling Now</button>
                    <button class="btn btn-outline btn-lg" id="heroLoginBtn">Vendor Login</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Vendor Dashboard">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="vendor-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>10,000+</h3>
                    <p>Active Vendors</p>
                </div>
                <div class="stat-item">
                    <h3>5M+</h3>
                    <p>Monthly Customers</p>
                </div>
                <div class="stat-item">
                    <h3>30%</h3>
                    <p>Average Growth</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="vendor-features" id="features">
        <div class="container">
            <h2 class="section-title">Why Sell With Us</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Growth Tools</h3>
                    <p>Access powerful analytics and marketing tools to grow your business</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Payments</h3>
                    <p>Get paid securely with our reliable payment system</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Fulfillment Network</h3>
                    <p>Use our logistics network for fast, reliable shipping</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Customer Reach</h3>
                    <p>Tap into our global customer base of millions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Modal -->
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Create Vendor Account</h2>
            <form class="vendor-form" id="registerForm">
                <div class="form-group">
                    <label for="reg-name">Business Name</label>
                    <input type="text" id="reg-name" required>
                </div>
                <div class="form-group">
                    <label for="reg-email">Email</label>
                    <input type="email" id="reg-email" required>
                </div>
                <div class="form-group">
                    <label for="reg-phone">Phone Number</label>
                    <input type="tel" id="reg-phone" required>
                </div>
                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" required>
                </div>
                <div class="form-group">
                    <label for="reg-confirm">Confirm Password</label>
                    <input type="password" id="reg-confirm" required>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <p>Already have an account? <a href="#" id="switchToLogin">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Vendor Login</h2>
            <form class="vendor-form" id="loginForm">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" required>
                </div>
                <div class="form-options">
                    <label>
                        <input type="checkbox" id="remember-me">
                        Remember me
                    </label>
                    <a href="#" id="forgot-password">Forgot password?</a>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p>Don't have an account? <a href="#" id="switchToRegister">Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="vendor-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>LuminaShop Vendor</h3>
                    <p>Empowering businesses to reach customers worldwide through our premium marketplace platform.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Vendor Agreement</a></li>
                        <li><a href="#">Pricing Plans</a></li>
                        <li><a href="#">API Documentation</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> vendors@luminashop.com</li>
                        <li><i class="fas fa-phone"></i> +1 (800) 123-4567</li>
                        <li><i class="fas fa-map-marker-alt"></i> San Francisco, CA</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 LuminaShop. All rights reserved.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/vendor.js') }}"></script>
    <script>
        // Modal functionality
        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');
        const loginBtn = document.getElementById('loginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const heroLoginBtn = document.getElementById('heroLoginBtn');
        const heroRegisterBtn = document.getElementById('heroRegisterBtn');
        const switchToLogin = document.getElementById('switchToLogin');
        const switchToRegister = document.getElementById('switchToRegister');
        const closeButtons = document.querySelectorAll('.close-modal');

        function openModal(modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        loginBtn.addEventListener('click', () => openModal(loginModal));
        registerBtn.addEventListener('click', () => openModal(registerModal));
        heroLoginBtn.addEventListener('click', () => openModal(loginModal));
        heroRegisterBtn.addEventListener('click', () => openModal(registerModal));
        switchToLogin.addEventListener('click', (e) => {
            e.preventDefault();
            closeModal(registerModal);
            openModal(loginModal);
        });
        switchToRegister.addEventListener('click', (e) => {
            e.preventDefault();
            closeModal(loginModal);
            openModal(registerModal);
        });

        closeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = btn.closest('.modal');
                closeModal(modal);
            });
        });

        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                closeModal(e.target);
            }
        });

        // Form submission
        document.getElementById('registerForm').addEventListener('submit', (e) => {
            e.preventDefault();
            // Add registration logic here
            alert('Registration submitted!');
            closeModal(registerModal);
        });

        document.getElementById('loginForm').addEventListener('submit', (e) => {
            e.preventDefault();
            // Add login logic here
            alert('Login successful!');
            closeModal(loginModal);
        });

        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', () => {
            document.querySelector('.vendor-nav').classList.toggle('active');
        });
    </script>
</body>
</html>
