<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories | LuminaShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">

</head>
<body>
    <!-- Header -->
    @include('partials.header')

    <!-- Hero Section -->
    <section class="category-hero">
        <div class="container">
            <h1>Shop by Category</h1>
            <p>Discover our curated collections</p>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <div class="container breadcrumbs">
        <a href="index.html">Home</a>
        <span>/</span>
        <a href="categories.html">Categories</a>
        <span>/</span>
        <span>Electronics</span>
    </div>

    <!-- Main Content -->
    <main class="category-main">
        <!-- Sidebar Filters -->
        <aside class="category-sidebar" id="categorySidebar">
            <div class="sidebar-section">
                <h3>Categories</h3>
                <div class="filter-options">
                    <label>
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                        Electronics
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Fashion
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Home & Living
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Beauty
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Sports
                    </label>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>Price Range</h3>
                <input type="range" class="price-range" min="0" max="1000" value="500">
                <div class="price-values">
                    <span>$0</span>
                    <span>$500</span>
                    <span>$1000+</span>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>Brands</h3>
                <div class="filter-options">
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Sony
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Samsung
                    </label>
                    <label>
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                        Apple
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        LG
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Bose
                    </label>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>Ratings</h3>
                <div class="filter-options">
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </label>
                    <label>
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </label>
                    <label>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </label>
                </div>
            </div>

            <button class="btn btn-primary" style="width: 100%;">Apply Filters</button>
        </aside>

        <!-- Products Section -->
        <div class="category-content">
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

            <div class="category-products">
                <!-- Product Cards (Reuse your existing product card component) -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Wireless Headphones">
                        <span class="product-badge">Sale</span>
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

                <!-- Repeat product cards as needed -->
                <!-- ... (6-12 product cards total) ... -->
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

    <!-- Mobile Filter Button (hidden on desktop) -->
    <button class="mobile-filter-btn" id="mobileFilterBtn">
        <i class="fas fa-filter"></i> Filters
    </button>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <!-- Your existing footer content -->
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 LuminaShop. All rights reserved.</p>
            </div>
        </div>
    </footer>

    
    <script>
        // Initialize category page functionality
function initCategoryPage() {
    // Mobile filter toggle
    const filterBtn = document.getElementById('mobileFilterBtn');
    const sidebar = document.getElementById('categorySidebar');

    if (filterBtn && sidebar) {
        filterBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            filterBtn.classList.toggle('active');
        });
    }

    // Price range display
    const priceRange = document.querySelector('.price-range');
    if (priceRange) {
        const updatePriceDisplay = () => {
            const value = priceRange.value;
            const priceDisplay = priceRange.parentElement.querySelector('.price-values span:nth-child(2)');
            if (priceDisplay) {
                priceDisplay.textContent = `$${value}`;
            }
        };

        priceRange.addEventListener('input', updatePriceDisplay);
        updatePriceDisplay(); // Initialize display
    }

    // Filter counter
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
}

// Call on page load
document.addEventListener('DOMContentLoaded', initCategoryPage);
        // Mobile Filter Toggle
        document.getElementById('mobileFilterBtn').addEventListener('click', function() {
            document.getElementById('categorySidebar').classList.toggle('active');
        });

        // Price Range Visual Update
        const priceRange = document.querySelector('.price-range');
        if (priceRange) {
            priceRange.addEventListener('input', function() {
                const priceValues = this.parentElement.querySelectorAll('.price-values span');
                priceValues[1].textContent = `$${this.value}`;
            });
        }

        // Filter Checkbox Counter
        const filterCheckboxes = document.querySelectorAll('.filter-options input[type="checkbox"]');
        filterCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const section = this.closest('.sidebar-section');
                const checkedCount = section.querySelectorAll('input:checked').length;

                // Update section header with count
                const header = section.querySelector('h3');
                const originalText = header.dataset.originalText || header.textContent;
                header.dataset.originalText = originalText;

                if (checkedCount > 0) {
                    header.textContent = `${originalText} (${checkedCount})`;
                } else {
                    header.textContent = originalText;
                }
            });
        });
    </script>
</body>
</html>
