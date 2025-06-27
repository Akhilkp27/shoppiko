@extends('layouts.storefront')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you! Reach out with any questions or feedback.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <div class="container contact-container">
        <div class="contact-info">
            <h2>Contact Information</h2>

            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Our Location</h3>
                    <p>123 Commerce Street<br>San Francisco, CA 94103</p>
                </div>
            </div>

            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Phone</h3>
                    <p>+1 (555) 123-4567</p>
                    <p>Mon-Fri: 9am-6pm PST</p>
                </div>
            </div>

            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h3>Email</h3>
                    <p>support@luminashop.com</p>
                    <p>Response within 24 hours</p>
                </div>
            </div>

            <div class="contact-method">
                <div class="contact-icon">
                    <i class="fas fa-comment-dots"></i>
                </div>
                <div class="contact-details">
                    <h3>Live Chat</h3>
                    <p>Available 24/7</p>
                    <a href="#" class="btn btn-outline" style="margin-top: 10px;">Start Chat</a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Map Section -->
    <div class="container">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.048270075382!2d-122.403341924686!3d37.78679247198089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807d10af6e51%3A0x1122879c36e6d3aa!2s123%20Commerce%20St%2C%20San%20Francisco%2C%20CA%2094103!5e0!3m2!1sen!2sus!4v1689876543210!5m2!1sen!2sus"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
