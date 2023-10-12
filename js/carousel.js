const carouselSlider = document.getElementById('carousel-slides');
    const carouselSlides = document.querySelectorAll('.carousel_slide');
    const prevButton = document.querySelector('#prev_button');
    const nextButton = document.querySelector('#next_button');
    const carouselDots = document.querySelector('#carouselDots');
<<<<<<< HEAD
=======
    
>>>>>>> d34f5e68fa1ea8f51a6cdd00b8be5dcf7f1df208
    let currentIndex = 0;
    // calculates how many dots are needed based on the slides
    for (let i = 0; i < carouselSlides.length; i++) {
        const dot = document.createElement('div');
        dot.className = 'carousel_dot';
        dot.addEventListener('click', () => {
            currentIndex = i;
            updateCarousel();
        });
        carouselDots.appendChild(dot);
    }
    // highlight the active dot
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
    // activates on press of nextbutton so it adds 1
    nextButton.addEventListener('click', () => {
        if (currentIndex < carouselSlides.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });
    // activates on press of prevbutton so it subtracts 1
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });
    // updates the active dot and slide
    function updateCarousel() {
<<<<<<< HEAD
        const translateXValue = currentIndex * -50 + '%';
        carousel_slides.style.transform = 'translateX(' + translateXValue + ')';
        highlightDot();
=======
        const style = document.querySelector("#carousel_slide"); 
        const value = window.getComputedStyle(style) 
                          .getPropertyValue('flex-basis');
        
        if (value == 100 + "%") {
            carousel_slides.style.transform = 'translateX(' + currentIndex * -100 + '%' + ')';
        } else {
            carousel_slides.style.transform = 'translateX(' + currentIndex * -50 + '%' + ')';
        }
        highlightDot();
        console.log(value);
>>>>>>> d34f5e68fa1ea8f51a6cdd00b8be5dcf7f1df208
    }
    // on start highlight the first dot
    highlightDot();