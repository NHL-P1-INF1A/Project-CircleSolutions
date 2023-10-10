// Get all elements with the 'toggle-button' class because we need to target multiple buttons
var buttons = document.querySelectorAll('.toggle_button');

// Loop through each button and add a click event listener
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Get the target element ID from the data attribute
        var targetId = this.getAttribute('data-target');
        var textElement = document.getElementById(targetId);

        // Toggle the display of the target element from none to block
        if (textElement.style.display === 'none' || textElement.style.display === '') {
            textElement.style.display = 'block';
        } else {
            textElement.style.display = 'none';
        }
    });
});