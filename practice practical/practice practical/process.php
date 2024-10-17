<?php
include("/home/MAIN/djs9826/dbConn.php");

$name = $_POST['name'];
$color = $_POST['color'];


if(!empty($name) && !empty($color)) {
    $sql = "INSERT INTO `finalpractice` (`name`, `color`) VALUES (?, ?);";
    $stmt = $conn ->prepare($sql);
    $stmt -> bind_param("ss", $name, $color);
    $stmt -> execute();
    $stmt -> close();
    echo "Complete";

} else {
    echo "Not found";
}

?>
