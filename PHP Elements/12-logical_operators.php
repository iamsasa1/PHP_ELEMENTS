<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>logical_operators</title>
</head>
<body>

	<?php 

		$subj1 = 60;
		$subj2 = 70;

		echo "Subject 1: " . $subj1 . "<br>";
		echo "Subject 2: " . $subj2 . "<br>";

		if (($subj1 > 50) && ($subj2 > 50)) {
			echo "You have passed your exam.";
		}

		else{
			echo "Needt to passed both subjects.";
		}

	 ?>
	 <br>

	 <h2>Not Operator (!)</h2>

	 <?php 

	 	#$username = "Dileep"

	 	if (!isset($username)){
	 		#echo "Your name is: " . $username;
	 		echo "Please enter the username.";
	 	}

	  ?>
	
</body>
</html>