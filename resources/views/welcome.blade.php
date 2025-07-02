<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub | Interactive Shopping Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <!-- Header -->

    @include('partials.header')
    <!-- Hero Section with Category Carousel -->
    <section class="hero">
        <div class="hero-content">
            <h1>Elevate Your Style with Premium Fashion</h1>
            <p>Discover the latest trends in fashion with our handpicked collection. From casual wear to formal attire, we have everything to make you look your best.</p>
            <div class="hero-btns">
                <button class="btn btn-primary">Shop Collection <i class="fas fa-arrow-right"></i></button>
                <button class="btn btn-outline">Explore Deals</button>
            </div>
        </div>
        <div class="hero-carousel">
            <div class="carousel-container">
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Women's Fashion" class="carousel-image">
                    <div class="carousel-content">
                        <h3 class="carousel-title">Women's Collection</h3>
                        <p class="carousel-desc">Discover elegant dresses, comfortable casuals, and stylish accessories</p>
                        <button class="btn btn-primary">Shop Now</button>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Men's Fashion" class="carousel-image">
                    <div class="carousel-content">
                        <h3 class="carousel-title">Men's Fashion</h3>
                        <p class="carousel-desc">Premium suits, casual wear, and accessories for the modern man</p>
                        <button class="btn btn-primary">Explore</button>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1112&q=80" alt="Footwear" class="carousel-image">
                    <div class="carousel-content">
                        <h3 class="carousel-title">Footwear Collection</h3>
                        <p class="carousel-desc">Step in style with our premium shoes for every occasion</p>
                        <button class="btn btn-primary">Discover</button>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-slide">
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" alt="Accessories" class="carousel-image">
                    <div class="carousel-content">
                        <h3 class="carousel-title">Accessories</h3>
                        <p class="carousel-desc">Complete your look with our stylish accessories collection</p>
                        <button class="btn btn-primary">View Collection</button>
                    </div>
                </div>
            </div>
            <!-- Navigation Arrows -->
            <div class="carousel-arrow prev">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="carousel-arrow next">
                <i class="fas fa-chevron-right"></i>
            </div>
            <!-- Navigation Dots -->
            <div class="carousel-nav">
                <div class="carousel-dot active"></div>
                <div class="carousel-dot"></div>
                <div class="carousel-dot"></div>
                <div class="carousel-dot"></div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <h2 class="section-title">Shop By Category</h2>
    <div class="categories">
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Men's Fashion" class="category-img">
            <div class="category-name">Men's Fashion</div>
        </div>
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80" alt="Women's Fashion" class="category-img">
            <div class="category-name">Women's Fashion</div>
        </div>
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1112&q=80" alt="Footwear" class="category-img">
            <div class="category-name">Footwear</div>
        </div>
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" alt="Accessories" class="category-img">
            <div class="category-name">Accessories</div>
        </div>
    </div>

    <!-- Products -->
    <h2 class="section-title">Featured Products</h2>
    <div class="products">
        <div class="product-filters">
            <button class="filter-btn active">All Products</button>
            <button class="filter-btn">New Arrivals</button>
            <button class="filter-btn">Best Sellers</button>
            <button class="filter-btn">On Sale</button>
            <button class="filter-btn">Summer Collection</button>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <span class="product-badge">New</span>
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" alt="Product" class="product-img">
                <div class="product-info">
                    <div class="product-category">Accessories</div>
                    <div class="product-name">Premium Leather Watch</div>
                    <div class="product-price">
                        <div class="price">$129.99</div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <span class="product-badge">Sale</span>
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Product" class="product-img">
                <div class="product-info">
                    <div class="product-category">Women's Fashion</div>
                    <div class="product-name">Elegant Summer Dress</div>
                    <div class="product-price">
                        <div class="price">$89.99 <span style="text-decoration: line-through; color: var(--gray); font-size: 0.9rem;">$129.99</span></div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1112&q=80" alt="Product" class="product-img">
                <div class="product-info">
                    <div class="product-category">Footwear</div>
                    <div class="product-name">Designer Running Shoes</div>
                    <div class="product-price">
                        <div class="price">$149.99</div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Product" class="product-img">
                <div class="product-info">
                    <div class="product-category">Men's Fashion</div>
                    <div class="product-name">Classic Formal Suit</div>
                    <div class="product-price">
                        <div class="price">$249.99</div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
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

    @include('partials.footer')
    <script src="{{ asset('js/home.js') }}"></script>

</body>
</html>
