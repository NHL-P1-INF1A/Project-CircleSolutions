<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
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
                    $faqText = array(
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
                    $faqAnswer = array(
                        "Een intranet is een gesloten netwerk dat zich bevindt op een lokaal netwerk. Een intranet functioneert als een website waar alleen geautoriseerde gebruikers toegang toe hebben en wordt over het algemeen gebruikt door organisaties die kennis, interne communicatie en informatie willen delen met hun collega's.",
                        "Het belangrijkste verschil tussen een intranet en het internet is dat het eerste een gesloten netwerk is en het laatste een openbaar netwerk. Kortom, het internet is voor iedereen; een bedrijfsintranet is voor een selecte groep mensen.",
                        "Een intranet is een gesloten netwerk dat is ontworpen om een organisatie in staat te stellen informatie en bedrijfscommunicatie te delen onder haar werknemers. Een extranet lijkt op een intranet, maar staat derden toe om toegang te krijgen, zodat leveranciers of partners volledige of gedeeltelijke toegang kunnen ervaren.",
                        "Intranetsites zijn gesloten interne netwerken voor geautoriseerde leden van een organisatie om informatie te delen. Ze fungeren als een bedrijfsnieuwskanaal, een intern communicatiemiddel en een samenwerkingstool.",
                        "Intranettoepassingen zijn software binnen een intranet, zoals documentpublicatie, communicatietools, uitzendingen, enz. Deze toepassingen stellen de gebruiker in staat om verschillende activiteiten uit te voeren, bijvoorbeeld: een blog publiceren, contact opnemen met een collega of werknemersenquêtes uitvoeren.",
                        "Een intranetportaal is het toegangspunt tot het bedrijfsintranet van de gebruiker. Het is op het intranetportaal waar de gebruiker toegang kan krijgen tot intranettoepassingen, evenals externe apps, en informatie en kennis die binnen het intranet zelf is opgeslagen.", 
                        "Vroegere on-premise bedrijfsintranetten konden zonder internet werken. Maar om verschillende redenen zijn de meeste bedrijfsintranettoepassingen nu gebaseerd in de cloud, dus is een internetverbinding noodzakelijk.",
                        "Ja, een intranet kan worden geopend op verschillende apparaten, ongeacht de locatie - alles wat nodig is, is een internetverbinding. Dit is ideaal voor elke organisatie met verspreide of frontlinie-werknemers die communicatiemiddelen en toegang tot organisatie-informatie nodig hebben, waar ze zich ook bevinden.",
                        "Intranetsoftware biedt allerlei organisatorische oplossingen, kan de betrokkenheid van werknemers verbeteren, de communicatie ondersteunen en de samenwerking vergroten. Moderne intranetten zijn nu grotendeels gebaseerd in de cloud, wat wereldwijde organisaties in staat stelt om snel en gemakkelijk verbinding te maken, kennis te delen en nieuws uit te zenden."   
                    );  #array with all the text that will be shown once the popup box button has been clicked
                    include "./partials/faq-subpartials.php";
                ?>
            </div>
        </main>
    </div>
    <?php
        include "./partials/line.php";

        include "./partials/contact.php";

        include "./partials/footer.php";
    ?>
</body>
<script src="js/faq.js"></script>
<script src="js/navNoScroll.js"></script>
</html>