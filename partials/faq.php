<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/styles_faq.css" rel="stylesheet">
</head>
<body>
    <main  id="faq-outer-flex">
        <!--Header!-->
        <h1>F.A.Q.</h1>
        <h2>Veel gestelde vragen</h2>
        <a id="faq-leesmeer" href="#">Meer weergeven &gt;</a>
        <!--Flexbox for popup boxes!-->
        <div id="faq-inner-flex">
            <!--PHP function to make the faq popup boxes!-->
            <?php
                $faqtext = array("Wat is een intranet?","Wat is het verschil tussen internet en intranet?","Wat is een intranet en een extranet?");  #array with all the text that will be shown initially
                include "faq-subpartials.php"
            ?>
        </div>
    </main>
</body>
</html>