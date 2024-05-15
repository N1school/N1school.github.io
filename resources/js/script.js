var slideIndex = 0;
var pause = false;

function moveSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("carousel-item");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].className = slides[i].className.replace(" active", "");
    }
    slides[slideIndex-1].className += " active";
}

function autoSlide() {
    if (!pause) {
        moveSlide(1);
    }
    setTimeout(autoSlide, 7000); // Change image every 4 seconds
}

autoSlide();

function pauseCarousel(value) {
    pause = value;
}


