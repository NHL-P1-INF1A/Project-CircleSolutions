// Select all counter elements based on the HTML structure
let counters = document.querySelectorAll(".values_small_box_text span");
let originalValues = []; // Store the original values of counters
counters.forEach(counter => originalValues.push(counter.innerText));
let animated = [];

// Function to check if an element is in the viewport
function isInViewport(element) 
{
  let rect = element.getBoundingClientRect();
  return (rect.top <= window.innerHeight && rect.bottom >= 0);
}

// Easing function for a smooth counting effect
function easeInOutCubic(t) 
{
  return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
}

// Function to animate the counter numbers
function animateNumber(counterElement, targetValue) 
{
  let startTime = null; // To keep track of the animation start time
  let duration = 2500;  // Duration of the animation in milliseconds (2 seconds)

  // Function that updates the counter based on eased progress
  function updateCounter(timestamp) 
  {
    if (!startTime) startTime = timestamp;

    let elapsed = timestamp - startTime;
    let progress = Math.min(elapsed / duration, 1);
    let easedProgress = easeInOutCubic(progress);
    let currentValue = Math.floor(easedProgress * targetValue);

    counterElement.innerText = currentValue;

    // Continue the animation if not yet complete
    if (progress < 1) 
    {
      requestAnimationFrame(updateCounter);
    } else 
    {
      // Ensure the counter displays the final target value
      counterElement.innerText = targetValue;
    }
  }

  // Start the animation
  requestAnimationFrame(updateCounter);
}

// Listen for scroll events to trigger the animation
window.addEventListener("scroll", function() 
{
  counters.forEach((counter, index) => 
  {
    if (isInViewport(counter)) 
    {
      if (!animated[index]) 
      {
        let targetValue = parseInt(originalValues[index], 10);
        counter.innerText = '0'; // Reset to initial value
        animateNumber(counter, targetValue);
        animated[index] = true; // Mark as animated
      }
    } else 
    {
      // Mark the counter as not animated when it goes out of view
      animated[index] = false;
    }
  });
});
