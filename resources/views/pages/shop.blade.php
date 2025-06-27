<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | LuminaShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
</head>
<body>
    <!-- Header -->
    @include('partials.header')

    <!-- Hero Section -->
    <section class="shop-hero">
        <div class="container">
            <h1>Our Products</h1>
            <p>Discover our premium collection</p>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <div class="container breadcrumbs">
        <a href="index.html">Home</a>
        <span>/</span>
        <a href="shop.html">Shop</a>
    </div>

    <!-- Main Content -->
    <main class="shop-main">
        <!-- Sidebar Filters -->
        <aside class="shop-sidebar" id="shopSidebar">
            <div class="sidebar-section">
                <h3>Categories</h3>
                <div class="filter-options">
                    <label>
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                        All Products
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Home Decor
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Kitchenware
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Furniture
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Lighting
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Textiles
                    </label>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>Price Range</h3>
                <input type="range" class="price-range" min="0" max="500" value="250">
                <div class="price-values">
                    <span>$0</span>
                    <span>$250</span>
                    <span>$500+</span>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>Colors</h3>
                <div class="color-options">
                    <button class="color-option" data-color="black" style="background-color: #000;"></button>
                    <button class="color-option" data-color="white" style="background-color: #fff; border: 1px solid #eee;"></button>
                    <button class="color-option" data-color="blue" style="background-color: #3498db;"></button>
                    <button class="color-option" data-color="green" style="background-color: #2ecc71;"></button>
                    <button class="color-option" data-color="red" style="background-color: #e74c3c;"></button>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>Materials</h3>
                <div class="filter-options">
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Wood
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Metal
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Ceramic
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Glass
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Textile
                    </label>
                </div>
            </div>

            <button class="btn btn-primary apply-filters">Apply Filters</button>
            <button class="btn btn-secondary reset-filters">Reset All</button>
        </aside>

        <!-- Products Section -->
        <div class="shop-content">
            <div class="shop-header">
                <div class="results-count">Showing 24 of 86 products</div>
                <div class="sort-options">
                    <span>Sort by:</span>
                    <select>
                        <option>Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest Arrivals</option>
                        <option>Best Rated</option>
                    </select>
                </div>
            </div>

            <div class="products-grid">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Modern Table Lamp">
                        <span class="product-badge">New</span>
                        <div class="product-actions">
                            <button class="quick-view"><i class="fas fa-eye"></i></button>
                            <button class="add-wishlist"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Aurora Table Lamp</h3>
                        <div class="product-price">
                            <span class="current-price">$89.99</span>
                            <span class="old-price">$129.99</span>
                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="review-count">(42)</span>
                        </div>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Repeat other product cards similarly -->

            </div>

            <div class="pagination">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <span>...</span>
                <a href="#">8</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </main>

    <!-- Mobile Filter Button -->
    <button class="mobile-filter-btn" id="mobileFilterBtn">
        <i class="fas fa-filter"></i> Filters
    </button>

    <!-- Featured Collection -->
    <section class="featured-collection">
        <div class="container">
            <h2 class="section-title">Featured Collection</h2>
            <div class="collection-slider">
                <div class="collection-item">
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" alt="Decorative Pillows">
                    <h3>Decorative Pillows</h3>
                    <a href="#" class="shop-link">Shop Now <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Other collection items -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <script>
        // Mobile Filter Toggle
        document.getElementById('mobileFilterBtn').addEventListener('click', function() {
            document.getElementById('shopSidebar').classList.toggle('active');
            this.classList.toggle('active');
        });

        // Price Range Display Update
        const priceRange = document.querySelector('.price-range');
        if (priceRange) {
            priceRange.addEventListener('input', function() {
                const priceDisplay = this.parentElement.querySelector('.price-values span:nth-child(2)');
                if (priceDisplay) {
                    priceDisplay.textContent = `$${this.value}`;
                }
            });
        }

        // Filter Counter
        document.querySelectorAll('.filter-options').forEach(container => {
            const checkboxes = container.querySelectorAll('input[type="checkbox"]');
            const header = container.previousElementSibling;

            if (header && header.tagName === 'H3') {
                header.dataset.originalText = header.textContent;

                const updateCounter = () => {
                    const checkedCount = container.querySelectorAll('input:checked').length;
                    header.textContent = checkedCount > 0
                        ? `${header.dataset.originalText} (${checkedCount})`
                        : header.dataset.originalText;
                };

                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', updateCounter);
                });
            }
        });

        // Color Selection
        document.querySelectorAll('.color-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.color-option').forEach(opt => {
                    opt.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
