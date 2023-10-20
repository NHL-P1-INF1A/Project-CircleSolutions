<div class="container" id="reviews">
    <div class="hiddenContainer">
        <div class="column center title_margin">
            <h4 class="title_section">reviews</h4>
            <h2 class="sub_title_section">wat klanten over ons te zeggen hebben</h2>
        </div>
        <div class="row carousel_row">
            <div class="carousel_arrow carousel_arrow_left">
                <img src="./img/Icons/arrow.svg" alt="arrow_left">
            </div>
            <div class="carousel_container">
                <div class="carousel_slides" id="carousel_slides">
                    <?php
                        // Getting the json
                        $jsonData = file_get_contents('./data/reviews.json');
                        // Decode the json file so it can be used in php
                        $reviews = json_decode($jsonData, true);
                        // Filters the bad reviews out
                        $highRatedReviews = array_filter($reviews, function ($review) {
                            return $review['stars'] >= 4;
                        });
                        // All the carousel items 
                        $carouselItems = [];
                        foreach ($highRatedReviews as $review) {
                            $carouselItems[] = [
                                'name' => $review['name'],
                                'avatar' => $review['avatar'],
                                'message' => $review['content'],
                            ];
                        }
                        // Loops through the carousel items and inserts it in the default mockup
                        foreach ($carouselItems as $item) {
                            echo '<div class="carousel_slide"><div class="carousel_content">';
                            echo '<img src="' . $item['avatar'] . '" alt="reviewer">';
                            echo '<h3>' . $item['name'] . '</h3>';
                            echo '<p>&#8220;' . $item['message'] . '&#8221;</p>';
                            echo '</div></div>';
                        }
                    ?>    
                </div>
            </div>
            <div class="carousel_arrow carousel_arrow_right">
                <img src="./img/Icons/arrow.svg" alt="arrow_right">
            </div>
        </div>
        <div class="row">
            <div class="carousel_arrow_mobile carousel_arrow_left mobile_left">
                <img src="./img/Icons/arrow.svg" alt="arrow_left">
            </div> 
            <div class="carousel_dots" id="carousel_dots"> </div> 
            <div class="carousel_arrow_mobile carousel_arrow_right mobile_right">
                <img src="./img/Icons/arrow.svg" alt="arrow_right">
            </div>
        </div>
    </div>
</div>