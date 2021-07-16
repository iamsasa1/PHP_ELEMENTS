<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loops</title>
</head>
<body>

	<!-- While Loop -->
	<h1>While Loops</h1>

	<?php 

		$i = 1;

		while ($i <= 10) {
			echo $i . "<br>";
			$i++;
		}

		echo "I is now : " . $i;

	 ?>

	 <h3>example while</h3>

	 <?php 

		$i = 1;

		while ($i <= 12) {
			echo "12 x {$i} = " . 12 * $i  . "<br>";
			$i++;
		}

	 ?>
	 <hr>

	<!-- For Loop -->
	<h1>For Loops</h1> 

	<?php 

		for($i = 1; $i <= 12; $i++){

			echo "<b>Number: {$i}</b> <br> ";

			for ($j = 1; $j <= 12 ; $j++) { 

				echo "{$i} x {$j} = " . $i * $j . "<br>" ;

			}
		}

	 ?>
	 <hr>

	<!-- For-Each Loop -->
	<h1>For each</h1>

	<?php 

		$job_categories = array("Accounting", "Finance", "IT", "Marketing", "Sales" );

		foreach ($job_categories as $job_category) {

			echo $job_category . "<br>";
				
			}	
	 ?>
	 <br>

	 <?php 

	 	$student = array("first_name" => "Tanushka", "sur_name" => "Balasooriya", "age" => 30, "grade" => 13);

	 	foreach ($student as $label => $mystudent) {

			echo $label . " : " . $mystudent . "<br>";
				
			}	

	  ?>

</body>
</html>