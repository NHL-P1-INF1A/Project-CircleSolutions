const contactLinks = document.querySelector('.contact-links'); 
const contactRight = document.querySelector('.contact-links-right');
const mediaQuery = window.matchMedia('(max-width: 1280px)');

function handleMediaChange(event) {
  if (event.matches) {
    contactLinks.style.display = 'none';
    contactRight.style.display = 'block';
  }
  else {
    contactRight.style.display = 'none';
    contactLinks.style.display = 'block';

}
}
mediaQuery.addListener(handleMediaChange);
handleMediaChange(mediaQuery);


// Get all the buttons
const buttons = document.querySelectorAll('.buttons-contact-right button');

// Add a click event listener to each button
buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove selected-button class from all buttons
        buttons.forEach(btn => {
            btn.classList.remove('selected-button');
            btn.classList.add('unselected-button');
        });

        // Add selected-button class to the clicked button
        button.classList.remove('unselected-button');
        button.classList.add('selected-button');
    });
});









