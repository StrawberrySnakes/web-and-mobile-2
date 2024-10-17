function toggleNav() {
    console.log('toggleNav function called');
    var links = document.getElementById("navLinks");
    var topnav = document.querySelector(".topnav");
    topnav.classList.toggle("active");

    // Check if links are currently visible
    var linksVisible = window.getComputedStyle(links).getPropertyValue('display') !== 'none';

    // Toggle the visibility of the links
    links.style.display = linksVisible ? 'none' : 'flex';
}