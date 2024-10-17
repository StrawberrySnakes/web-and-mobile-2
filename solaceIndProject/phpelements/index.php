<?php
$page = "FairFax_Homepage";
$path="";
include($path . "inc/header.php");
include($path . "inc/nav.php");
?>
        <main id="homepagecontent">
            <section>
                <figure>
                    <img src="../assets/images/indProject/homepage1.jpeg" alt="Fairfax Picture" class="townMain">
                </figure>
                <h1>Explore the Town of Fairfax California</h1>
            </section>
            <p>
                Welcome to Fairfax, a charming and vibrant town nestled in the heart of Marin County, California. 
                Known for its unique blend of natural beauty, community spirit, and rich cultural offerings, Fairfax invites you to explore its diverse landscape and welcoming atmosphere. 
                With a backdrop of lush hills, redwood forests, and a lively town center, Fairfax captivates visitors with its small-town charm and laid-back ambiance.
                 Whether you're strolling through the bustling streets, enjoying outdoor activities in the surrounding open spaces, or immersing yourself in the local arts and music scene, Fairfax promises an unforgettable experience for residents and visitors alike.
                 Join us as we delve into the dynamic culture, scenic landscapes, and vibrant community that make Fairfax a truly special destination in Northern California.
            </p>

            <section id="homemap">
                <h2> Take a look around</h2>
                <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25155.356696858886!2d-122.59854099999998!3d37.9906725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808596575807f881%3A0x33e0be844a821450!2sFairfax%2C%20CA%2094930!5e0!3m2!1sen!2sus!4v1708832169273!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
            </section>

            <section id="homeslide">
                <h2>What does Fairfax have to Offer?</h2>
                <div id="slideshow">
                    <a id="imageLink" href="index.php">
                        <img id="image" src="../assets/images/indProject/slide.jpg" alt="Fairfax Picture">
                        
                    </a> 
                    <div class="overlay"></div>               
                </div>
            </section>
        </main>

        <!-- php here -->
        <?php
            echo "<p class='path'>home</p>";
            include($path . "inc/footer.php");
        ?>

        