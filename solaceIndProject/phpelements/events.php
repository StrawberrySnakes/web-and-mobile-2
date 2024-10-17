<?php
    $page = "FairFax_Events";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="eventspagecontent">
            <picture id="outdoorsimg1" class="mainimg">
                    <!-- <source media="(max-width: 650px)" srcset="images/history1_img_2.jpg"> -->
                    <img src="../assets/images/indProject/eventsmain.jpeg" alt="events" class="mainimgtag">
            </picture>
            <h1 class="mainname">Town Events</h1> <!--Add vert line with borders-->

            <section id="eventsmain">
                <h2>Annual Town Fairs, Festivals, and More!</h2>
                <figure>
                    <img src="../assets/images/indProject/eventsgraphic.jpg" alt="events graphic">
                </figure>
                <section class="events" id="fair">
                    <div>
                        <h2>Fairfax Craft Fair</h2>
                        <p>
                            The Fairfax Craft Fair is an annual showcase of artistic talent and creativity, attracting both local and regional artisans. This carefully curated event offers a diverse array of handmade crafts, unique artworks, and one-of-a-kind creations. Visitors can explore the stalls to discover exquisite jewelry, textiles, ceramics, and more, all crafted with precision and passion. The Fairfax Craft Fair provides a wonderful opportunity for patrons to support local artists while immersing themselves in the artistic ambiance of Fairfax, California.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/eventscraft1.jpg" alt="Local Craft Fair">
                    </figure>
                </section>
                <section class="events" id="festival">
                    <div>
                        <h2>Fairfax Festival</h2>
                        <p>The Fairfax Festival is an annual celebration that encapsulates the town's vibrant spirit and diverse community. This lively event features a range of activities, including live music performances, local artisanal markets, and a variety of food vendors. With a strong emphasis on community engagement, the Fairfax Festival brings residents and visitors together for a weekend of festivities, fostering a sense of unity and celebration. The event typically showcases the town's unique culture, making it a delightful and memorable experience for those looking to immerse themselves in the local charm of Fairfax, California.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/eventsfestival3.jpg" alt="Fairfax Festival Parade Image">
                    </figure>
                </section>
                <section class="events" id="halloween">
                    <div>
                        <h2>Halloween Parade and Costume Contest</h2>
                        <p>The Halloween Parade and Costume Contest is a vibrant and community-driven celebration that takes place annually. Participants from all ages come together to showcase their creativity through elaborate and imaginative costumes. The event features a lively parade that winds through the charming streets of Fairfax, providing a festive and inclusive atmosphere for both participants and spectators. The Costume Contest serves as a highlight, offering participants the chance to compete and be recognized for their exceptional and unique Halloween attire.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/eventshal1.jpg" alt="Kids in Consumes">
                    </figure>
                </section>
                <section class="events" id="farmers">
                    <div>
                        <h2>Farmers Market</h2>
                        <p>Available May through October every Wednesday from 4pm-8pm. The Fairfax Farmers Market is a vibrant community gathering showcasing locally sourced and fresh produce, artisanal goods, and handmade crafts. Held regularly, this market provides residents and visitors alike with the opportunity to support local farmers and businesses while enjoying a diverse range of high-quality, seasonal products. The lively atmosphere, coupled with the town's commitment to sustainability, makes the Fairfax Farmers Market a cherished and bustling hub for those seeking fresh, local, and organic offerings.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/eventsfarmers2.jpg" alt="Image of Farmers Market">
                    </figure>
                </section>
            </section>

        <!-- php here -->
        <?php
            echo "<p class='path'>events</p>";
            include($path . "inc/footer.php");
        ?>