// Get all elements with the 'toggle-button' class because we need to target multiple buttons
var faqs = document.querySelectorAll('.toggle_button');

// Loop through each button and add a click event listener
faqs.forEach(function(faq) {
    faq.addEventListener('click', function() {
        // Get the target element ID from the data attribute
        var targetId = this.getAttribute('data-target1');
        var textElement = document.getElementById(targetId);
        var targetImg = this.getAttribute('data-target2');
        var imgElement = document.getElementById(targetImg);
        console.log(targetId);
        console.log(targetImg);

        // Toggle the display of the target element from none to block
        if (textElement.style.display === 'none' || textElement.style.display === '') {
            textElement.style.display = 'block';
            // textElement.style.transform = 'rotate(180deg)'; 
        } else {
            textElement.style.display = 'none';
            // textElement.style.transform = 'rotate(0deg)';
        };
        if (imgElement.style.transform === 'rotate(0deg)' || imgElement.style.transform === '') {
            imgElement.style.transform = 'rotate(180deg)'; 
            imgElement.classList.remove("faq_shake");
        } else {
            imgElement.style.transform = 'rotate(0deg)';
            imgElement.classList.add("faq_shake");
        }
    });
});

