const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

hamburger.addEventListener('click', () => {
    // Toggle the hamburger animation
    hamburger.classList.toggle('active');

    // Toggle the visibility of the menu
    navLinks.classList.toggle('active');
});
