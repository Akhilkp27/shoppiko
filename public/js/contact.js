       // Contact Form Submission
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');

            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Get form values
                    const firstName = document.getElementById('firstName').value;
                    const lastName = document.getElementById('lastName').value;
                    const email = document.getElementById('email').value;
                    const subject = document.getElementById('subject').value;
                    const message = document.getElementById('message').value;

                    // Here you would typically send the data to a server
                    // For this example, we'll just show an alert
                    alert(`Thank you, ${firstName} ${lastName}! Your message has been sent. We'll get back to you soon at ${email}.`);

                    // Reset form
                    contactForm.reset();
                });
            }

            // Add to cart animation (if cart icon is clicked)
            const cartIcon = document.querySelector('.nav-icons a[href="checkout.html"]');
            if (cartIcon) {
                cartIcon.addEventListener('click', function(e) {
                    // Animation
                    this.style.transform = 'translateY(-3px)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 300);
                });
            }
        });
