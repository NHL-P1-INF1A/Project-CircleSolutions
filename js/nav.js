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
const excludedItem = document.querySelector('.darkmode-hamburger');

hamburgerLinks.addEventListener('click', (event) => {
    // Check if the clicked element is not the excluded item
    if (event.target !== excludedItem && !excludedItem.contains(event.target)) {
        // Hide the overlay
        overlay.style.display = 'none';
    }
});