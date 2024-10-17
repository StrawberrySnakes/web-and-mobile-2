<?php

// include("home/MAIN/djs9826/dbConn.php");
// $sql = "INSERT INTO `240reviews` (`name`, `rating`, `comment`, `date`) VALUES (?, ?, ?, now());";

// $stmt = $conn -> prepare($sql);
// $stmt -> bind_param("sss", );
// $stmt -> execute();
// $stmt -> close();

$year =  getdate()['year'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RateArt-Abstract</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Link to your external CSS here -->
     
</head>
<body>
    <main>
    <h1>Rate Abstract art</h1>
    <nav id="mainnav">
        <ul id="ul">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Rate</a></li>
        </ul>
    </nav>

    <section id="subtitle">
        <img src="assets\images\tagline-img.png" alt="a tagline image">
        <h3>Abstract Art Review Page</h3>
    </section>

    <section>
        <h2>Recent Ratings</h2>
    <?php

        include("assets/inc/dbConn.php");
        // echo include("home/MAIN/djs9826/dbConn.php");
        // echo "Hey";
        // $sql = "INSERT INTO `240reviews` (`name`, `rating`, `comment`, `date`) VALUES ('Jeff', 'Amazing', 'I wanna eat this', now());";
        $sql = "SELECT * FROM `240reviews` ORDER BY `id` DESC LIMIT 50";
        // echo "hey" . $row['name'];
        $results = $conn -> query($sql);

        while($row = $results->fetch_assoc()) {
            echo "<div id='reviews'><div>Reviewer Name: ". $row['name'] . "</div>" ;
            echo "<div>Rating: ". $row['rating'] . "</div>" ;
            echo "<div>Comment: ". $row['comment'] . "</div>" ;
            echo "<div>Time: ". $row['date'] . "</div></div>" ;
        }

    ?>

    </section>

    <section id="formSec">
        <form id="myForm" action="process.php" method="POST" onsubmit="return validate()">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="review">Review</label><br>
            <input class="radio" type="radio" value="Best thing I've Ever Seen" name="review">Best thing I've Ever Seen<br>
            <input class="radio" type="radio" value="It was relatively good" name="review">It was relatively good<br>
            <input class="radio" type="radio" value="Average" name="review">Average<br>
            <input class="radio" type="radio" value="My eyes are bleeding" name="review">My eyes are bleeding<br>

            <label for="comment">comment</label><br>
            <textarea name="comment" id="comment"></textarea><br>

            <input type="submit" id="submit">
        </form>


    </section>

    <button onclick="changeMode()">Toggle Dark Mode</button>

    </main>

    <?php 
        include("assets/inc/footer.php");
    
    ?>
    <!-- make sure to create a container/wrapper for overall site. -->