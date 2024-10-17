
<?php
include("/home/MAIN/djs9826/dbConn.php");

$name = $_POST['name'];
$color = $_POST['color'];

$sql = "SELECT * FROM `finalpractice` ORDER BY `id` DESC LIMIT 50";
$result = $conn ->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<div id='name'> <p>" . $row['name'] . " likes the color ". $row['color']. ". </p> </div>";
}
?>
