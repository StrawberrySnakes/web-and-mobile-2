<?php
    $page = "FairFax_Biking";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>

<style>

</style>
        <main id="bikingpagecontent">
            <div>
                <img class="bikingicon" src="../assets/images/indProject/bikinggraphic1.png" alt="people biking">
                <h2>Biking in Fairfax</h2>
                <img class="bikingicon" src="../assets/images/indProject/bikinggraphic2.png" alt="people biking">
            </div>

            <section id="roadbiking" class="biking">
                <h2>Road Biking Trails</h2>
                <section>
                    <img src="../assets/images/indProject/bikingroad1.jpeg" alt="">
                    <div>
                        <h2>Fairfax to Mt Tam Loop</h2>
                        <ul>
                            <li>Length: 37.7mi</li>
                            <li>Type: Loop</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/bikingroadmap1.png" alt="">
                </section>
                <section>
                    <img src="../assets/images/indProject/bikingroad2.png" alt="">
                    <div>
                        <h2>Marin 48 miler</h2>
                        <ul>
                            <li>Length: 48.2mi</li>
                            <li>Type: Loop</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/bikingroadmap2.png" alt="">
                </section>
                <section>
                    <img src="../assets/images/indProject/bikingroad3.jpg" alt="">
                    <div>
                        <h2>Through Point Reyes, San Rafael, Hicks Mountain Loop</h2>
                        <ul>
                            <li>Length: 67.1mi</li>
                            <li>Type: Loop</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/bikingroadmap3.png" alt="">
                </section>
            </section>

            <section id="mountainbiking" class="biking">
                <h2>Mountain Biking Trails</h2>
                <section>
                    <img src="../assets/images/indProject/bikingmountain1.jpg" alt="">
                    <div>
                        <h2>Carson Falls Trail</h2>
                        <ul>
                            <li>Length: 3.9mi</li>
                            <li>Type: Out &amp; Back</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/bikingmountainmap1.png" alt="">
                </section>
                <section>
                    <img src="../assets/images/indProject/bikingmountain2.jpg" alt="">
                    <div>
                        <h2>Bay Area Ridge Trail</h2>
                        <ul>
                            <li>Length: 4.0</li>
                            <li>Type: Point to Point</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/bikingmountainmap2.png" alt="">
                </section>
                <section>
                    <img src="../assets/images/indProject/bikingmountain3.jpeg" alt="">
                    <div>
                        <h2>Iron Springs, Goldman, Serpentine, B-17, Endo and Broken Dam Trail Loop</h2>
                        <ul>
                            <li>Length: 8.7mi</li>
                            <li>Type: Loop</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/bikingmountainmap3.png" alt="">
                </section>
            </section>


        <!-- php here -->
        <script src="../assets/javascript/animations.js"></script>

        <?php
            echo "<p class='path'>outdoors-biking</p>";
            include($path . "inc/footer.php");
        ?>