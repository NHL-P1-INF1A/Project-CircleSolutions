<?php
    #$faqtext is the array where the text of the faq popup box is stored in an array  
    #$location is the location of the text inside of the $faqtext array
    #With every faq popup box generated, the $location tag goes up by 1, increasing the location inside of the array, making another box with different text
    $location = 0;                                                      #define empty $location array
    for($location = 0; $location < count($faqText); $location++)        #loop until $location has reached count of items in $locations array, then increase $location by 1
    {
        echo    "<div class='faq_popup_box_flex'>
                    <div data-target1='faq_text$location' data-target2='faq_image$location' class='faq_row toggle_button'>
                        <p>$faqText[$location]</p>    
                        <button type='button' class='faq_popup_box_collapsible'><img  class='toggle_image' src='./img/arrow-dropdown.svg' id='faq_image$location' alt='&darr;'></button>
                    </div>
                    <div id='faq_text$location' class='faq_text'><hr> <p>$faqAnswer[$location]</p> </div>
                </div>
                ";
    };
?>