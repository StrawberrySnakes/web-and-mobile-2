function startImageSlideAnimation() {
    // Get all images with class 'biking' or 'hikes'
    var images = document.querySelectorAll('.biking img, .hikes img');

    // Function to add 'show' class to images after a delay
    function slideImages() {
        images.forEach(function(image) {
            image.classList.add('show');
        });
    }

    // Call slideImages function after a delay of 1000ms (1 second)
    setTimeout(slideImages, 500);
}

// Call startImageSlideAnimation function when the page loads
document.addEventListener('DOMContentLoaded', function() {
    startImageSlideAnimation();
});