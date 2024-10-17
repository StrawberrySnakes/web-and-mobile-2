<?php


if(!empty($_POST['uname']) && !empty($_POST['pass'])) {
	include("/home/MAIN/djs9826/dbConn.php");

	$sql = "SELECT * FROM `240Login` WHERE `uname` = ? LIMIT 1";

	$stmt = $conn->prepare($sql);

	$stmt->bind_param('s', $_POST['uname']);
	$stmt->execute();
	$results = $stmt->get_result();
	
	while($row = $results->fetch_assoc()) {
		// $row['pass'];

		// echo "User Found " . $row['uname'];

		if(password_verify($_POST['pass'], $row['pass'])) {
			session_name("djs9826_240login");
			session_start();
			$_SESSION['uname'] = $row['uname'];
			header("Location: page.php");
			echo "hey";

			// echo "Pass valid";
		} else {
			echo "Pass Not Valid";
		}


	}
	// $stmt->close();
	
	// die(" got in");
}
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
 	<style type="text/css">
 		form div
 		{
 			margin: 1em;
 		}
 		form div label
 		{ 
 			float: left;
 			width: 10%;
 		}
 		form div.radio {
 			float: left;
 		}
 		.clearfix {
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Enter Site" />
			<div>
			<input type="button" value="Register" onclick="window.location='register.php'" />
			</div>
		</div>	
	</form>
</body>
</html>
