const carouselSlider = document.getElementById('carousel-slides');
    const carouselSlides = document.querySelectorAll('.carousel_slide');
    const prevButton = document.querySelector('.carousel_arrow_left');
    const nextButton = document.querySelector('.carousel_arrow_right');
    const prevButtonMobile = document.querySelector('.mobile_left');
    const nextButtonMobile = document.querySelector('.mobile_right');
    const carouselDots = document.querySelector('#carousel_dots'); 
    
    let currentIndex = 0;
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
    // Activates on press of nextbutton so it adds 1
    nextButtonMobile.addEventListener('click', () => {
        if (currentIndex < carouselSlides.length - 1) {
            currentIndex++;
        }else{
            currentIndex = 0;
        }
        updateCarousel();
    });
    // Activates on press of prevbutton so it subtracts 1
    prevButtonMobile.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = carouselSlides.length - 1;
        }
        updateCarousel();
    });
    // Activates on press of nextbutton so it adds 1
    nextButton.addEventListener('click', () => {
        if (currentIndex < carouselSlides.length - 1) {
            currentIndex++;
        }else{
            currentIndex = 0;
        }
        updateCarousel();
    });
    // Activates on press of prevbutton so it subtracts 1
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = carouselSlides.length - 1;
        }
        updateCarousel();
    });
    // Updates the active dot and slide
    function updateCarousel() {
        const style = document.querySelector(".carousel_slide"); 
        const value = window.getComputedStyle(style) 
                          .getPropertyValue('flex-basis');
        
        if (value == 100 + "%") {
            carousel_slides.style.transform = 'translateX(' + currentIndex * -100 + '%' + ')';
        } else {
            carousel_slides.style.transform = 'translateX(' + currentIndex * -50 + '%' + ')';
        }
        highlightDot();
        console.log(value);
    }
    // On start highlight the first dot
    highlightDot();