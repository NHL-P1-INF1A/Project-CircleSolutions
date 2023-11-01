const hamburgerIcon = document.querySelector('.hamburger_icon');
const hamburgerCross = document.getElementById('cross_hamburger')

const overlay = document.querySelector('.overlay');

hamburgerIcon.addEventListener("click", () => {
  document.querySelector(".overlay").style.display = "flex";
});

hamburgerCross.addEventListener("click", () => {
  document.querySelector(".overlay").style.display = "none";
});

const hamburgerLinks = document.querySelector('.hamburger_links');
const excludedItem = document.querySelector('.darkmode_hamburger');

hamburgerLinks.addEventListener('click', (event) => {
    // Check if the clicked element is not the excluded item
    if (event.target !== excludedItem && !excludedItem.contains(event.target)) {
        // Hide the overlay
        overlay.style.display = 'none';
    }
});