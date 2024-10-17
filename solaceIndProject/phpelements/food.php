<?php
    $page = "FairFax_Food";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="foodpagecontent">
            <picture id="foodimg1" class="mainimg">
                    <!-- <source media="(max-width: 650px)" srcset="images/history1_img_2.jpg"> -->
                    <img src="../assets/images/indProject/foodmain.jpeg" alt="food" class="mainimgtag">
            </picture>
            <h1 class="mainname">Our Unique Cuisine</h1> <!--Add vert line with borders-->

            <section class="foodintro">
                <figure>
                    <img src="../assets/images/indProject/foodgraphic.jpg" alt="food graphic">
                </figure>
                <div>
                    <h2>What does Fairfax have to offer?</h2>
                    <p>Fairfax, CA, boasts a diverse and vibrant culinary scene with a variety of restaurants catering to different tastes. From cozy cafes to eclectic eateries, the town offers a range of dining options. Locally-owned restaurants often showcase a commitment to fresh, locally-sourced ingredients, providing residents and visitors alike with delicious and unique dining experiences. Whether you're in the mood for international cuisine, comfort food, or health-conscious dishes, Fairfax's restaurants contribute to the town's charm and offer a delightful array of choices for food enthusiasts.</p>
                </div>
                
            </section>

            <div id="foodgoto">
                <div>
                    <button onclick="gobreakfast()" id="foodgotobtn1" class="foodgo"></button>
                    <p>Go get Breakfast and Lunch&RightArrow;</p>
                </div>

                <div>
                    <button onclick="godinner()" id="foodgotobtn2" class="foodgo"></button>
                    <p>Go get Dinner&RightArrow;</p>
                </div>

            </div>

        <!-- php here -->
        <?php
            echo "<p class='path'>food</p>";
            include($path . "inc/footer.php");
        ?>