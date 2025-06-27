// Core Values Animation Trigger
function setupValueAnimations() {
    const valueItems = document.querySelectorAll('.value-item');

    if (!valueItems.length) return;

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    valueItems.forEach(item => {
        observer.observe(item);
    });
}

// Call this when page loads
document.addEventListener('DOMContentLoaded', setupValueAnimations);
