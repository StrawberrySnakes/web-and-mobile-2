<?php

include("/home/MAIN/djs9826/dbConn.php");

if(!empty($_POST["fName"]) && !empty($_POST["comment"])){
    $fName = $_POST["fName"];
    $commit = $_POST["comment"];

    $sql = "INSERT INTO `comments` (`from`, `message`, `date`) VALUES (?, ?, now());";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $fName, $commit);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 15";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>ISTE240ExerciseNine</title>
        <style>
        
        .name {
            color: blue; 
            font-weight: bold;
        }
        .comment {
            color: black;
            
        }
        .time {
            color: gray;  
            font-size: smaller; 
        }
        </style>
        <script>
        function validateForm() {
            var firstName = document.getElementById("first").value.trim();
            var comment = document.getElementById("comment").value.trim();
            var alphanumericRegex = /^[a-zA-Z0-9\s]+$/;

            if (!alphanumericRegex.test(firstName) || !alphanumericRegex.test(comment)) {
                alert("Please enter only alphanumeric characters (letters and numbers) in the input fields.");
                return false; // Prevent form submission
            }
        }
    </script>
	</head>
	<body> 
		<h3>What do you think?</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				while($row = $result->fetch_assoc()) {
                    echo "<li><span class='name'>" . $row["from"] . "</span> <span class='comment'>" . $row["message"] . "</span> <span class='time'>" ."@". $row["date"] . "</span></li>";
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>What do you have to say?</h3>
		<!-- where is goes when form is submitted -->
		<form action="index.php" method="post" onsubmit="return validateForm()">		
            First name: <input type="text" id="first" name="fName" /></br>
            <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Comment here"></textarea></br>
            <input type="submit" value="Add to the List"/>
        </form>
    
        <?php $conn->close(); ?>
        
	</body>
</html>