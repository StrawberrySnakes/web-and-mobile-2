<?php
/**
 * Connect to the database.
 * steps:
 * insert first optionally
 * select existing - slecet query
 * output exiting 
 */
include("/home/MAIN/djs9826/dbConn.php");

if(!empty($_GET["fName"]) && !empty($_GET["lName"])){
	$fName = $_GET["fName"];
	$lName = $_GET["lName"];
	// This is suseptable to attack DONT DO IT
	// $sql = "INSERT INTO `240Insert` (`first`, `last`) VALUES ('".$fName."', '".$lName."');";
	// $conn->query($sql);
 
	
	$sql = "INSERT INTO `240Insert` (`first`, `last`) VALUES (?, ?);";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ss', $fName, $lName);
	$stmt->execute();
	$stmt->close();
	
	// PREPARED
	// echo $sql;

	// Use as a test
	// die($_GET["fName"] . " " . $_GET["lName"]);
}
$sql = "SELECT * FROM `240Insert` ORDER BY `id` DESC LIMIT 15";
$result = $conn->query($sql);

 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body> 
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				while($row = $result->fetch_assoc()) {
					echo "<li>". $row["first"]." " .$row["last"] ."</li>";
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<!-- where is goes whem form is submitted -->
		<form action="index.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>