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
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        }
    ?>
    <section id="succes_title" class="container">
        <div class="succes_content">
            <div class="succes_title_content">
                <img src="./img/Icons/succes.svg" alt="smiley">
                <h2>Gelukt!</h2>
            </div>
            <div class="succes_message">
                <img src="./img/Icons/check.svg" alt="check">
                <h2>Bedankt voor je aanmelding!</h2>
                <p>Bedankt voor het aanmelden voor onze nieuwsbrief. We zijn blij dat je geïnteresseerd bent in onze updates.</p>
                <p>We sturen de nieuwsbrief naar het volgende e-mailadres: <b><?php echo $email ?></b>.  Je krijgt binnenkort nieuws en updates van ons.</p>
                <p>Als u vragen heeft, horen we het graag.</p>
                <p>Met vriendelijke groet,</p>
                <p>Het team van circle solutions</p>
            </div>
        </div>
    </section>
    <?php include "partials/footer.php" ?>
    <script src="./js/navNoScroll.js"></script>
    <script src="./js/darkmode.js"></script>  
</body>
</html>