document.getElementById('toggle-dark-mode').addEventListener('click', () => {
    const body = document.body;
    const icon = document.getElementById('dark-mode-icon');
    const text = document.getElementById('dark-mode-text');

    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');

    // Toggle icon based on mode
    if (body.classList.contains('dark-mode')) {
        icon.setAttribute('src', 'assets/brightness-high-fill.svg'); // Sun icon
        text.textContent = 'Light Mode';
    } else {
        icon.setAttribute('src', 'assets/moon-stars-fill.svg'); // Moon icon
        text.textContent = 'Dark Mode';
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Fade-in Effect
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach((el) => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    el.classList.add('visible');
                }
            });
        });
        observer.observe(el);
    });

    // Navbar Scroll Up
    const navbar = document.querySelector(".navbar");
        let lastScrollTop = 0;

        window.addEventListener("scroll", function () {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                navbar.classList.add("hidden");
            } else {
                navbar.classList.remove("hidden");
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
        });
});
