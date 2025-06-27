<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina | Modern E-Commerce</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-yz5Z5UKGzKDnI... (shortened)"
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
   <!-- Loading Animation -->
    <div class="loader">
        <div class="loader-circle"></div>
        <div class="loader-circle"></div>
        <div class="loader-circle"></div>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Quick View Modal -->
    <div id="quick-view-modal" class="modal">
        <div class="modal-content animate__animated animate__fadeInUp">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <div class="modal-product-images">
                    <div class="main-image">
                        <img id="modal-main-image" src="" alt="Product Image">
                    </div>
                    <div class="thumbnail-images">
                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Thumbnail 1">
                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Thumbnail 2">
                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Thumbnail 3">
                    </div>
                </div>
                <div class="modal-product-info">
                    <h2 id="modal-product-title">Product Title</h2>
                    <div class="price-wrapper">
                        <span id="modal-current-price" class="current-price">$99.99</span>
                        <span id="modal-old-price" class="old-price">$129.99</span>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(24 reviews)</span>
                    </div>
                    <p id="modal-product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="size-selector">
                        <label>Size:</label>
                        <div class="size-options">
                            <button class="size-option">S</button>
                            <button class="size-option active">M</button>
                            <button class="size-option">L</button>
                            <button class="size-option">XL</button>
                        </div>
                    </div>
                    <div class="color-selector">
                        <label>Color:</label>
                        <div class="color-options">
                            <button class="color-option" style="background-color: #6c5ce7;"></button>
                            <button class="color-option active" style="background-color: #2d3436;"></button>
                            <button class="color-option" style="background-color: #d63031;"></button>
                        </div>
                    </div>
                    <div class="quantity-selector">
                        <label>Quantity:</label>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1">
                            <button class="quantity-btn plus">+</button>
                        </div>
                    </div>
                    <div class="modal-actions">
                        {{-- <button class="btn btn-primary add-to-cart">Add to Cart</button> --}}
                        <button class="btn btn-primary modal-add-to-cart" data-product-id="1">Add to Cart</button>
                        <button class="btn btn-outline">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopping Cart Sidebar -->
    <div id="cart-sidebar" class="cart-sidebar">
        <div class="cart-header">
            <h3>Your Cart</h3>
            <button id="close-cart" class="close-cart">&times;</button>
        </div>
        <div class="cart-items">
            <!-- Cart items will be added dynamically -->
        </div>
        <div class="cart-summary">
            <div class="subtotal">
                <span>Subtotal:</span>
                <span class="subtotal-price">$0.00</span>
            </div>
            <button class="btn btn-primary checkout-btn">Proceed to Checkout</button>
            <button class="btn btn-outline continue-shopping">Continue Shopping</button>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">Lumina<span>Shop</span></div>

            <nav id="main-nav">
                <ul>
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Shop</a></li>
                    <li><a href="#" class="nav-link">Categories</a></li>
                    <li><a href="#" class="nav-link">About</a></li>
                    <li><a href="#" class="nav-link">Contact</a></li>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Summer Collection 2023</h1>
            <p>Discover our latest arrivals with up to 40% discount on selected items. Limited time offer!</p>
            <a href="#" class="btn btn-outline">Shop Now</a>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="container">
        <h2 class="section-title">Shop by Category</h2>
        <div class="categories">
            <div class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Men's Fashion">
                </div>
                <div class="category-info">
                    <h3>Men's Fashion</h3>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
            </div>

            <div class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Women's Fashion">
                </div>
                <div class="category-info">
                    <h3>Women's Fashion</h3>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
            </div>

            <div class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Electronics">
                </div>
                <div class="category-info">
                    <h3>Electronics</h3>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
            </div>

            <div class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Home & Living">
                </div>
                <div class="category-info">
                    <h3>Home & Living</h3>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container">
        <h2 class="section-title">Featured Products</h2>
        <div class="products">
            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Product 1">
                    <span class="product-badge">Sale</span>
                </div>
                 <div class="product-hover-buttons">
            <button class="quick-view-btn" data-product-id="1">Quick View</button>
        </div>
                <div class="product-info">
                    <h3>Wireless Headphones</h3>
                    <div class="product-price">
                        <span class="current-price">$89.99</span>
                        <span class="old-price">$129.99</span>
                    </div>
                    <div class="product-actions">
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                        <div class="wishlist">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Smart Watch Series 5</h3>
                    <div class="product-price">
                        <span class="current-price">$199.99</span>
                    </div>
                    <div class="product-actions">
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                        <div class="wishlist">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Product 3">
                    <span class="product-badge">New</span>
                </div>
                <div class="product-info">
                    <h3>Leather Backpack</h3>
                    <div class="product-price">
                        <span class="current-price">$59.99</span>
                        <span class="old-price">$79.99</span>
                    </div>
                    <div class="product-actions">
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                        <div class="wishlist">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Product 4">
                </div>
                <div class="product-info">
                    <h3>Cotton T-Shirt</h3>
                    <div class="product-price">
                        <span class="current-price">$24.99</span>
                    </div>
                    <div class="product-actions">
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                        <div class="wishlist">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="banner">
        <div class="container">
            <h2>Free Shipping on Orders Over $50</h2>
            <p>Shop now and enjoy free shipping on all orders over $50. No code needed at checkout.</p>
            <a href="#" class="btn btn-outline">Shop Now</a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container testimonials">
        <h2 class="section-title">What Our Customers Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "I absolutely love my purchase! The quality is amazing and it arrived sooner than expected. Will definitely shop here again!"
                </div>
                <div class="testimonial-author">
                    <div class="author-img">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah J.">
                    </div>
                    <div class="author-info">
                        <h4>Sarah J.</h4>
                        <p>Verified Buyer</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-text">
                    "Great customer service and fast shipping. The product exceeded my expectations. Highly recommend this store!"
                </div>
                <div class="testimonial-author">
                    <div class="author-img">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T.">
                    </div>
                    <div class="author-info">
                        <h4>Michael T.</h4>
                        <p>Verified Buyer</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-text">
                    "I've ordered multiple times and I'm always satisfied with the quality and service. Keep up the good work!"
                </div>
                <div class="testimonial-author">
                    <div class="author-img">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily R.">
                    </div>
                    <div class="author-info">
                        <h4>Emily R.</h4>
                        <p>Verified Buyer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Get the latest updates on new products and upcoming sales</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>LuminaShop</h3>
                    <p>Your one-stop shop for all your fashion and lifestyle needs. Quality products at affordable prices.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</li>
                        <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                        <li><i class="fas fa-envelope"></i> info@luminashop.com</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 LuminaShop. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

   <script src="{{ asset('js/script.js') }}"></script>
   {{-- <script src="{{ mix('js/app.js') }}"></script> --}}


</body>
</html>
