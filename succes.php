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
            //vars from form
            $name = filter_input(INPUT_POST, "name");
            //check if it is infact an email
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $message = filter_input(INPUT_POST, "message");
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
                <h2>Bedankt voor je mail, <?php echo $name ?>!</h2>
                <p>Hartelijk dank voor uw interesse in de aanschaf van ons intranet. We willen u graag laten weten dat we uw e-mail met enthousiasme hebben ontvangen. Uw keuze om met ons in zee te gaan wordt zeer gewaardeerd, en we zijn ervan overtuigd dat u geen spijt zult krijgen van deze beslissing.</p>
                <p>Ons team zal zo spoedig mogelijk reageren op uw aanvraag op het volgende e-mail adres; <b><?php echo $email ?></b>. Ook zullen we u voorzien van alle benodigde informatie en begeleiding om uw intranetproject tot een succes te maken.</p>
                <p>Nogmaals bedankt voor uw vertrouwen in ons. We kijken ernaar uit om met u samen te werken en uw intranetbehoeften te vervullen.</p>
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