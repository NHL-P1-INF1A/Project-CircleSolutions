const hamburgerIcon = document.querySelector('.hamburger-icon');
const hamburgerCross = document.getElementById('cross-hamburger')

const overlay = document.querySelector('.overlay');

hamburgerIcon.addEventListener("click", () => {
  document.querySelector(".overlay").style.display = "flex";
});

hamburgerCross.addEventListener("click", () => {
  document.querySelector(".overlay").style.display = "none";
});

const hamburgerLinks = document.querySelector('.hamburger-links');

hamburgerLinks.addEventListener('click', () => {
    // Hide the overlay
    overlay.style.display = 'none';
});