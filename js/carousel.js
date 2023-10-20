const carouselSlider = document.getElementById('carousel_slides');
const carouselSlides = document.querySelectorAll('.carousel_slide');
const prevButton = document.querySelector('.carousel_arrow_left');
const nextButton = document.querySelector('.carousel_arrow_right');
const prevButtonMobile = document.querySelector('.mobile_left');
const nextButtonMobile = document.querySelector('.mobile_right');
const carouselDots = document.querySelector('#carousel_dots');
    
let currentIndex = 0;
let touchStartX = 0;
let touchEndX = 0;

// Calculates how many dots are needed based on the slides
for (let i = 0; i < carouselSlides.length; i++) {
    const dot = document.createElement('div');
    dot.className = 'carousel_dot';
    dot.addEventListener('click', () => {
        currentIndex = i;
        updateCarousel();
    });
    carouselDots.appendChild(dot);
}

// Highlights the active dot
function highlightDot() {
    const dots = document.querySelectorAll('.carousel_dot');
    dots.forEach((dot, index) => {
        if (index === currentIndex) {
            dot.classList.add('active_dot');
        } else {
            dot.classList.remove('active_dot');
        }
    });
}

// Function to update the carousel based on currentIndex
function updateCarousel() {
    const style = document.querySelector(".carousel_slide");
    const value = window.getComputedStyle(style)
        .getPropertyValue('flex-basis');

    if (value == 100 + "%") {
        carouselSlider.style.transform = 'translateX(' + currentIndex * -100 + '%' + ')';
    } else {
        carouselSlider.style.transform = 'translateX(' + currentIndex * -50 + '%' + ')';
    }
    highlightDot();
}

// Checks if user started touching the carouselSlider
carouselSlider.addEventListener('touchstart', (e) => {
    touchStartX = e.touches[0].clientX;
});

// Checks if user started moving on the the carouselSlider
carouselSlider.addEventListener('touchmove', (e) => {
    touchEndX = e.touches[0].clientX;
});

// Checks if user finished touching the carouselSlider
carouselSlider.addEventListener('touchend', () => {
    const minSwipeDistance = 50; // You can adjust this value
    if (touchStartX - touchEndX > minSwipeDistance) {
        // Swipe left
        if (currentIndex < carouselSlides.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    } else if (touchEndX - touchStartX > minSwipeDistance) {
        // Swipe right
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = carouselSlides.length - 1;
        }
        updateCarousel();
    }
});

// Activate on press of next button for mobile
nextButtonMobile.addEventListener('click', () => {
    if (currentIndex < carouselSlides.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateCarousel();
});

// Activate on press of prev button for mobile
prevButtonMobile.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = carouselSlides.length - 1;
    }
    updateCarousel();
});

// Activate on press of next button
nextButton.addEventListener('click', () => {
    if (currentIndex < carouselSlides.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateCarousel();
});

// Activate on press of prev button
prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = carouselSlides.length - 1;
    }
    updateCarousel();
});

// On start, highlight the first dot
highlightDot();