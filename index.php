<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cirle Solutions</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>
    <?php

    include "partials/navbar.php";

    include "partials/header.php";

    include "partials/about-us.php";

    include "partials/line.php";
    
    include "partials/values.php";

    include "partials/line.php";

    include "partials/services.php";

    include "partials/line.php";

    include "partials/faq.php";

    include "partials/line.php";

    include "partials/reviews.php";

    include "partials/line.php";

    include "partials/contact.php";

    include "partials/footer.php";

    ?>
</body>
<script src="js/carousel.js"></script>
<script>
// Get all elements with the 'toggle-button' class
var buttons = document.querySelectorAll('.toggle_button');

// Loop through each button and add a click event listener
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Get the target element ID from the data attribute
        var targetId = this.getAttribute('data-target');
        var textElement = document.getElementById(targetId);

        // Toggle the display of the target element
        if (textElement.style.display === 'none' || textElement.style.display === '') {
            textElement.style.display = 'block';
        } else {
            textElement.style.display = 'none';
        }
    });
});
</script>
</html>