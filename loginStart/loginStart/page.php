<?php

	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
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
	<?php
		session_name("djs9826_240login");
		session_start();
		if(empty($_SESSION['uname'])) {
			die("You are not allowed to view this page");
		} else {
			?>
			You are in, <?php echo $_SESSION['uname'];?>!!!<br/>
			<a href="clearSession.php">Signout</a>
			<?php
		}

	?>
	
</body>
</html>
