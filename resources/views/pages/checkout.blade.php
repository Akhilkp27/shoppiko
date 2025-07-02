<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | StyleHub</title>
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

        /* Checkout Container */
        .checkout-container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 5%;
            display: flex;
            gap: 3rem;
        }

        /* Checkout Progress */
        .checkout-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3rem;
            position: relative;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 2;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 0.5rem;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .step-number.active {
            background: var(--primary);
            color: white;
        }

        .step-number.completed {
            background: var(--primary);
            color: white;
        }

        .step-name {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--gray);
        }

        .step-name.active {
            color: var(--primary);
            font-weight: 600;
        }

        .progress-line {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background: #eee;
            z-index: 1;
        }

        .progress-completed {
            position: absolute;
            top: 20px;
            left: 0;
            height: 2px;
            background: var(--primary);
            z-index: 2;
            transition: var(--transition);
        }

        /* Checkout Form */
        .checkout-form {
            flex: 2;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .form-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(78, 84, 200, 0.2);
        }

        .form-row {
            display: flex;
            gap: 1.5rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        /* Shipping Method */
        .shipping-methods {
            margin: 2rem 0;
        }

        .method-option {
            display: flex;
            align-items: center;
            padding: 1rem;
            border: 1px solid #eee;
            border-radius: 8px;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .method-option:hover {
            border-color: var(--primary);
        }

        .method-option.selected {
            border-color: var(--primary);
            background: rgba(78, 84, 200, 0.05);
        }

        .method-radio {
            margin-right: 1rem;
        }

        .method-details {
            flex: 1;
        }

        .method-name {
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .method-price {
            color: var(--primary);
            font-weight: 600;
        }

        .method-duration {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Payment Methods */
        .payment-methods {
            margin: 2rem 0;
        }

        .payment-tabs {
            display: flex;
            border-bottom: 1px solid #eee;
            margin-bottom: 1.5rem;
        }

        .payment-tab {
            padding: 0.8rem 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
            font-weight: 600;
            color: var(--gray);
            position: relative;
            transition: var(--transition);
        }

        .payment-tab.active {
            color: var(--primary);
        }

        .payment-tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary);
        }

        .payment-content {
            display: none;
        }

        .payment-content.active {
            display: block;
        }

        .card-icons {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .card-icon {
            width: 40px;
            height: 25px;
            object-fit: contain;
            border: 1px solid #eee;
            border-radius: 4px;
            padding: 0.2rem;
        }

        /* Checkout Summary */
        .checkout-summary {
            flex: 1;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 120px;
            height: fit-content;
        }

        .summary-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .checkout-item {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .checkout-item-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
        }

        .checkout-item-details {
            flex: 1;
        }

        .checkout-item-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .checkout-item-variant {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .checkout-item-price {
            color: var(--primary);
            font-weight: 600;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .summary-total {
            font-weight: 700;
            font-size: 1.2rem;
            margin-top: 1rem;
        }

        /* Promo Code */
        .promo-code {
            margin: 1.5rem 0;
            display: flex;
            gap: 1rem;
        }

        .promo-input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        .apply-btn {
            padding: 0 1.5rem;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .apply-btn:hover {
            opacity: 0.9;
        }

        /* Checkout Button */
        .checkout-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: var(--transition);
        }

        .checkout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(78, 84, 200, 0.3);
        }

        /* Features Section */
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
            .checkout-container {
                flex-direction: column;
            }

            .checkout-summary {
                position: static;
                margin-top: 2rem;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .checkout-progress {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .progress-line, .progress-completed {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
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
    </header>

    <!-- Checkout Container -->
    <main class="checkout-container">
        <!-- Checkout Form -->
        <div class="checkout-form">
            <!-- Checkout Progress -->
            <div class="checkout-progress">
                <div class="progress-step">
                    <div class="step-number completed">1</div>
                    <div class="step-name">Cart</div>
                </div>
                <div class="progress-step">
                    <div class="step-number active">2</div>
                    <div class="step-name active">Information</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">3</div>
                    <div class="step-name">Shipping</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">4</div>
                    <div class="step-name">Payment</div>
                </div>
                <div class="progress-line"></div>
                <div class="progress-completed" style="width: 25%;"></div>
            </div>

            <h2 class="form-title">Contact Information</h2>
            <form id="checkoutForm">
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-input" required>
                </div>

                <h2 class="form-title" style="margin-top: 3rem;">Shipping Address</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-input" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Apartment, Suite, etc. (Optional)</label>
                    <input type="text" class="form-input">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Postal Code</label>
                        <input type="text" class="form-input" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Country/Region</label>
                    <select class="form-input" required>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>United Kingdom</option>
                        <option>Australia</option>
                        <option>Germany</option>
                    </select>
                </div>

                <h2 class="form-title" style="margin-top: 3rem;">Shipping Method</h2>
                <div class="shipping-methods">
                    <div class="method-option selected">
                        <input type="radio" name="shipping" id="standard" class="method-radio" checked>
                        <div class="method-details">
                            <div class="method-name">Standard Shipping</div>
                            <div class="method-price">Free</div>
                            <div class="method-duration">3-5 business days</div>
                        </div>
                    </div>
                    <div class="method-option">
                        <input type="radio" name="shipping" id="express" class="method-radio">
                        <div class="method-details">
                            <div class="method-name">Express Shipping</div>
                            <div class="method-price">$9.99</div>
                            <div class="method-duration">1-2 business days</div>
                        </div>
                    </div>
                </div>

                <h2 class="form-title" style="margin-top: 3rem;">Payment Method</h2>
                <div class="payment-methods">
                    <div class="payment-tabs">
                        <button type="button" class="payment-tab active" data-tab="credit-card">Credit Card</button>
                        <button type="button" class="payment-tab" data-tab="paypal">PayPal</button>
                        <button type="button" class="payment-tab" data-tab="apple-pay">Apple Pay</button>
                    </div>

                    <div class="payment-content active" id="credit-card">
                        <div class="card-icons">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/visa/visa-original.svg" class="card-icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mastercard/mastercard-original.svg" class="card-icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apple/apple-original.svg" class="card-icon">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card Number</label>
                            <input type="text" class="form-input" placeholder="1234 5678 9012 3456" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Expiration Date</label>
                                <input type="text" class="form-input" placeholder="MM/YY" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Security Code</label>
                                <input type="text" class="form-input" placeholder="CVC" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Name on Card</label>
                            <input type="text" class="form-input" required>
                        </div>
                    </div>

                    <div class="payment-content" id="paypal">
                        <p>You'll be redirected to PayPal to complete your purchase securely.</p>
                        <button type="button" class="btn btn-primary" style="margin-top: 1rem; width: 100%;">
                            <i class="fab fa-paypal"></i> Continue with PayPal
                        </button>
                    </div>

                    <div class="payment-content" id="apple-pay">
                        <p>Complete your purchase quickly and securely with Apple Pay.</p>
                        <button type="button" class="btn btn-primary" style="margin-top: 1rem; width: 100%;">
                            <i class="fab fa-apple"></i> Continue with Apple Pay
                        </button>
                    </div>
                </div>

                <button type="submit" class="checkout-btn">
                    <i class="fas fa-lock"></i> Complete Order
                </button>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="checkout-summary">
            <h2 class="summary-title">Order Summary</h2>

            <div class="checkout-item">
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80"
                     alt="Premium Leather Watch"
                     class="checkout-item-img">
                <div class="checkout-item-details">
                    <div class="checkout-item-name">Premium Leather Watch</div>
                    <div class="checkout-item-variant">Black, Medium</div>
                    <div class="checkout-item-price">$129.99</div>
                </div>
            </div>

            <div class="checkout-item">
                <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1112&q=80"
                     alt="Designer Running Shoes"
                     class="checkout-item-img">
                <div class="checkout-item-details">
                    <div class="checkout-item-name">Designer Running Shoes</div>
                    <div class="checkout-item-variant">Blue, Size 9</div>
                    <div class="checkout-item-price">$149.99</div>
                </div>
            </div>

            <div class="promo-code">
                <input type="text" class="promo-input" placeholder="Promo Code">
                <button class="apply-btn">Apply</button>
            </div>

            <div class="summary-item">
                <span>Subtotal</span>
                <span>$279.98</span>
            </div>
            <div class="summary-item">
                <span>Shipping</span>
                <span>Free</span>
            </div>
            <div class="summary-item">
                <span>Tax</span>
                <span>$22.40</span>
            </div>
            <div class="summary-item summary-total">
                <span>Total</span>
                <span>$302.38</span>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Categories</h3>
                <ul class="footer-links">
                    <li><a href="categories.html">Men's Fashion</a></li>
                    <li><a href="categories.html">Women's Fashion</a></li>
                    <li><a href="categories.html">Accessories</a></li>
                    <li><a href="categories.html">Footwear</a></li>
                    <li><a href="categories.html">Bags & Luggage</a></li>
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
        // Checkout Page Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Shipping Method Selection
            const methodOptions = document.querySelectorAll('.method-option');
            methodOptions.forEach(option => {
                option.addEventListener('click', function() {
                    methodOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                });
            });

            // Payment Tabs
            const paymentTabs = document.querySelectorAll('.payment-tab');
            paymentTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabId = this.dataset.tab;

                    // Update active tab
                    paymentTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    // Update active content
                    document.querySelectorAll('.payment-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Promo Code Application
            const applyBtn = document.querySelector('.apply-btn');
            applyBtn.addEventListener('click', function() {
                alert('Promo code applied! (This is a demo)');
            });

            // Form Submission
            const checkoutForm = document.getElementById('checkoutForm');
            checkoutForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Order placed successfully! (This is a demo)');
                // In a real app, you would process the payment here
            });

            // Cart Count Update
            const cartCount = document.querySelector('.cart-count');
            if (cartCount) {
                // Reset cart count to 0 on checkout page
                cartCount.textContent = '0';
            }
        });
    </script>
</body>
</html>
