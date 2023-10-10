<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Soutions - FAQ</title>
    <link href="../css/styles_faq.css" rel="stylesheet">
</head>
<body>
    <?php
        include "../partials/header.php";
    ?>
    <main class="faq-outer-flex">
        <!--Header!-->
        <h1>F.A.Q.</h1>
        <h2>Veel gestelde vragen</h2>
        <div class="faq-page-breakline"></div>
        <!--Flexbox for popup boxes!-->
        <div class="faq-inner-flex">
            <!--PHP function to make the faq popup boxes!-->
            <?php
                $faqtext = array(
                    "Wat is een intranet?",
                    "Wat is het verschil tussen internet en intranet?",
                    "Wat is een intranet en een extranet?",
                    "Wat zijn intranetwebsites?",
                    "Wat zijn intranet toepassingen?",
                    "Wat is een intranet portaal?",
                    "Kan een intranet werken zonder internet?",
                    "Kan een intranet op afstand worden geopend?",
                    "Wat doet een intranet?"
                );  #array with all the text that will be shown initially
                include "faq-subpartials.php";
            ?>
        </div>
    </main>
    <?php
        include "../partials/contact.php";
    ?>
    <?php
        include "../partials/footer.php";
    ?>
</body>
</html>