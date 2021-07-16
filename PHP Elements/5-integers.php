<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Integers</title>
</head>
<body>

	<?php

		$number1 = 30;
		$number2 = 40; 	

	?>

	Basic Calculation (((10 + 20 + $number1) * $number2) / 20 - 50): <?php echo (((10 + 20 + $number1) * $number2) / 20 - 50); ?>

	<h2>Some useful integer functions</h2>

	Square Root : <?php echo sqrt(100); ?> <br>
	Exponential : <?php echo pow(2, 4); ?> <br>
	Absoulute value : <?php echo abs(10-15); ?> <br>
	Modulo : <?php echo fmod(10, 3); ?> <br>
	Random Number : <?php echo rand(); ?> <br>
	Random Number : <?php echo rand(10, 100); ?> <br>	

	<h2>Increment / Decrement</h2>

	Addition : <?php $number1 += 20; echo $number1; ?> <br>
	Substraction : <?php $number1 -= 40; echo $number1; ?> <br>
	Multiplication : <?php $number1 *= 9; echo $number1; ?> <br>
	Division : <?php $number1 /= 3; echo $number1; ?> <br>


</body>
</html>