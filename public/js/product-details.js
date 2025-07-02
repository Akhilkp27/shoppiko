   // Product Detail Page Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Image Gallery
            const mainImage = document.getElementById('mainImage');
            const thumbnails = document.querySelectorAll('.thumbnail');

            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function() {
                    // Update main image
                    mainImage.src = this.dataset.image;

                    // Update active thumbnail
                    thumbnails.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Image Zoom
            mainImage.addEventListener('click', function() {
                this.classList.toggle('zoomed');
            });

            // Color Selector
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    colorOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Size Selector
            const sizeOptions = document.querySelectorAll('.size-option');
            sizeOptions.forEach(option => {
                option.addEventListener('click', function() {
                    sizeOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Quantity Selector
            const minusBtn = document.querySelector('.quantity-btn.minus');
            const plusBtn = document.querySelector('.quantity-btn.plus');
            const quantityInput = document.getElementById('quantity');

            minusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });

            plusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });

            // Tabs
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabId = this.dataset.tab;

                    // Update active tab button
                    tabBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // Update active tab content
                    tabContents.forEach(content => content.classList.remove('active'));
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Add to Cart
            const addToCartBtn = document.getElementById('addToCart');
            const cartCount = document.querySelector('.cart-count');

            addToCartBtn.addEventListener('click', function() {
                let count = parseInt(cartCount.textContent);
                const quantity = parseInt(quantityInput.value);
                cartCount.textContent = count + quantity;

                // Animation
                this.innerHTML = '<i class="fas fa-check"></i> Added to Cart';
                this.style.backgroundColor = '#4BB543';

                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-shopping-cart"></i> Add to Cart';
                    this.style.backgroundColor = '';
                }, 2000);
            });

            // Related Products - Add to Cart
            const relatedAddToCart = document.querySelectorAll('.product-card .add-to-cart');
            relatedAddToCart.forEach(button => {
                button.addEventListener('click', function() {
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
        });
