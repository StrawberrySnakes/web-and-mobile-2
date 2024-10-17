<?php
    $page = "FairFax_Outdoors";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="outdoorspagecontent">
            <picture id="outdoorsimg1" class="mainimg">
                    <img src="../assets/images/indProject/outdoorsMain.jpg" alt="Lake" class="mainimgtag">
            </picture>
            <h1 class="mainname">Venture into The Beautiful Outdoors</h1> <!--Add vert line with borders-->

            <section class="goto">
                <h2>Wanna GO for a Ride?</h2>
                <figure class="OutdoorsBikeGraphic">
                    <img id="bikegragh" src="../assets/images/indProject/outdoorsBikingGraogic.jpg" alt="person biking">
                </figure>
                <div>
                    <p>
                        Fairfax, CA offers an idyllic setting for biking enthusiasts, providing a myriad of scenic trails and pathways that wind through the town and its surrounding natural beauty. With a network of well-maintained routes, bikers can explore the charming streets of Fairfax, venture into the lush Marinwood hills, or tackle challenging mountain trails in the nearby Marin County Open Space. The town's commitment to sustainability and outdoor recreation fosters a bike-friendly community, attracting riders of all skill levels. Whether cruising along the bustling downtown area or immersing in the tranquility of nature, Fairfax invites cyclists to experience the joy of pedaling through its picturesque landscapes.
                    
                    </p>
                    <button onclick="gobiking()" class="gotobtn">Explore Biking Trails &RightArrow;</button>
                </div>
            </section>

            <section class="goto">
                <h2>Wanna Go for a hike?</h2>
                
                <div>
                    <p>
                        Fairfax, CA offers an idyllic setting for biking enthusiasts, providing a myriad of scenic trails and pathways that wind through the town and its surrounding natural beauty. With a network of well-maintained routes, bikers can explore the charming streets of Fairfax, venture into the lush Marinwood hills, or tackle challenging mountain trails in the nearby Marin County Open Space. The town's commitment to sustainability and outdoor recreation fosters a bike-friendly community, attracting riders of all skill levels. Whether cruising along the bustling downtown area or immersing in the tranquility of nature, Fairfax invites cyclists to experience the joy of pedaling through its picturesque landscapes.
                    
                    </p>
                    <button onclick="gohiking()" class="gotobtn">Explore Hiking Trails&RightArrow;</button>
                </div>
                <figure class="OutdoorsHikeGraphic">
                    <img id="hikegragh" src="../assets/images/indProject/outdoorshikinggraghic.jpg" alt="person hiking">
                </figure>

            </section>

            <section id="parks">
                <h2>Local Parks and Playgrounds</h2>
                <figure>
                    <img src="../assets/images/indProject/outdoorsparkgraghic.png" alt="park graphic">
                </figure>
                <section class="s-parks">
                    <div>
                        <h2>Peri Park Playground</h2>
                        <p>Peri Park Playground in Fairfax offers a delightful recreational space for families and children in the heart of the town. Nestled within the scenic Peri Park, this playground features colorful play structures, swings, and open spaces for kids to explore and enjoy. Surrounded by lush greenery and shaded areas, the playground provides a safe and inviting environment for both parents and children. With its vibrant atmosphere and convenient location, Peri Park Playground is a popular destination for locals and visitors seeking outdoor fun and community engagement in Fairfax.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/outdoorsPark.jpg" alt="Peri park graphic">
                    </figure>
                </section>
                <section class="s-parks">
                    <div>
                        <h2>Deer Park</h2>
                        <p>Deer Park in Fairfax, California, is a serene natural retreat nestled in the heart of Marin County. This picturesque park offers a peaceful escape with its scenic trails, lush greenery, and tranquil ambiance. Visitors can explore winding paths that lead through wooded areas, providing a perfect setting for leisurely walks or invigorating hikes. With its well-maintained grounds and opportunities for birdwatching, Deer Park offers residents and visitors alike a serene sanctuary to connect with nature and enjoy the quiet beauty of Fairfax.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/outdoorsparks5.jpg" alt="Deer park graphic">
                    </figure>
                </section>
                <section class="s-parks">
                    <div>
                        <h2>Bolinas Park</h2>
                        <p>Bolinas park is a beautiful places to spend time with friends or family. Located downtown and easily assessable from many stores and restaurants makes this the perfect place to sit down to have lunch or take a break from the stores. There are also frequent events happening in the park such as yoga classes, farmers markets and more.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/outdoorsPark3.jpeg" alt="Bolinas park graphic">
                    </figure>
                </section>
                <section class="s-parks">
                    <div>
                        <h2>Baseball Field</h2>
                        <p>Fairfax's local baseball field is a lively community space, perfect for both sports enthusiasts and casual visitors. Whether you're watching a game, having a picnic with friends, or enjoying recreational activities, the field offers a versatile and welcoming environment. With its scenic surroundings, it's an ideal spot for people of all ages to gather, fostering a sense of community and outdoor enjoyment.</p>
                    </div>
                    <figure>
                        <img src="../assets/images/indProject/outdoorsPark4.jpg" alt="Local Baseball fields graphic">
                    </figure>
                </section>
            </section>
        <!-- Php here -->
        <?php
            echo "<p class='path'>outdoors</p>";
            include($path . "inc/footer.php");
        ?>