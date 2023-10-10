<div class="container faq-outer-flex"  id="faq">
    <!--Header!-->
    <h4 class="title_section">F.A.Q.</h4>
    <h2 class="sub_title_section">Veel gestelde vragen</h2>
    <a class="faq-leesmeer" href="#">Meer weergeven &gt;</a>
    <!--Flexbox for popup boxes!-->
    <div class="faq-inner-flex">
        <!--PHP function to make the faq popup boxes!-->
        <?php
            $faqtext = array("Wat is een intranet?","Wat is het verschil tussen internet en intranet?","Wat is een intranet en een extranet?");  #array with all the text that will be shown initially
            include "faq-subpartials.php"
        ?>
    </div>
</div>
