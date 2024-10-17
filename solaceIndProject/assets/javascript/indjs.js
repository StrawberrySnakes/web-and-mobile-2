
// function for ham menu

function toggleNav() {
    console.log('toggleNav function called');
    var links = document.getElementById("navLinks");
    var topnav = document.querySelector(".topnav");
    topnav.classList.toggle("responsive");

    // Check if links are currently visible
    var linksVisible = window.getComputedStyle(links).getPropertyValue('display') !== 'none';

    // Toggle the visibility of the links
    links.style.display = linksVisible ? 'none' : 'block';
}



// for the DHTML slidshow

// Define an array of image URLs
var slides = [
    { image: "../assets/images/indProject/slide1.jpg", link: "outdoors.php", text: "Explore the Outdoors" },
    { image: "../assets/images/indProject/slide2.jpg", link: "hiking.php", text: "Enjoy Hiking Trails" },
    { image: "../assets/images/indProject/slide3.jpeg", link: "biking.php", text: "Discover Bike Paths" },
    { image: "../assets/images/indProject/slide5.jpg", link: "food.php", text: "Explore Local Food" },
    { image: "../assets/images/indProject/slide6.jpg", link: "stores.php", text: "Shop Local Stores" },
    { image: "../assets/images/indProject/slide7.jpg", link: "events.php", text: "Join Community Events" }
];

var currentIndex = 0;
var image = document.getElementById('image');
var imageLink = document.getElementById('imageLink');
var overlay = document.querySelector('.overlay');

// Function to change the image, link, and text
function changeSlide() {
    image.src = slides[currentIndex].image;
    imageLink.href = slides[currentIndex].link;
    overlay.textContent = slides[currentIndex].text;
    currentIndex = (currentIndex + 1) % slides.length; // Loop back to the first slide if reached the end
}

// Call the changeSlide function every 5 seconds
setInterval(changeSlide, 5000);


// this make it go to top of page
// inspiration from W3schools
let mybutton = document.getElementById("topBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks scroll to the top
function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}


// form validation 
document.getElementById('question-form').addEventListener('submit', function(event) {
    // Get form inputs
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var comment = document.getElementById('comment').value.trim();
    var rating = document.querySelector('.stars input[type="radio"]:checked');

    // Perform validation
    if (name === '' || email === '' || comment === '' || !rating) {
        // Prevent form submission
        event.preventDefault();

        // Display error message
        alert('Please fill out all fields and rate your experience.');
    }
});



// fixing buttons

function gocomment() {
    window.location.href = "comments.php";
}
        
function gobreakfast() {
    window.location.href = "breakfast.php";
}

function godinner() {
    window.location.href = "dinner.php";
}

function gohiking() {
    window.location.href = "hiking.php";
}

function gobiking() {
    window.location.href = "biking.php";
}


// hiking and biking images animation

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
    setTimeout(slideImages, 1000);
}

// Call startImageSlideAnimation function when the page loads
document.addEventListener('DOMContentLoaded', function() {
    startImageSlideAnimation();
});
