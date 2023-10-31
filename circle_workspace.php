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
    <?php include "partials/navbar.php"; ?>

    <section id="circle_workspace_title" class="container">
        <div class="cirle_workspace_title_content">
            <h2 class="sub_title_section">circle workspace</h2>
            <p>Met circle workspace kun je snel een werkplek maken die past bij je rol en voorwaarden. Alles wat je nodig hebt, zoals informatie van apps en documenten, is hier te vinden. Het maakt werken online en offline mogelijk, op elk apparaat. Al je documenten van Office 365, de fileserver, OneDrive en SharePoint zijn hier gebundeld voor overzichtelijkheid.</p>
        </div>
    </section>

    <?php include "partials/line.php";?>

    <section id="circle_workspace_information" class="container">
        <div class="circle_workspace_information_content">
            <div class="circle_workspace_information_title">
                <h4 class="title_section">informatie</h4>
                <h2 class="sub_title_section">over onze pakketen</h2>
            </div>

            <div class="circle_workspace_information_boxes">
                <div class="circle_workspace_information_box">
                    <img src="./img/Icons/grid.svg" alt="Headphones">
                    <h3>App-beheer</h3>
                    <p>Creëer in enkele minuten een werkplek. We willen het werk ook gemakkelijk maken voor werkplekbeheerders. We maken het mogelijk om een werkplek te creëren op basis van rollen en voorwaarden die al uw huidige en toekomstige technologieën binnen één werkplek combineren.</p>
                </div>
                
                <div class="circle_workspace_information_box">
                    <img src="./img/Icons/document.svg" alt="Line">
                    <h3>Communicatie en informatie</h3>
                    <p>Toon informatie van toepassingen direct in Circle Workspace. In één oogopslag ziet u al uw ongelezen e-mails, afspraken, nieuws, recent bewerkte documenten en meer.</p>
                </div>

                <div class="circle_workspace_information_box">
                    <img src="./img/Icons/books.svg" alt="">
                    <h3>Documentbeheer</h3>
                    <p>Breng alle documenten samen in één online werkplek. Zo kunt u online en offline werken vanaf elk apparaat. De documenten-app bundelt en brengt structuur aan in Office 365, de bestandsserver, OneDrive en SharePoint.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include "partials/line.php";?>

    <section id="circle_workspace_pricing" class="container">
        <div class="circle_workspace_pricing_content">
            <div class="circle_workspace_pricing_title">
                <h4 class="title_section">prijzen</h4>
                <h2 class="sub_title_section">onze tarieven</h2>
            </div>

            <div class="circle_workspace_pricing_boxes">
                <div class="circle_workspace_pricing_box">
                    <div class="circle_workspace_pricing_box_1">
                        <p>Voor 1-50 Gebruikers</p>
                        <img src="./img/Icons/User.svg" alt="">
                    </div>
                    <div class="circle_workspace_pricing_box_2">
                        <p><span>€140 </span>/maandelijks</p>
                    </div>
                </div>

                <div class="circle_workspace_pricing_box">
                    <div class="circle_workspace_pricing_box_1">
                        <p>Voor 51-500 Gebruikers</p>
                        <img src="./img/Icons/Users.svg" alt="">
                    </div>
                    <div class="circle_workspace_pricing_box_2">
                        <p><span>€760 </span>/maandelijks</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php 
    include "partials/line.php";
    include "partials/contact.php";
    include "partials/footer.php"; 
    ?>

    <script src="./js/navNoScroll.js"></script>
    <script src="./js/darkmode.js"></script>
    <script src="./js/contact.js"></script>
</body>
</html>
