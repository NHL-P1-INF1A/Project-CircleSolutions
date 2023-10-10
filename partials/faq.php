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
            <!--popup box 1!-->
            <?php
                $location = 0;
                $faqtext = array("Hello, World!","Hello, World!","Hello, World!");
                for($location = 0; $location < count($faqtext); $location++)
                {
                    include "faq-subpartials.php";
                };
            ?>
        </div>
    </main>
</body>
</html>