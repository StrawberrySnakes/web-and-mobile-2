<?php

    // include("index.php");
    include("/home/MAIN/djs9826/dbConn.php");
    /**
    * Connects to the database.
    * Return false if connection failed.
    */ 

    $sql = "SELECT * FROM `240ajax` ORDER BY `id` DESC LIMIT 10";
    $results = $conn->query($sql);

    while($row = $results->fetch_assoc()) {
        // echo $row['first'] . ", ";
        $records[] = $row;
    }

    // $names = Array("First"=>"Dessa", "Last"=>"Shapiro");

    // var_dump($my_comments);

    // Code header() is to make sure we get new data - clears the cache!
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: application/json');
    echo json_encode($records);
?>
