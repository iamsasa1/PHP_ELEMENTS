<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arrays</title>
</head>
<body>
	<?php

		$mycars = array("Toyota", "Nissan", "Mitsubishi", "Benz");

		echo $mycars[3];

	?><br>

	<h3>Before</h3>
	<pre>
		<?php print_r($mycars); ?>
	</pre>

	<?php 

	/*adding another, (required add number)*/
		$mycars[4] = "Suzuki"; 

	/*adding another, (not required add number)*/
		$mycars[] = "BMW";

	/*replace to another, (add except number)*/
		$mycars[1] = "Honda"; 

	?>
	  

	<h3>After</h3>
	<pre>
		<?php print_r($mycars); ?>
	</pre>
	
</body>
</html>