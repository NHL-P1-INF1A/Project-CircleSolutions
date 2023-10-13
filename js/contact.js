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



// Define a function to handle the hover event
function changeClassOnHover(element, selectedLink) {
  // get contact icon 
  const imgIcon = element.querySelector('.contact-icon');
  element.addEventListener("mouseover", function () {
    // add clases on mouse over
    element.classList.add('selected-link');
    imgIcon.classList.add('svg-icon');
  });

  element.addEventListener("mouseout", function () {
    //remove classes on mouseover
    element.classList.remove('selected-link');
    imgIcon.classList.remove('svg-icon');
  });
}

// Get the elements you want to change class on hover
const mailElement = document.querySelector(".contact-mail");
const phoneElement = document.querySelector(".contact-phone");
const locationElement = document.querySelector(".contact-location");


// Call the function for each element
changeClassOnHover(mailElement, "hovered");
changeClassOnHover(phoneElement, "hovered");
changeClassOnHover(locationElement, "hovered");










