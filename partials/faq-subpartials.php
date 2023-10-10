<?php
    #$faqtext is the array where the text of the faq popup box is stored in an array
    #$location is the location of the text inside of the $faqtext array
    echo "<div class='faq-popup-box-flex'>
            <p>$faqtext[$location]</p>      
            <button type='button' class='faq-popup-box-collapsible'><img src='../img/arrow-dropdown.svg' alt='&darr;'></button>
        </div>";
?>