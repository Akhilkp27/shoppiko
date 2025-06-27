// DOM Elements
const mobileMenuBtn = document.getElementById('mobile-menu');
const mainNav = document.getElementById('main-nav');
const navLinks = document.querySelectorAll('.nav-link');
const backToTopBtn = document.getElementById('back-to-top');
const loader = document.querySelector('.loader');
const cartIcon = document.getElementById('cart-icon');
const cartSidebar = document.getElementById('cart-sidebar');
const closeCartBtn = document.getElementById('close-cart');
const searchToggle = document.querySelector('.search-toggle');
const searchBar = document.querySelector('.search-bar');
const closeSearch = document.querySelector('.close-search');
const quickViewModal = document.getElementById('quick-view-modal');
const closeModal = document.querySelector('.close-modal');
const quickViewBtns = document.querySelectorAll('.quick-view-btn');
const addToCartBtns = document.querySelectorAll('.add-to-cart');
const cartCount = document.querySelector('.cart-count');
const wishlistBtns = document.querySelectorAll('.wishlist');
const newsletterForm = document.querySelector('.newsletter-form');
const thumbnailImages = document.querySelectorAll('.thumbnail-images img');
const mainModalImage = document.getElementById('modal-main-image');
const sizeOptions = document.querySelectorAll('.size-option');
const colorOptions = document.querySelectorAll('.color-option');
const minusBtns = document.querySelectorAll('.minus');
const plusBtns = document.querySelectorAll('.plus');
const cartItemsContainer = document.querySelector('.cart-items');
const subtotalPrice = document.querySelector('.subtotal-price');
const continueShoppingBtn = document.querySelector('.continue-shopping');
const productCards = document.querySelectorAll('.product-card');

// Global Variables
let cart = [];
let subtotal = 0;

// Initialize the page
document.addEventListener('DOMContentLoaded', () => {
    // Hide loader when all assets are loaded
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            document.body.style.overflow = 'auto';
        }, 500); // Short delay for smooth transition
    });

    // Fallback in case load event doesn't fire
    setTimeout(() => {
        loader.style.opacity = '0';
        loader.style.visibility = 'hidden';
        document.body.style.overflow = 'auto';
    }, 3000); // Maximum 3 seconds fallback
});

// Mobile Menu Toggle
mobileMenuBtn.addEventListener('click', () => {
    mainNav.classList.toggle('active');
    document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : 'auto';
});

// Close mobile menu when clicking on a link
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        mainNav.classList.remove('active');
        document.body.style.overflow = 'auto';
    });
});

// Back to Top Button
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.add('visible');
    } else {
        backToTopBtn.classList.remove('visible');
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Cart Sidebar Toggle
cartIcon.addEventListener('click', (e) => {
    e.preventDefault();
    cartSidebar.classList.add('open');
    document.body.style.overflow = 'hidden';
});

closeCartBtn.addEventListener('click', () => {
    cartSidebar.classList.remove('open');
    document.body.style.overflow = 'auto';
});

continueShoppingBtn.addEventListener('click', () => {
    cartSidebar.classList.remove('open');
    document.body.style.overflow = 'auto';
});

// Search Bar Toggle
searchToggle.addEventListener('click', (e) => {
    e.preventDefault();
    searchBar.classList.toggle('active');
    if (searchBar.classList.contains('active')) {
        searchBar.querySelector('input').focus();
    }
});

closeSearch.addEventListener('click', () => {
    searchBar.classList.remove('active');
});

// Quick View Modal
function setupQuickViewButtons() {
    quickViewBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const productCard = btn.closest('.product-card');
            openQuickViewModal(productCard);
        });
    });
}

function openQuickViewModal(productCard) {
    const productTitle = productCard.querySelector('h3').textContent;
    const currentPrice = productCard.querySelector('.current-price').textContent;
    const oldPrice = productCard.querySelector('.old-price')?.textContent || '';
    const productImage = productCard.querySelector('.product-img img').src;

    document.getElementById('modal-product-title').textContent = productTitle;
    document.getElementById('modal-current-price').textContent = currentPrice;
    document.getElementById('modal-old-price').textContent = oldPrice;
    document.getElementById('modal-main-image').src = productImage;

    quickViewModal.style.display = 'block';
    document.body.style.overflow = 'hidden';

    // Reset thumbnail selection
    thumbnailImages.forEach(img => img.classList.remove('active'));
    thumbnailImages[0].classList.add('active');
}

closeModal.addEventListener('click', () => {
    quickViewModal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

window.addEventListener('click', (e) => {
    if (e.target === quickViewModal) {
        quickViewModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});

// Thumbnail Image Selection
thumbnailImages.forEach(img => {
    img.addEventListener('click', () => {
        thumbnailImages.forEach(i => i.classList.remove('active'));
        img.classList.add('active');
        mainModalImage.src = img.src;

        // Add animation to main image
        mainModalImage.classList.add('animate__animated', 'animate__fadeIn');
        setTimeout(() => {
            mainModalImage.classList.remove('animate__animated', 'animate__fadeIn');
        }, 500);
    });
});

// Size Selection
sizeOptions.forEach(option => {
    option.addEventListener('click', () => {
        sizeOptions.forEach(opt => opt.classList.remove('active'));
        option.classList.add('active');

        // Add click animation
        option.classList.add('animate__animated', 'animate__pulse');
        setTimeout(() => {
            option.classList.remove('animate__animated', 'animate__pulse');
        }, 500);
    });
});

// Color Selection
colorOptions.forEach(option => {
    option.addEventListener('click', () => {
        colorOptions.forEach(opt => opt.classList.remove('active'));
        option.classList.add('active');

        // Add click animation
        option.classList.add('animate__animated', 'animate__pulse');
        setTimeout(() => {
            option.classList.remove('animate__animated', 'animate__pulse');
        }, 500);
    });
});

// Quantity Controls
minusBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const input = btn.nextElementSibling;
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });
});

plusBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const input = btn.previousElementSibling;
        input.value = parseInt(input.value) + 1;
    });
});

// Add to Cart Functionality
addToCartBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Get product details
        const productCard = btn.closest('.product-card');
        const productId = productCard.dataset.id || Math.floor(Math.random() * 1000);
        const productTitle = productCard.querySelector('h3').textContent;
        const productPrice = parseFloat(productCard.querySelector('.current-price').textContent.replace('$', ''));
        const productImage = productCard.querySelector('.product-img img').src;

        // Check if product already in cart
        const existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: productId,
                title: productTitle,
                price: productPrice,
                image: productImage,
                quantity: 1
            });
        }

        // Update cart
        updateCartCount();
        updateCartSidebar();
        saveCartToLocalStorage();

        // Animation effect
        btn.textContent = 'Added!';
        btn.style.backgroundColor = 'var(--success)';
        btn.classList.add('animate__animated', 'animate__pulse');

        // Reset button after animation
        setTimeout(() => {
            btn.textContent = 'Add to Cart';
            btn.style.backgroundColor = 'var(--primary)';
            btn.classList.remove('animate__animated', 'animate__pulse');
        }, 1000);

        // Show cart sidebar
        cartSidebar.classList.add('open');
        document.body.style.overflow = 'hidden';

        // Add item added animation to cart icon
        cartIcon.classList.add('animate__animated', 'animate__tada');
        setTimeout(() => {
            cartIcon.classList.remove('animate__animated', 'animate__tada');
        }, 1000);
    });
});

// Update Cart Count
function updateCartCount() {
    const count = cart.reduce((total, item) => total + item.quantity, 0);
    cartCount.textContent = count;

    // Add animation when count changes
    if (count > 0) {
        cartCount.classList.add('animate__animated', 'animate__bounceIn');
        setTimeout(() => {
            cartCount.classList.remove('animate__animated', 'animate__bounceIn');
        }, 500);
    }
}

// Update Cart Sidebar
function updateCartSidebar() {
    cartItemsContainer.innerHTML = '';
    subtotal = 0;

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p class="empty-cart">Your cart is empty</p>';
        subtotalPrice.textContent = '$0.00';
        return;
    }

    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item animate__animated animate__fadeIn';
        cartItem.innerHTML = `
            <div class="cart-item-img">
                <img src="${item.image}" alt="${item.title}">
            </div>
            <div class="cart-item-details">
                <h4 class="cart-item-title">${item.title}</h4>
                <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                <div class="cart-item-actions">
                    <div class="cart-item-quantity">
                        <button class="quantity-btn minus">-</button>
                        <input type="number" value="${item.quantity}" min="1">
                        <button class="quantity-btn plus">+</button>
                    </div>
                    <div class="remove-item" data-id="${item.id}">
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
            </div>
        `;
        cartItemsContainer.appendChild(cartItem);

        // Update subtotal
        subtotal += item.price * item.quantity;
    });

    // Update subtotal display
    subtotalPrice.textContent = `$${subtotal.toFixed(2)}`;

    // Add event listeners to new cart items
    addCartItemEventListeners();
}

// Add Event Listeners to Cart Items
function addCartItemEventListeners() {
    // Quantity controls
    document.querySelectorAll('.cart-item-quantity .minus').forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.nextElementSibling;
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
                updateCartItem(this);
            }
        });
    });

    document.querySelectorAll('.cart-item-quantity .plus').forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.previousElementSibling;
            input.value = parseInt(input.value) + 1;
            updateCartItem(this);
        });
    });

    // Quantity input changes
    document.querySelectorAll('.cart-item-quantity input').forEach(input => {
        input.addEventListener('change', function() {
            if (parseInt(this.value) < 1) this.value = 1;
            updateCartItem(this);
        });
    });

    // Remove item buttons
    document.querySelectorAll('.remove-item').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.dataset.id;
            const itemIndex = cart.findIndex(item => item.id === itemId);

            // Add removal animation
            const cartItem = this.closest('.cart-item');
            cartItem.classList.remove('animate__fadeIn');
            cartItem.classList.add('animate__animated', 'animate__fadeOut');

            setTimeout(() => {
                cart = cart.filter(item => item.id !== itemId);
                updateCartCount();
                updateCartSidebar();
                saveCartToLocalStorage();
            }, 500);
        });
    });
}

// Update Cart Item
function updateCartItem(element) {
    const cartItem = element.closest('.cart-item');
    const itemId = cartItem.querySelector('.remove-item').dataset.id;
    const newQuantity = parseInt(cartItem.querySelector('input').value);

    const item = cart.find(item => item.id === itemId);
    if (item) {
        item.quantity = newQuantity;
        updateCartCount();
        updateCartSidebar();
        saveCartToLocalStorage();

        // Add update animation
        cartItem.classList.add('animate__animated', 'animate__pulse');
        setTimeout(() => {
            cartItem.classList.remove('animate__animated', 'animate__pulse');
        }, 500);
    }
}

// Save Cart to Local Storage
function saveCartToLocalStorage() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Wishlist Toggle
wishlistBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const icon = btn.querySelector('i');
        if (icon.classList.contains('far')) {
            icon.classList.remove('far');
            icon.classList.add('fas');
            btn.style.backgroundColor = 'var(--danger)';
            btn.style.color = 'white';

            // Add animation
            btn.classList.add('animate__animated', 'animate__pulse');
            setTimeout(() => {
                btn.classList.remove('animate__animated', 'animate__pulse');
            }, 1000);

            // Show floating notification
            showFloatingNotification('Added to wishlist');
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
            btn.style.backgroundColor = 'var(--light)';
            btn.style.color = 'inherit';

            // Show floating notification
            showFloatingNotification('Removed from wishlist');
        }
    });
});

// Show Floating Notification
function showFloatingNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'floating-notification animate__animated animate__fadeInUp';
    notification.innerHTML = `
        <i class="fas fa-heart"></i>
        <span>${message}</span>
    `;
    document.body.appendChild(notification);

    // Remove after animation
    setTimeout(() => {
        notification.classList.remove('animate__fadeInUp');
        notification.classList.add('animate__fadeOutDown');
        setTimeout(() => {
            notification.remove();
        }, 500);
    }, 3000);
}

// Newsletter Form Submission
if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const emailInput = newsletterForm.querySelector('input[type="email"]');
        if (emailInput.value) {
            // Show success message with animation
            const successMsg = document.createElement('div');
            successMsg.className = 'newsletter-success animate__animated animate__fadeInUp';
            successMsg.innerHTML = `
                <i class="fas fa-check-circle"></i>
                <p>Thank you for subscribing!</p>
            `;
            newsletterForm.parentNode.insertBefore(successMsg, newsletterForm.nextSibling);

            // Hide after 3 seconds
            setTimeout(() => {
                successMsg.classList.remove('animate__fadeInUp');
                successMsg.classList.add('animate__fadeOutDown');
                setTimeout(() => {
                    successMsg.remove();
                }, 500);
            }, 3000);

            emailInput.value = '';
        }
    });
}

// Add hover buttons to product cards
function addHoverButtonsToProducts() {
    productCards.forEach(card => {
        // Check if hover buttons already exist
        if (!card.querySelector('.product-hover-buttons')) {
            const hoverButtons = document.createElement('div');
            hoverButtons.className = 'product-hover-buttons';
            hoverButtons.innerHTML = `
                <button class="quick-view-btn">Quick View</button>
            `;
            card.appendChild(hoverButtons);

            // Add quick view functionality
            hoverButtons.querySelector('.quick-view-btn').addEventListener('click', (e) => {
                e.preventDefault();
                openQuickViewModal(card);
            });
        }
    });
}

// Initialize quick view buttons
setupQuickViewButtons();

// Add animation to elements when they come into view
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.category-card, .product-card, .testimonial-card');

    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if (elementPosition < screenPosition) {
            element.classList.add('animate__animated', 'animate__fadeInUp');
        }
    });
};

window.addEventListener('scroll', animateOnScroll);
animateOnScroll(); // Run once on page load

// Add hover effect to category cards
document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.querySelector('img').style.transform = 'scale(1.1)';
    });

    card.addEventListener('mouseleave', () => {
        card.querySelector('img').style.transform = 'scale(1)';
    });
});

// Add floating notification style dynamically
const style = document.createElement('style');
style.textContent = `
    .floating-notification {
        position: fixed;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
        color: var(--dark);
        padding: 15px 25px;
        border-radius: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 1000;
    }

    .floating-notification i {
        color: var(--danger);
    }
`;
document.head.appendChild(style);
document.addEventListener("click", function (e) {
    if (e.target.classList.contains("modal-add-to-cart")) {
        const productId = e.target.dataset.productId;

        if (!productId) {
            console.error("Product ID not found on Add to Cart button");
            return;
        }

        console.log("Adding to cart product:", productId);
        // Add to cart logic here
    }
});
