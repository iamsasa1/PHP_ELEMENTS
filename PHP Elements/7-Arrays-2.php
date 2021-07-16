<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arrays-2</title>
</head>
<body>
	<?php

		$mycars = array(10, 20, 30, "Toyota", "Nissan", array("black", "white", "blue") , "Mitsubishi", "Benz");

		echo $mycars[3];

	?><br>

	<h3>Before</h3>
	<pre>
		<?php print_r($mycars); ?>
	</pre>

	<?php $mycars[5][1] = "red"; ?>

	<h3>After</h3>
	<pre>
		<?php print_r($mycars); ?>
	</pre>

	
</body>
</html>