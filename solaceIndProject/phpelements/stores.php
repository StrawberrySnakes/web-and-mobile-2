<?php
    $page = "FairFax_Stores";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="storespagecontent">
            <picture id="outdoorsimg1" class="mainimg">
                    <!-- <source media="(max-width: 650px)" srcset="images/history1_img_2.jpg"> -->
                    <img src="../assets/images/indProject/storesmain1.jpg" alt="stores" class="mainimgtag">
            </picture>
            <h1 class="mainname">Explore Local Business</h1> <!--Add vert line with borders-->

            <section class="stores-cat" id="things">
                <h2>Shop Souvenirs</h2>
                <div>
                    <h2>Revolution 9</h2>
                    <p>Revolution 9 is a captivating store that blends vintage vinyl, unique fashion, and counterculture memorabilia, offering a one-of-a-kind shopping experience for those seeking eclectic treasures and a taste of alternative style. With its curated selection, the store reflects the vibrant and bohemian spirit of Fairfax.</p>
                </div>
                <figure>
                    <img src="../assets/images/indProject/storesrev9.jpg" alt="Revolution 9">
                </figure>
                
                <figure>
                    <img src="../assets/images/indProject/storesvariety.jpg" alt="Fairfax Variety">
                </figure>
                <div>
                    <h2>Fairfax Variety</h2>
                    <p>Fairfax Variety is a charming store that embodies the eclectic essence of the town, offering a curated mix of quirky gifts, local artisanal goods, and unique home decor. This delightful shop captures the vibrant and artistic character of Fairfax, making it a must-visit for those seeking distinctive finds in a welcoming atmosphere. It's a great places to buy gifts for loved ones.</p>
                </div>
                <div>
                    <h2>The Potting Shed</h2>
                    <p>The Potting Shed is a haven for plant enthusiasts, offering a carefully curated selection of botanical treasures, gardening essentials, and unique plant-themed decor. This charming store invites visitors to indulge in their love for greenery and provides a delightful shopping experience for both novice and seasoned plant lovers.</p>
                </div>
                <figure>
                    <img src="../assets/images/indProject/storespotting.jpg" alt="Potting Shop">
                </figure>
            </section>

            <section class="stores-cat" id="clothes">
                <h2>Shop Clothing</h2>
                <figure>
                    <img src="../assets/images/indProject/storesclothes1.jpg" alt="Man in clothing store">
                </figure>
                <div>
                    <h2>Sonas Men's & Women's Clothing</h2>
                    <p>Sonas is a stylish boutique known for its curated selection of fashion-forward apparel and accessories. With a focus on contemporary trends and timeless classics, the store offers a unique shopping experience for those seeking quality and chic clothing in the heart of Fairfax.</p>
                </div>
                <div>
                    <h2>Lola's Depot</h2>
                    <p>Lola's Depot is a charming boutique that captures the essence of bohemian style, offering a curated collection of eclectic clothing, accessories, and home decor. Known for its laid-back atmosphere and unique finds, Lola's Depot is a must-visit for those seeking distinctive and artistic pieces in the heart of Fairfax.</p>
                </div>
                <figure>
                    <img src="../assets/images/indProject/storesclothes2.jpg" alt="Lola's Depot">
                </figure>
                
                <figure>
                    <img src="../assets/images/indProject/storesclothes3.jpg" alt="clothing on racks">
                </figure>
                <div>
                    <h2>Grace Thrift Shop</h2>
                    <p>Grace Thrift Shop  is a hidden gem for thrift enthusiasts, providing a curated selection of clothing, furniture, and unique vintage items. With its eclectic offerings and affordable finds, the shop offers a sustainable and budget-friendly shopping experience in the heart of Fairfax.</p>
                </div>
                 
            </section>

            <section class="stores-cat" id="other">
                <h2>Other Local Shops</h2>
                <div>
                    <h2>Live Water</h2>
                    <p>Live Water surf shop offers a unique variety of equipment for numerous outdoors activities. From wetsuits to surfboards to sunscreen, Live Water can cater to all your surfing needs. The stores also sells bathing suits, T-shirts, skateboards, and more.</p>
                </div>
                <figure>
                    <img src="../assets/images/indProject/storessurf.jpg" alt="Live Water">
                </figure>
                
                <figure>
                    <img src="../assets/images/indProject/storesrandom.jpg" alt="The Eleventh House">
                </figure>
                <div>
                    <h2>The Eleventh House</h2>
                    <p>
                        The Eleventh House is a distinctive store offering a fusion of bohemian fashion, spiritual items, and unique home decor. Known for its eclectic blend of products, the store creates a captivating shopping experience for those seeking a mix of style and spirituality. They offer special services such as Taro Card and Astrology readings.</p>
                </div>
                <div>
                    <h2>Fairhemp CBD</h2>
                    <p>
                        Fairhemp CBD is a wellness store specializing in premium CBD products, providing a curated selection of high-quality oils, edibles, and skincare items. Renowned for its commitment to quality and education, Fairhemp CBD offers a trusted destination for those seeking the benefits of CBD in a welcoming setting.</p>
                </div>
                <figure>
                    <img src="../assets/images/indProject/storeshemp.jpg" alt="Fairhemp CBD">
                </figure>
                
                <figure>
                    <img src="../assets/images/indProject/storeslumber.jpg" alt="Fairfax Lumber and Hardware">
                </figure>
                <div>
                    <h2>Fairfax Lumber and Hardware</h2>
                    <p>Fairfax Lumber and Hardware is a comprehensive destination offering a wide range of construction materials, tools, and home improvement supplies. Known for its extensive inventory, Fairfax Lumber and Hardware serves as a go-to resource for both DIY enthusiasts and professionals in the Fairfax community.</p>
                </div>
            </section>

        <!-- php here -->
        <?php
            echo "<p class='path'>stores</p>";
            include($path . "inc/footer.php");
        ?>