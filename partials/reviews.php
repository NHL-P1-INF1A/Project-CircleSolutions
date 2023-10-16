
<div class="container" id="reviews">
    <div class="row column title_margin">
        <h1 class="title_section">reviews</h1>
        <h2 class="sub_title_section">wat klanten over ons te zeggen hebben</h2>
    </div>
    <div class="row carousel_row">
        <div class="carousel_arrow carousel_arrow_left" id="prev_button"><img src="./img/Icons/arrow.svg" alt="arrow_left"></div>
        <div class="carousel_container">
            <div class="carousel_slides" id="carousel_slides">
                <?php
                    // all the carousel items 
                    $carouselItems = [
                        [
                            'name' => 'John Doe',
                            'title' => 'Customer',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Client',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Customer',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Client',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Customer',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Client',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Customer',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                        [
                            'name' => 'John Doe',
                            'title' => 'Client',
                            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, explicabo nisi? Neque blanditiis a odio corrupti molestias iusto pariatur.'
                        ],
                    ];
                    // loops through the carousel items and inserts it in the default mockup
                    foreach ($carouselItems as $item) {
                        echo '<div class="carousel_slide" id="carousel_slide"><div class="carousel_content">';
                        echo '<img src="./img/reviewer.png" alt="reviewer">';
                        echo '<h3>' . $item['name'] . '</h3>';
                        echo '<h5>' . $item['title'] . '</h5>';
                        echo '<p>&#8220;' . $item['message'] . '&#8221;</p>';
                        echo '</div></div>';
                    }
                ?>    
            </div>
        </div>
        <div class="carousel_arrow carousel_arrow_right" id="next_button"><img src="./img/Icons/arrow.svg" alt="arrow_right"></div>
    </div>
    <div class="row">
        <div class="carousel_dots" id="carouselDots"></div>
    </div>
</div>