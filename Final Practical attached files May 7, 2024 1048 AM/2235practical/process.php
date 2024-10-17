<?php

//You just need to display the data you would hypothetically submit here
//you don't need to actually have it insert into the DB!
//make sure to use the sanitize function before printing the user provided data!

function sanitize($string, $len = 50){
    $string = trim($string);
    $string = htmlentities($string);
    $string = substr($string,0,$len);

    return $string;
}


//print results below:
echo "The Following will be inserted into the database right now(I did extra credit):<br/>";

$name = sanitize($_POST['name']);
$review = sanitize($_POST['review']);
$comment = sanitize($_POST['comment']);

include("assets/inc/dbConn.php");
$sql = "INSERT INTO `240reviews` (`name`, `rating`, `comment`, `date`) VALUES (?, ?, ?, now());";

$stmt = $conn -> prepare($sql);
$stmt -> bind_param("sss",$name, $review, $comment);
$stmt -> execute();
$stmt -> close();


echo "<p>Name: " . $name . "</p>";
echo "<p>Review: " . $review . "</p>";
echo "<p>Comment: " . $Comment . "</p>";
?>

<button onclick="window.open('index.php', '_blank');">return to page</button>