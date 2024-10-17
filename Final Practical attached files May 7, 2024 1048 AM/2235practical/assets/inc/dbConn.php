<?php   
    $servername = "localhost";
	$username = "djs9826";
	$password = "Esox8!reductive";
	$dbname = "djs9826";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>