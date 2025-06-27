@extends('layouts.storefront')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Our Story</h1>
            <p>Discover the passion and purpose behind LuminaShop</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="section-container">
            <h2 class="section-title">Our Mission</h2>
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Quality Products</h3>
                    <p>We source only the finest materials and products to ensure your complete satisfaction with every
                        purchase.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Customer First</h3>
                    <p>Your satisfaction is our top priority. We go above and beyond to deliver exceptional service.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainable Practices</h3>
                    <p>We're committed to eco-friendly operations and sustainable business practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="section-container">
            <h2 class="section-title">Our Journey</h2>
            <div class="story-content">
                <div class="story-text">
                    <h3>From Humble Beginnings</h3>
                    <p>Founded in 2015, LuminaShop started as a small boutique in San Francisco with a simple idea: to bring
                        beautifully designed, high-quality products to customers who appreciate craftsmanship and attention
                        to detail.</p>
                    <p>What began as a passion project between two college friends has grown into a thriving e-commerce
                        business serving customers worldwide, while still maintaining our commitment to the values that
                        started it all.</p>
                    <p>Today, we partner with over 50 independent designers and artisans to bring you unique products you
                        won't find anywhere else.</p>
                </div>
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80"
                        alt="Our team working together">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="section-container">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Sarah Johnson">
                    </div>
                    <div class="member-info">
                        <h3>Sarah Johnson</h3>
                        <p>CEO & Co-Founder</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Michael Chen">
                    </div>
                    <div class="member-info">
                        <h3>Michael Chen</h3>
                        <p>CTO & Co-Founder</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80"
                            alt="Emily Rodriguez">
                    </div>
                    <div class="member-info">
                        <h3>Emily Rodriguez</h3>
                        <p>Head of Design</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="section-container">
            <h2 class="section-title">Our Core Values</h2>
            <div class="values-list">
                <div class="value-item">
                    <div class="value-number">1</div>
                    <div>
                        <h3>Authenticity</h3>
                        <p>We believe in being genuine in all our interactions, from product sourcing to customer service.
                        </p>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-number">2</div>
                    <div>
                        <h3>Innovation</h3>
                        <p>We constantly seek new ways to improve our products and your shopping experience.</p>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-number">3</div>
                    <div>
                        <h3>Community</h3>
                        <p>We support the creative community by partnering with independent designers and makers.</p>
                    </div>
                </div>
                <div class="value-item">
                    <div class="value-number">4</div>
                    <div>
                        <h3>Sustainability</h3>
                        <p>We're committed to reducing our environmental impact through responsible business practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/about.js') }}"></script>
@endsection
