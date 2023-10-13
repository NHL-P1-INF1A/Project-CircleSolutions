const contactLinks = document.querySelector('.contact-links'); 
const contactRight = document.querySelector('.contact-links-right')
const mediaQuery = window.matchMedia('(max-width: 1280px)')

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





