<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub | Interactive Shopping Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #4e54c8;
            --secondary: #6a11cb;
            --accent: #ff6b6b;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            color: var(--dark);
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
        }

        .logo i {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            position: relative;
            padding: 5px 0;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-icons {
            display: flex;
            gap: 1.5rem;
            font-size: 1.3rem;
        }

        .nav-icons a {
            color: var(--dark);
            transition: var(--transition);
            position: relative;
        }

        .nav-icons a:hover {
            color: var(--primary);
            transform: translateY(-3px);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent);
            color: white;
            font-size: 0.7rem;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
        }

        /* Hero Section with Category Carousel */
        .hero {
            display: flex;
            align-items: center;
            padding: 4rem 5%;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 80vh;
            gap: 2rem;
        }

        .hero-content {
            flex: 1;
            padding-right: 1rem;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-content p {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 600px;
            line-height: 1.7;
        }

        .hero-carousel {
            flex: 1;
            position: relative;
            perspective: 1000px;
            max-width: 600px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            height: 500px;
        }

        .carousel-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .carousel-slide {
            min-width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .carousel-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .carousel-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 2rem;
            transform: translateY(100%);
            transition: transform 0.5s ease;
        }

        .carousel-slide.active .carousel-content {
            transform: translateY(0);
        }

        .carousel-title {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .carousel-desc {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .carousel-nav {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: var(--transition);
        }

        .carousel-dot.active {
            background: white;
            transform: scale(1.2);
        }

        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.8);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 10;
            transition: var(--transition);
            color: var(--dark);
        }

        .carousel-arrow:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-arrow.prev {
            left: 20px;
        }

        .carousel-arrow.next {
            right: 20px;
        }

        .hero-btns {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.9rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
            border: none;
            outline: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 10px 20px rgba(78, 84, 200, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(78, 84, 200, 0.4);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        /* Categories */
        .section-title {
            text-align: center;
            margin: 5rem 0 3rem;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }

        .category-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            cursor: pointer;
            position: relative;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .category-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .category-name {
            padding: 1.5rem;
            text-align: center;
            font-weight: 600;
            font-size: 1.2rem;
        }

        /* Products */
        .products {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5% 5rem;
        }

        .product-filters {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            background: white;
            border: none;
            border-radius: 30px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .filter-btn.active, .filter-btn:hover {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            color: white;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2.5rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--accent);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .product-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-category {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
        }

        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--primary);
        }

        .add-to-cart {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-to-cart:hover {
            background: var(--primary);
            color: white;
            transform: rotate(15deg);
        }

        /* Features */
        .features {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 5rem 5%;
            color: white;
            margin-top: 5rem;
        }

        .feature-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--accent);
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 4rem 5% 2rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #b0b0b0;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }

        .newsletter input {
            width: 100%;
            padding: 0.9rem;
            border: none;
            border-radius: 5px;
            margin-bottom: 1rem;
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .newsletter input::placeholder {
            color: #ccc;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #b0b0b0;
            font-size: 0.9rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-content {
                padding-right: 0;
                margin-bottom: 3rem;
            }

            .hero-btns {
                justify-content: center;
            }

            .hero-content h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content h1 {
                font-size: 2.3rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
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
            <div class="nav-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </nav>
    </header>

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
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>StyleHub</h3>
                <p>Your premier destination for fashion and style. We bring you the latest trends with premium quality and affordable prices.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Categories</h3>
                <ul class="footer-links">
                    <li><a href="#">Men's Fashion</a></li>
                    <li><a href="#">Women's Fashion</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Footwear</a></li>
                    <li><a href="#">Bags & Luggage</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Subscribe to get special offers, free giveaways, and new product updates.</p>
                <div class="newsletter">
                    <input type="email" placeholder="Your email address">
                    <button class="btn btn-primary">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 StyleHub. All rights reserved. Designed with ❤️ for fashion lovers.</p>
        </div>
    </footer>

    <script>
        // Interactive Elements
        document.addEventListener('DOMContentLoaded', function() {
            // Carousel functionality
            const carousel = document.querySelector('.carousel-container');
            const slides = document.querySelectorAll('.carousel-slide');
            const dots = document.querySelectorAll('.carousel-dot');
            const prevBtn = document.querySelector('.carousel-arrow.prev');
            const nextBtn = document.querySelector('.carousel-arrow.next');
            let currentIndex = 0;
            let slideInterval;

            // Function to show slide
            function showSlide(index) {
                // Reset all slides
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                // Set new active slide
                slides[index].classList.add('active');
                dots[index].classList.add('active');

                // Move carousel container
                carousel.style.transform = `translateX(-${index * 100}%)`;

                currentIndex = index;
            }

            // Next slide function
            function nextSlide() {
                let nextIndex = (currentIndex + 1) % slides.length;
                showSlide(nextIndex);
            }

            // Previous slide function
            function prevSlide() {
                let prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                showSlide(prevIndex);
            }

            // Auto play carousel
            function startCarousel() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            // Stop carousel on hover
            carousel.parentElement.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            // Resume carousel when mouse leaves
            carousel.parentElement.addEventListener('mouseleave', startCarousel);

            // Navigation dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                });
            });

            // Arrow buttons
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);

            // Start the carousel
            startCarousel();

            // Filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Add to cart animation
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const cartCount = document.querySelector('.cart-count');
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

            // Category hover effect
            const categoryCards = document.querySelectorAll('.category-card');
            categoryCards.forEach(card => {
                card.addEventListener('mouseover', function() {
                    this.style.transform = 'translateY(-10px)';
                });

                card.addEventListener('mouseout', function() {
                    this.style.transform = '';
                });
            });
        });
    </script>
</body>
</html>
