<?php
    $page = "FairFax_Hiking";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="hikingpagecontent">
            <div>
                <img class="hikingicon" src="../assets/images/indProject/hikinggraphic1.png" alt="people hiking">
                <h2>Hiking in Fairfax</h2>
                <img class="hikingicon" src="../assets/images/indProject/hikinggraphic2.png" alt="people hiking">
            </div>

            <section id="easyhiking" class="hikes">
                <h2>Family Friendly Beginner Trails</h2>
                <section>
                    <img src="../assets/images/indProject/hikingeasy1.png" alt="">
                    <div>
                        <h2>Canyon and Moore Trail Loop via Deer Park Fire Road</h2>
                        <ul>
                            <li>Length: 2.6mi</li>
                            <li>Type: Loop</li>
                            <li>Average Time: 1h 11min</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/hikingeasymap1.png" alt="">
                </section>
                <section>
                    <img src="../assets/images/indProject/hikingeasy2.jpg" alt="">
                    <div>
                        <h2>Bon Tempe Lake Loop</h2>
                        <ul>
                            <li>Length: 4.1mi</li>
                            <li>Type: Loop</li>
                            <li>Average Time: 1h 23min</li>
                        </ul>
                        
                    </div>
                    <img src="../assets/images/indProject/hikingeasymap2.png" alt="">
                </section>
                <section>
                    <img src="../assets/images/indProject/hikingeasy3.jpg" alt="">
                    <div>
                        <h2>Cascade Falls and Carry Camp Loop</h2>
                        <ul>
                            <li>Length: 2.5mi</li>
                            <li>Type: Loop</li>
                            <li>Average Time: 1h 7min</li>
                        </ul>
                    </div>
                    <img src="../assets/images/indProject/hikingeasymap3.png" alt="">
                </section>
            </section>

            <section id="hardhiking" class="hikes">
                <h2>Advanced Trails</h2>
                    <section>
                        <img src="../assets/images/indProject/hikinghard1.jpg" alt="">
                        <div>
                            <h2>Alpine Lake via Helen Markt Trail</h2>
                            <ul>
                                <li>Length: 4.0mi</li>
                                <li>Type: Out &amp; Back</li>
                                <li>Average Time: 2h 14min</li>
                            </ul>
                        </div>
                        <img src="../assets/images/indProject/hikinghardmap1.png" alt="">
                    </section>
                    <section>
                        <img src="../assets/images/indProject/hikinghard2.jpeg" alt="">
                        <div>
                            <h2>Cataract Falls, Helen Markt, Kent, and High Marsh Loop</h2>
                            <ul>
                                <li>Length: 6.5mi</li>
                                <li>Type: Loop</li>
                                <li>Average Time: 3h 47min</li>
                            </ul>
                        </div>
                        <img src="../assets/images/indProject/hikinghardmap2.png" alt="">
                    </section>
                    <section>
                        <img src="../assets/images/indProject/hikinghard3.jpg" alt="">
                        <div>
                            <h2>Deer Park Loop</h2>
                            <ul>
                                <li>Length: 3.3mi</li>
                                <li>Type: Loop</li>
                                <li>Average Time: 1h 33min</li>
                            </ul>
                        </div>
                        <img src="../assets/images/indProject/hikinghardmad3.png" alt="">
                    </section>
            </section>


        <!-- php here -->
        <script src="../assets/javascript/animations.js"></script>

        <?php
            echo "<p class='path'>outdoors-hiking</p>";
            include($path . "inc/footer.php");
        ?>