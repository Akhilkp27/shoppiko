@extends('layouts.storefront')
@section('content')

<!-- Header -->
    {{-- <header>
        <nav class="navbar">
            <a href="index.html" class="logo">
                <i class="fas fa-crown"></i>
                StyleHub
            </a>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="shop.html">Shop</a>
                <a href="categories.html">Categories</a>
                <a href="new-arrivals.html">New Arrivals</a>
                <a href="deals.html">Deals</a>
                <a href="contact.html">Contact</a>
            </div>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="checkout.html">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </nav>
    </header> --}}
<link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
    <!-- Product Detail Container -->
    <main class="product-detail-container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="index.html">Home</a>
            <span>/</span>
            <a href="shop.html">Shop</a>
            <span>/</span>
            <a href="categories.html">Accessories</a>
            <span>/</span>
            <span>Premium Leather Watch</span>
        </div>

        <!-- Product Detail -->
        <div class="product-detail">
            <!-- Product Gallery -->
            <div class="product-gallery">
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80"
                     alt="Premium Leather Watch"
                     class="main-image"
                     id="mainImage">
                <div class="thumbnail-container">
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80"
                         alt="Thumbnail 1"
                         class="thumbnail active"
                         data-image="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80">
                    <img src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                         alt="Thumbnail 2"
                         class="thumbnail"
                         data-image="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80">
                    <img src="https://images.unsplash.com/photo-1547996160-81dfa63595aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                         alt="Thumbnail 3"
                         class="thumbnail"
                         data-image="https://images.unsplash.com/photo-1547996160-81dfa63595aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80">
                    <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                         alt="Thumbnail 4"
                         class="thumbnail"
                         data-image="https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80">
                </div>
            </div>

            <!-- Product Details -->
            <div class="product-details">
                <h1 class="product-title">Premium Leather Watch</h1>
                <div class="product-rating">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="review-count">4.8 (142 reviews)</span>
                    <a href="#reviews" class="review-link">Read reviews</a>
                </div>
                <div class="product-price-lg">
                    $129.99 <span class="old-price">$159.99</span>
                </div>
                <p class="product-description">
                    This premium leather watch combines timeless elegance with modern functionality.
                    Featuring a genuine leather strap and stainless steel case, it's perfect for both
                    formal occasions and everyday wear. The watch is water-resistant up to 50 meters
                    and comes with a 2-year warranty.
                </p>

                <!-- Color Selector -->
                <div class="color-selector">
                    <h3>Color</h3>
                    <div class="color-options">
                        <div class="color-option selected" style="background: #3e3e3e;" data-color="Black"></div>
                        <div class="color-option" style="background: #964B00;" data-color="Brown"></div>
                        <div class="color-option" style="background: #c0c0c0;" data-color="Silver"></div>
                        <div class="color-option" style="background: #a67c52;" data-color="Tan"></div>
                    </div>
                </div>

                <!-- Size Selector -->
                <div class="size-selector">
                    <h3>Band Size</h3>
                    <div class="size-options">
                        <div class="size-option">S</div>
                        <div class="size-option selected">M</div>
                        <div class="size-option">L</div>
                        <div class="size-option">XL</div>
                    </div>
                </div>

                <!-- Quantity Selector -->
                <div class="quantity-selector">
                    <h3>Quantity</h3>
                    <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                    <input type="number" value="1" min="1" class="quantity-input" id="quantity">
                    <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn btn-primary" id="addToCart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="btn btn-outline">
                        <i class="far fa-heart"></i> Wishlist
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="product-tabs">
            <div class="tabs-header">
                <button class="tab-btn active" data-tab="description">Description</button>
                <button class="tab-btn" data-tab="specs">Specifications</button>
                <button class="tab-btn" data-tab="reviews">Reviews (142)</button>
                <button class="tab-btn" data-tab="shipping">Shipping & Returns</button>
            </div>
            <div class="tab-content active" id="description">
                <p>
                    The Premium Leather Watch is crafted with attention to detail and quality materials.
                    The genuine leather strap is soft, durable, and develops a unique patina over time.
                    The stainless steel case houses a precise quartz movement that ensures accurate timekeeping.
                </p>
                <p>
                    Features include:
                </p>
                <ul>
                    <li>Genuine leather strap with stainless steel buckle</li>
                    <li>Stainless steel case (40mm diameter)</li>
                    <li>Mineral crystal glass face</li>
                    <li>Quartz movement</li>
                    <li>Water-resistant up to 50 meters</li>
                    <li>Date display window</li>
                    <li>2-year manufacturer warranty</li>
                </ul>
            </div>
            <div class="tab-content" id="specs">
                <table>
                    <tr>
                        <td><strong>Brand</strong></td>
                        <td>TimeCraft</td>
                    </tr>
                    <tr>
                        <td><strong>Model</strong></td>
                        <td>TC-2023</td>
                    </tr>
                    <tr>
                        <td><strong>Case Material</strong></td>
                        <td>Stainless Steel</td>
                    </tr>
                    <tr>
                        <td><strong>Band Material</strong></td>
                        <td>Genuine Leather</td>
                    </tr>
                    <tr>
                        <td><strong>Movement</strong></td>
                        <td>Quartz</td>
                    </tr>
                    <tr>
                        <td><strong>Water Resistance</strong></td>
                        <td>50 meters</td>
                    </tr>
                    <tr>
                        <td><strong>Warranty</strong></td>
                        <td>2 years</td>
                    </tr>
                </table>
            </div>
            <div class="tab-content" id="reviews">
                <div class="review">
                    <div class="review-header">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="review-author">John D.</span>
                        <span class="review-date">October 12, 2023</span>
                    </div>
                    <p class="review-text">
                        Absolutely love this watch! The leather is high quality and the face is beautiful.
                        Gets compliments every time I wear it.
                    </p>
                </div>
                <div class="review">
                    <div class="review-header">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="review-author">Sarah M.</span>
                        <span class="review-date">September 28, 2023</span>
                    </div>
                    <p class="review-text">
                        Great watch for the price. The band was a little stiff at first but has broken in nicely.
                        Very accurate timekeeping.
                    </p>
                </div>
                <button class="btn btn-outline" style="margin-top: 1.5rem;">
                    Write a Review
                </button>
            </div>
            <div class="tab-content" id="shipping">
                <p>
                    <strong>Shipping:</strong> We offer free standard shipping on all orders over $50.
                    Orders are typically processed within 1-2 business days and delivered within 3-5 business days.
                </p>
                <p>
                    <strong>Returns:</strong> If you're not completely satisfied with your purchase, you may return it
                    within 30 days of delivery for a full refund or exchange. The item must be in its original condition.
                </p>
            </div>
        </div>

        <!-- Related Products -->
        <div class="related-products">
            <h2 class="section-title">You May Also Like</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="Product" class="product-img">
                    <div class="product-info">
                        <div class="product-category">Accessories</div>
                        <div class="product-name">Classic Silver Watch</div>
                        <div class="product-price">
                            <div class="price">$149.99</div>
                            <div class="add-to-cart">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <span class="product-badge">New</span>
                    <img src="https://images.unsplash.com/photo-1547996160-81dfa63595aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="Product" class="product-img">
                    <div class="product-info">
                        <div class="product-category">Accessories</div>
                        <div class="product-name">Modern Smart Watch</div>
                        <div class="product-price">
                            <div class="price">$199.99</div>
                            <div class="add-to-cart">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="Product" class="product-img">
                    <div class="product-info">
                        <div class="product-category">Accessories</div>
                        <div class="product-name">Luxury Gold Watch</div>
                        <div class="product-price">
                            <div class="price">$249.99</div>
                            <div class="add-to-cart">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <span class="product-badge">Sale</span>
                    <img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="Product" class="product-img">
                    <div class="product-info">
                        <div class="product-category">Accessories</div>
                        <div class="product-name">Sport Fitness Tracker</div>
                        <div class="product-price">
                            <div class="price">$79.99 <span class="old-price">$99.99</span></div>
                            <div class="add-to-cart">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Features Section -->
    <section class="features">
        <div class="feature-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h3 class="feature-title">Free Shipping</h3>
                <p>Enjoy free shipping on all orders over $50. Delivery within 3-5 business days.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="feature-title">Secure Payment</h3>
                <p>Your payments are secure with our 256-bit encryption. Shop with confidence.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-undo"></i>
                </div>
                <h3 class="feature-title">Easy Returns</h3>
                <p>Not satisfied? Return within 30 days for a full refund. No questions asked.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="feature-title">24/7 Support</h3>
                <p>Our customer support team is available round the clock to assist you.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->


    <script>
        // Product Detail Page Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Image Gallery
            const mainImage = document.getElementById('mainImage');
            const thumbnails = document.querySelectorAll('.thumbnail');

            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function() {
                    // Update main image
                    mainImage.src = this.dataset.image;

                    // Update active thumbnail
                    thumbnails.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Image Zoom
            mainImage.addEventListener('click', function() {
                this.classList.toggle('zoomed');
            });

            // Color Selector
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    colorOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Size Selector
            const sizeOptions = document.querySelectorAll('.size-option');
            sizeOptions.forEach(option => {
                option.addEventListener('click', function() {
                    sizeOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Quantity Selector
            const minusBtn = document.querySelector('.quantity-btn.minus');
            const plusBtn = document.querySelector('.quantity-btn.plus');
            const quantityInput = document.getElementById('quantity');

            minusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });

            plusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });

            // Tabs
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabId = this.dataset.tab;

                    // Update active tab button
                    tabBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // Update active tab content
                    tabContents.forEach(content => content.classList.remove('active'));
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Add to Cart
            const addToCartBtn = document.getElementById('addToCart');
            const cartCount = document.querySelector('.cart-count');

            addToCartBtn.addEventListener('click', function() {
                let count = parseInt(cartCount.textContent);
                const quantity = parseInt(quantityInput.value);
                cartCount.textContent = count + quantity;

                // Animation
                this.innerHTML = '<i class="fas fa-check"></i> Added to Cart';
                this.style.backgroundColor = '#4BB543';

                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-shopping-cart"></i> Add to Cart';
                    this.style.backgroundColor = '';
                }, 2000);
            });

            // Related Products - Add to Cart
            const relatedAddToCart = document.querySelectorAll('.product-card .add-to-cart');
            relatedAddToCart.forEach(button => {
                button.addEventListener('click', function() {
                    let count = parseInt(cartCount.textContent);
                    cartCount.textContent = count + 1;

                    // Animation
                    this.style.backgroundColor = '#4e54c8';
                    this.style.color = 'white';

                    setTimeout(() => {
                        this.style.backgroundColor = '';
                        this.style.color = '';
                    }, 500);
                });
            });
        });
    </script>
@endsection
