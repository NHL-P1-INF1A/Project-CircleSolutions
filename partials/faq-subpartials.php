<?php
    #$faqtext is the array where the text of the faq popup box is stored in an array
    #$location is the location of the text inside of the $faqtext array
    #With every faq popup box generated, the $location tag goes up by 1, increasing the location inside of the array, making another box with different text
    $location = 0;                                                      #define empty $location array
    for($location = 0; $location < count($faqtext); $location++)        #loop until $location has reached count of items in $locations array, then increase $location by 1
    {
        echo    "<div class='faq-popup-box-flex'>
                    <p>$faqtext[$location]</p>
                    <p id='faq-text' style='display:none;'>This is the hidden text that will appear when the button is clicked.</p>      
                    <button type='button' class='faq-popup-box-collapsible' id='toggle-button'><img src='./img/arrow-dropdown.svg' alt='&darr;'></button>
                </div>";
    };
?>
