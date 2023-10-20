<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
</head>
<body>
    <?php
        include "partials/navbar.php";
    ?>
    <div class="faq_container">
        <main class="faq_outer_flex container">
            <!--Header!-->
            <h4 class="title_section">FAQ</h4>
            <h2 class="sub_title_section">Veel gestelde vragen</h2>
            <div class="faq_page_breakline"></div>
            <!--Flexbox for popup boxes!-->
            <div class="faq_inner_flex">
                <!--PHP function to make the faq popup boxes!-->
                <?php
                    $maxItems = 9;
                    include "partials/faq-subpartials.php";
                ?>
            </div>
        </main>
    </div>
    <?php
        include "partials/line.php";

        include "partials/contact.php";

        include "partials/footer.php";
    ?>
    <script src="./js/faq.js"></script>
    <script src="./js/navNoScroll.js"></script>
    <script src="./js/contact.js"></script>  
    <script src="./js/darkmode.js"></script>  
</body>
</html>