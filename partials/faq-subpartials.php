<?php
    // Getting the json
    $jsonData = file_get_contents('./data/faq.json');
    // Decode the json file so it can be used in php
    $faqs = json_decode($jsonData, true);
    $location = 0;
    foreach($faqs as $faq)          //put json items into the $faq array
    {
        if($maxItems > $location)   //If the max items is more than the amount of printed items, stop making more items
        {
            echo    '<div class="faq_popup_box_flex">
                        <div data-target1="faq_text'. $location . '" data-target2="faq_image'. $location . '" class="faq_row toggle_button">
                            <p>' . $faq["question"] . '</p>    
                            <button type="button" class="faq_popup_box_collapsible"><img  class="toggle_image faq_shake" src="./img/arrow-dropdown.svg" id="faq_image'. $location . '" alt="&darr;"></button>
                        </div>
                        <div id="faq_text'. $location . '" class="faq_text"><hr> <p>' . $faq["answer"] . '</p> </div>
                    </div>';
            $location++;  
        }
        else 
        {
            break;
        };
    };
?>