<?php
function sanitize($str, $length=50) {
	$str = trim($str);

	// could also do a strip tags
	// strip_tags($str); 
	$str = htmlentities($str, ENT_QUOTES);

	return substr($str, 0, $length);



}
	if (!empty($_POST['fname']) && !empty($_POST['date']) && !empty($_POST['email'])) {
		include("validations.php");
		echo "Data found lets sanitize and print</br>";
		// echo $_POST['fname'];

		// Could do this
		$fname = sanitize($_POST['fname']);

		// a different way to santtize-- doesnt not work for my php version
		// $cleanfname = filter_var($fname, FILTER_SANITIZE_STRING);
		// echo $cleanfname;

		// Always wanna sanatize before putting it in a database
		echo sanitize($_POST['fname']);

		if(date1($_POST['date'])) {
			echo "Date valid";
		} else {
			echo "date invalid";
		}

		if(emailCheck($_POST['email'])) {
			echo "Email valid";
		} else {
			echo "Email invalid";
		}

		// $stmt = $conn -> prepare($sql);
		// $stmt -> bind_param("s", $fname);

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div{margin: 1em;} 
 		form div label{float: left;width: 10%;}
 		form div.radio {float: left;}
 		.clearfix {clear: both;}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			<label>First Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Date:</label>
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	<?php

	?>
</body>
</html>