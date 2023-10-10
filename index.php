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
document.getElementById('toggle-button').addEventListener('click', function() {
    var textElement = document.getElementById('faq-text');
    if (textElement.style.display === 'none' || textElement.style.display === '') {
        textElement.style.display = 'block';
    } else {
        textElement.style.display = 'none';
    }
});
</script>
</html>