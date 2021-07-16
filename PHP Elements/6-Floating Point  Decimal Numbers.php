<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Floating Point</title>
</head>
<body>

	<?php

		$float = 6.28;

	?>

	<?php echo $float; ?><br>
	<?php $float += 5; echo $float;	?>
	<?php echo 10/3; ?>

	<h2>Functoins</h2>
	Round: <?php echo round($float,1); ?><br>
	Round up: <?php echo ceil($float); ?><br>
	Round down: <?php echo floor($float); ?><br>

	<h2>How to check a number is an integer or float? </h2>

	<?php 
		$myfloat = 7.34;
		$myinteger = 20;
	?>
	
	<?php echo "Is {$myfloat} an Integer? " . is_int($myfloat);?><br>
	<?php echo "Is {$myinteger} an Integer? " . is_int($myinteger);?><br>

	<?php echo "Is {$myfloat} an Float? " . is_float($myfloat);?><br>
	<?php echo "Is {$myinteger} an Float? " . is_float($myinteger);?><br>

	<?php echo "Is {$myfloat} a number? " . is_numeric($myfloat);?><br>
	<?php echo "Is {$myinteger} a number? " . is_numeric($myinteger);?><br>
</body>
</html>