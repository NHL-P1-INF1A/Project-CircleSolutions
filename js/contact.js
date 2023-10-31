const contactLinks = document.querySelector('.contact_links'); 
const contactRight = document.querySelector('.contact_links_right');
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
const buttons = document.querySelectorAll('.buttons_contact_right button');

// Add a click event listener to each button
buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove selected-button class from all buttons
        buttons.forEach(btn => {
            btn.classList.remove('selected_button');
            btn.classList.add('unselected_button');
        });

        // Add selected-button class to the clicked button
        button.classList.remove('unselected_button');
        button.classList.add('selected_button');
    });
});



// Define a function to handle the hover event
function changeClassOnHover(element, selectedLink) {
  // get contact icon 
  const imgIcon = element.querySelector('.contact_icon');
  element.addEventListener("mouseover", function () {
    // add clases on mouse over
    element.classList.add('selected_link');
    imgIcon.classList.add('svg_icon');
  });

  element.addEventListener("mouseout", function () {
    //remove classes on mouseover
    element.classList.remove('selected_link');
    imgIcon.classList.remove('svg_icon');
  });
}

// Get the elements you want to change class on hover
const mailElement = document.querySelector(".contact_mail");
const phoneElement = document.querySelector(".contact_phone");
const locationElement = document.querySelector(".contact_location");


// Call the function for each element
changeClassOnHover(mailElement, "hovered");
changeClassOnHover(phoneElement, "hovered");
changeClassOnHover(locationElement, "hovered");










