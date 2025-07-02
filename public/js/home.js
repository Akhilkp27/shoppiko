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
