        // Shop Page Functionality
document.addEventListener('DOMContentLoaded', function() {
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

    // Pagination buttons
    const pageButtons = document.querySelectorAll('.page-btn');
    pageButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (!this.classList.contains('active')) {  // Fixed: Added missing parenthesis
                pageButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });

    // Search functionality
    const searchInput = document.querySelector('.search-bar input');
    const searchButton = document.querySelector('.search-bar button');

    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            alert(`Searching for: ${searchTerm}`);
            // In a real app, you would filter products here
        }
    });

    // Sort functionality
    const sortSelect = document.querySelector('.sort-select');
    sortSelect.addEventListener('change', function() {
        alert(`Sorted by: ${this.value}`);
        // In a real app, you would sort products here
    });
});

function viewProduct(productId) {
    // In a real application, this would redirect to the product page
    // For this example, we'll show a modal with the product ID
    alert(`Viewing product: ${productId}\n\nIn a real site, this would open the product detail page.`);

    // Example of actual redirection (uncomment to use):
    // window.location.href = `product.html?id=${productId}`;
}
