<?php
    $page = "FairFax_Contact";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>

        <main id="contactcontent">
            <section class="mainimg" id="mainimgcontact">
                <h1>Get in Touch</h1>
                <h3>We’d love to hear from you</h3> <!--Add vert line with borders-->
            </section>

            <div id="gotoForum" onclick="gocomment()">
                <button  id="forumButton">Leave a Comment on our Forum &#8614;</button>
            </div>

            <section id="contactus">
                <h2>Contact Us</h2>
                <ul>
                    <li><img src="../assets/images/indProject/phone_icon.png" alt="Phone Icon" class="contacticons"></li>
                    <li><p>- 555-555-5555</p></li>
                </ul>
                <ul>
                    <li><img src="../assets/images/indProject/email_icon.png" alt="Email Icon" class="contacticons"></li>
                    <li><p>- ABC1234@gmail.com</p></li>
                </ul>
                <ul>
                    <li><img src="../assets/images/indProject/fax_icon.png" alt="Fax Icon" class="contacticons"></li>
                    <li><p>- 555-555-5555</p></li>
                </ul>
            </section>  
            <section id="beupdated"> 
                <h2>Be Updated</h2>
                <form method="POST" id="form">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </section>

        <!-- php here -->
        <?php
            echo "<p class='path'>contact</p>";
            include($path . "inc/footer.php");
        ?>