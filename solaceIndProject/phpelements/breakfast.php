<?php
    $page = "FairFax_BreakfastAndLunch";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="breakfastpagecontent">

            <section class="bandl" id="breakfast">
                <!-- <figure>
                    <img src="../assets/images/indProject/breakfastgraphic.png" alt="breakfast plate graphic">
                </figure> -->
                <div>
                    <img src="../assets/images/indProject/breakfastgraphic.png" alt="">
                    <h2>Come have some Breakfast</h2>
                    
                </div>
                <section>
                    <div>
                        <h2>The Humming Bird</h2>
                        <p> The Humming Bird is a restaurant that transports diners to the vibrant streets of New Orleans with its Mardi Gras theme. This intimate restaurant not only offers a diverse menu featuring globally inspired flavors but also captures the lively spirit of the famed New Orleans celebration. Known for its commitment to sustainability and locally sourced ingredients, The Humming Bird provides a unique dining experience where patrons can indulge in a rich tapestry of dishes, all while immersed in the festive atmosphere reminiscent of Mardi Gras.</p>
                    </div>
                    <img src="../assets/images/indProject/breakfasthumming.jpg" alt="Humming Bird">
                </section>
                <section>
                    <div>
                        <h2>Bearfoot Cafe</h2>
                        <p>Bearfoot Cafe stands out as a cozy and eclectic dining destination, offering a warm atmosphere and a menu that celebrates locally sourced, seasonal ingredients. This charming restaurant combines culinary innovation with a commitment to sustainability, crafting dishes that reflect both creativity and environmental consciousness. BearFoot's diverse menu caters to various tastes, featuring everything from hearty comfort food to inventive and contemporary culinary delights.</p>
                    </div>
                    <img src="../assets/images/indProject/breakfastbear.jpg" alt="Bear Foot">
                </section>
                <section>
                    <div>
                        <h2>The Coffee Roastary</h2>
                        <p>The Coffee Roastery beckons with the aromatic allure of freshly roasted beans, creating an inviting space for coffee enthusiasts. Far beyond a typical coffee shop, this local spot is a testament to quality and community, offering a diverse range of specialty brews crafted with precision. With its commitment to delivering a rich and nuanced coffee experience, The Coffee Roastery stands as a beloved destination for those seeking exceptional flavors and a warm communal atmosphere in Fairfax.</p>
                    </div>
                    <img src="../assets/images/indProject/breakfastcoffee.jpg" alt="Coffee Roastary">
                </section>
            </section>

            <section class="bandl" id="lunch">
                <div>
                    <img src="../assets/images/indProject/lunchgraghic.png" alt="Sandwich">
                    <h2>Come have some Lunch</h2>
                </div>
                <section>
                    <img src="../assets/images/indProject/lunchlotus.jpg" alt="Lotus Cafe">
                    <div>
                        <h2>Lotus Cafe</h2>
                        <p>Lotus Cafe in Fairfax, California, is your go-to spot for authentic Indian cuisine. With a menu that blends traditional and modern dishes, the restaurant offers a straightforward yet flavorful experience. Known for using fresh, quality ingredients, Lotus Cafe provides a taste of Indian hospitality with classic curries, tandoori specialties, and creative vegetarian options. If you're craving genuine Indian flavors in a casual setting, Lotus Cafe has you covered.</p>
                    </div>
                </section>
                <section>
                    <img src="../assets/images/indProject/lunchmas.jpg" alt="Mas Masa">
                    <div>
                        <h2>Mas Masa</h2>
                        <p>Mas Masa in Fairfax, California, is a dining destination that elevates Mexican cuisine with a modern twist. With a menu inspired by traditional Mexican flavors, the restaurant combines authenticity with innovation, offering a diverse selection of dishes that cater to various tastes. Mas Masa prides itself on using high-quality, locally sourced ingredients, ensuring a fresh and flavorful experience for patrons.</p>
                    </div>
                </section>
                <section>
                    <img src="../assets/images/indProject/lunchstill.jpg" alt="Still Water">
                    <div>
                        <h2>Still Water</h2>
                        <p>Still Water stands as a serene dining spot that marries exquisite cuisine with a tranquil ambiance. Known for its commitment to sustainable and locally sourced ingredients, this restaurant offers a menu that reflects a blend of culinary innovation and mindful dining. Whether indulging in carefully crafted dishes or sipping on artisanal cocktails, patrons at Still Water can enjoy a peaceful retreat from the bustle of everyday life. </p>
                    </div>
                </section>
            </section>

        <!-- php here -->
        <?php
            echo "<p class='path'>food-breakfast_lunch</p>";
            include($path . "inc/footer.php");
        ?>