<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array_Functions</title>
</head>
<body>
	
	<?php 

		$mynumbers = array(13, 17, 19, 23, 29, 11, 26); 

	?>

	Maximum Value: <?php echo max($mynumbers); ?><br>

	Minimum Value: <?php echo min($mynumbers); ?><br>

	Count: <?php echo count($mynumbers); ?><br><br>

	Sort: <pre><?php sort($mynumbers); print_r($mynumbers); ?></pre>

	Riverse Sort: <pre><?php rsort($mynumbers); print_r($mynumbers); ?></pre>

	Implode:
		<?php 

			$string =  implode("|", $mynumbers);
			echo $string;
		?>

	<pre>
	Explode:
		<?php 

		$newarray = explode("|", $string);
		print_r($newarray);

		?>
	</pre>	

	Search: <?php echo in_array(23, $mynumbers); ?>	


</body>
</html>