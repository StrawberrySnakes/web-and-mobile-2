<?php
    $page = "FairFax_Dinner";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="dinnerpagecontent">

            <section class="dnd" id="dinner">
                <div>
                    <img src="../assets/images/indProject/dinnergraphic.png" alt="Dinner table graphic">
                    <h2>Come have some Dinner</h2>
                </div>
                <section>
                    <div>
                        <h2>Fradelizios</h2>
                        <p>Fradelizios is a charming restaurant that effortlessly combines the rich flavors of Italian and Mediterranean cuisines. With a commitment to using fresh, high-quality ingredients, the restaurant offers a diverse menu that caters to a range of tastes and preferences. Guests can expect a warm and inviting ambiance, complemented by a friendly staff dedicated to providing a memorable dining experience. Whether indulging in traditional Italian classics or exploring inventive Mediterranean dishes, Fradelizios promises a culinary journey that captures the essence of both regions.</p>
                    </div>
                    <img src="../assets/images/indProject/dinnerfradelizios.jpg" alt="Fradelizios">
                </section>
                <section>
                    <div>
                        <h2>My Thai</h2>
                        <p>My Thai beckons diners to embark on a culinary journey through the vibrant and flavorful world of Thai cuisine. With its welcoming ambiance and attentive service, the restaurant offers an authentic taste of Thailand in the heart of Fairfax. From traditional Pad Thai to fragrant curries, My Thai prides itself on using fresh ingredients and traditional recipes to create an immersive dining experience. Whether seeking familiar favorites or exploring new culinary delights, patrons can expect a delightful blend of authenticity and innovation at My Thai.</p>
                    </div>
                    <img src="../assets/images/indProject/dinnerthai.jpg" alt="My Thai">
                </section>
                <section>
                    <div>
                        <h2>Village Sake</h2>
                        <p>Village Sake stands out as a Japanese izakaya-inspired gem, offering an exquisite blend of traditional and contemporary flavors. With its intimate setting and modern aesthetic, the restaurant provides a unique dining experience where patrons can savor a variety of small plates, sushi, and delectable entrees. Village Sake is known for its commitment to using high-quality, locally sourced ingredients to craft dishes that showcase the authenticity of Japanese cuisine. From the artfully presented sushi rolls to the flavorful robata grill offerings, the restaurant invites guests on a culinary adventure through the diverse and nuanced world of Japanese flavors.</p>
                    </div>
                    <img src="../assets/images/indProject/dinnersake.jpg" alt="Village Sake">
                </section>
            </section>

            <section class="dnd" id="drinks">
                <div>
                    <img src="../assets/images/indProject/dinnergraghic2.jpg" alt="Colorful Drinks graphic">
                    <h2>Come have some Drinks</h2>
                </div>
                <section>
                    <img src="../assets/images/indProject/dinnergestalt.jpg" alt="Gestalt">
                    <div>
                        <h2>Gestalt</h2>
                        <p>Gestalt in Fairfax seamlessly blends a warm pub ambiance with a delectable menu that caters to diverse tastes. This inviting eatery offers an array of creative dishes, from hearty pub fare to innovative twists on traditional favorites. With a focus on local and seasonal ingredients, Gestalt provides a fresh and flavorful dining experience that resonates with the town's community spirit. Whether enjoying a casual meal or gathering for drinks with friends, patrons can expect a welcoming atmosphere and a menu that reflects both comfort and culinary ingenuity.</p>
                    </div>
                </section>
                <section>
                    <img src="../assets/images/indProject/dinnernaves.jpg" alt="Naves Bar and Grill">
                    <div>
                        <h2>Naves Bar and Grill</h2>
                        <p>
                            Naves Bar and Grill is a vibrant culinary destination that seamlessly combines the laid-back atmosphere of a local bar with a diverse menu of mouthwatering dishes. Boasting a welcoming ambiance and a menu that spans from classic pub grub to inventive culinary creations, Naves Bar and Grill caters to a broad range of palates. Known for its lively social scene, this establishment is a popular choice for both casual gatherings and intimate dinners. With a commitment to using fresh, quality ingredients, Naves Bar and Grill offers a delightful fusion of comfort and culinary innovation in the heart of Fairfax.</p>
                    </div>
                </section>
                <section>
                    <img src="../assets/images/indProject/dinnerperis.jpg" alt="Peri's">
                    <div>
                        <h2>Peri's</h2>
                        <p>Peri's is a vibrant cultural hub where the fusion of a lively pub atmosphere and live music creates an unforgettable dining experience. Boasting a diverse menu, Peri's caters to a spectrum of tastes, from classic comfort food to innovative culinary delights. With its commitment to sourcing fresh, local ingredients, the restaurant showcases a menu that reflects both authenticity and creativity. Whether you're there for the music, the food, or the lively social scene, Peri's is a cherished destination where great flavors and good times come together in the heart of Fairfax.</p>
                    </div>
                </section>
            </section>
        <!-- php here -->
        <?php
            echo "<p class='path'>food-dinner</p>";
            include($path . "inc/footer.php");
        ?>