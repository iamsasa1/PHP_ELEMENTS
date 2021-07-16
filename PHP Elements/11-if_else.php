<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>if_else</title>
</head>
<body>
	
	<?php  

		$avg_score =75;
		echo "Score: " . $avg_score;
		echo "<br>";


		if( $avg_score >= 70){
			echo "You are qualified. Grade: A ";
		}

		else if ($avg_score >=60) {
			echo "You are qualified. Grade: B ";
		}

		else{
			echo "Please try again.";
		}

	?>
</body>
</html>