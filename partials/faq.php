<div class="faq_outer_flex"  id="faq">
    <!--Header!-->
    <h4 class="title_section">F.A.Q.</h4>
    <h2 class="sub_title_section">Veel gestelde vragen</h2>
    <a class="faq_leesmeer" href="faq-page.php">Meer weergeven &gt;</a>
    <!--Flexbox for popup boxes!-->
    <div class="faq_inner_flex">
        <!--PHP function to make the faq popup boxes!-->
        <?php
            $faqText = 
            array(
                "Wat is een intranet?",
                "Wat is het verschil tussen internet en intranet?",
                "Wat is een intranet en een extranet?"
            ); #array with all the text that will be shown initially
            $faqAnswer = 
            array(
                "Een intranet is een gesloten netwerk dat zich bevindt op een lokaal netwerk. Een intranet functioneert als een website waar alleen geautoriseerde gebruikers toegang toe hebben en wordt over het algemeen gebruikt door organisaties die kennis, interne communicatie en informatie willen delen met hun collega's.",
                "Het belangrijkste verschil tussen een intranet en het internet is dat het eerste een gesloten netwerk is en het laatste een openbaar netwerk. Kortom, het internet is voor iedereen; een bedrijfsintranet is voor een selecte groep mensen.",
                "Een intranet is een gesloten netwerk dat is ontworpen om een organisatie in staat te stellen informatie en bedrijfscommunicatie te delen onder haar werknemers. Een extranet lijkt op een intranet, maar staat derden toe om toegang te krijgen, zodat leveranciers of partners volledige of gedeeltelijke toegang kunnen ervaren."
            ); #array with all the text that will be shown once the popup box button has been clicked
            include "faq-subpartials.php";
        ?>
    </div>
</div>