@extends('layouts.storefront')
@section('content')

<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <!-- Shop Page Content -->
    <main class="shop-container">
        <div class="shop-header">
            <h1 class="shop-title">Our Products</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search products...">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="shop-filters">
            <div class="filter-group">
                <button class="filter-btn active">All Products</button>
                <button class="filter-btn">Men's</button>
                <button class="filter-btn">Women's</button>
                <button class="filter-btn">Accessories</button>
                <button class="filter-btn">Footwear</button>
            </div>
            <div class="filter-group">
                <label for="sort">Sort by:</label>
                <select id="sort" class="sort-select">
                    <option>Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                    <option>Best Selling</option>
                </select>
            </div>
        </div>

        <div class="product-grid">
            <!-- Product 1 -->
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

            <!-- Product 2 -->
            <div class="product-card">
                <span class="product-badge">Sale</span>
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Product" class="product-img">
                <div class="product-info">
                    <div class="product-category">Women's Fashion</div>
                    <div class="product-name">Elegant Summer Dress</div>
                    <div class="product-price">
                        <div class="price">$89.99 <span class="old-price">$129.99</span></div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
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

            <!-- Product 4 -->
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

            <!-- Product 5 -->
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

            <!-- Product 6 -->
            <div class="product-card">
                <span class="product-badge">Sale</span>
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Product" class="product-img">
                <div class="product-info">
                    <div class="product-category">Women's Fashion</div>
                    <div class="product-name">Elegant Summer Dress</div>
                    <div class="product-price">
                        <div class="price">$89.99 <span class="old-price">$129.99</span></div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 7 -->
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

            <!-- Product 8 -->
            <div class="product-card">
        <span class="product-badge">New</span>
        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" alt="Product" class="product-img">
        <div class="product-info">
            <div class="product-category">Accessories</div>
            <div class="product-name">Premium Leather Watch</div>
            <div class="product-price">
                <div class="price">$129.99</div>
            </div>
            <div class="product-actions">
                {{-- <button class="view-btn" onclick="viewProduct('premium-leather-watch')">
                    <i class="far fa-eye"></i> View
                </button> --}}
                <a class="view-btn" href="{{ route('product-details') }}"><i class="far fa-eye"></i> View</a>
                <div class="add-to-cart">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>
    </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
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
<script src="{{ asset('js/shop.js') }}"></script>
@endsection
