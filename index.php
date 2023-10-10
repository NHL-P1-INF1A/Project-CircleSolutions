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

    // include "partials/navbar.php";

    include "partials/header.php";

    include "partials/about-us.php";

    include "partials/values.php";

    include "partials/services.php";

    include "partials/faq.php";

    include "partials/reviews.php";

    include "partials/contact.php";

    include "partials/footer.php";

    ?>
</body>

<script>
    document.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 0) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    })
</script>

</html>