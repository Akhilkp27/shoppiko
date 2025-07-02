   // Initialize category page functionality
function initCategoryPage() {
    // Mobile filter toggle
    const filterBtn = document.getElementById('mobileFilterBtn');
    const sidebar = document.getElementById('categorySidebar');

    if (filterBtn && sidebar) {
        filterBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            filterBtn.classList.toggle('active');
        });
    }

    // Price range display
    const priceRange = document.querySelector('.price-range');
    if (priceRange) {
        const updatePriceDisplay = () => {
            const value = priceRange.value;
            const priceDisplay = priceRange.parentElement.querySelector('.price-values span:nth-child(2)');
            if (priceDisplay) {
                priceDisplay.textContent = `$${value}`;
            }
        };

        priceRange.addEventListener('input', updatePriceDisplay);
        updatePriceDisplay(); // Initialize display
    }

    // Filter counter
    document.querySelectorAll('.filter-options').forEach(container => {
        const checkboxes = container.querySelectorAll('input[type="checkbox"]');
        const header = container.previousElementSibling;

        if (header && header.tagName === 'H3') {
            header.dataset.originalText = header.textContent;

            const updateCounter = () => {
                const checkedCount = container.querySelectorAll('input:checked').length;
                header.textContent = checkedCount > 0
                    ? `${header.dataset.originalText} (${checkedCount})`
                    : header.dataset.originalText;
            };

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateCounter);
            });
        }
    });
}

// Call on page load
document.addEventListener('DOMContentLoaded', initCategoryPage);
        // Mobile Filter Toggle
        document.getElementById('mobileFilterBtn').addEventListener('click', function() {
            document.getElementById('categorySidebar').classList.toggle('active');
        });

        // Price Range Visual Update
        const priceRange = document.querySelector('.price-range');
        if (priceRange) {
            priceRange.addEventListener('input', function() {
                const priceValues = this.parentElement.querySelectorAll('.price-values span');
                priceValues[1].textContent = `$${this.value}`;
            });
        }

        // Filter Checkbox Counter
        const filterCheckboxes = document.querySelectorAll('.filter-options input[type="checkbox"]');
        filterCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const section = this.closest('.sidebar-section');
                const checkedCount = section.querySelectorAll('input:checked').length;

                // Update section header with count
                const header = section.querySelector('h3');
                const originalText = header.dataset.originalText || header.textContent;
                header.dataset.originalText = originalText;

                if (checkedCount > 0) {
                    header.textContent = `${originalText} (${checkedCount})`;
                } else {
                    header.textContent = originalText;
                }
            });
        });
