<?php

    $title = "Test";
    $path = "./";
	include($path."assets/inc/header.php");

	include($path."assets/inc/nav.php");

	include("/home/MAIN/djs9826/dbConn.php");
	$sql = "SELECT * FROM `240modularSiteContent` WHERE `title` = '".$title."' LIMIT 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row['content'];
		}
	} else {
		echo "0 results";
	}
	$conn->close();
 

?>
				
<?php
	include($path . "assets/inc/footer.php");
?>