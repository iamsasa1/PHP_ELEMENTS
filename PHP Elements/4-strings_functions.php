<?php

	$first = "damn son ";
	$second = "oh! shit.";

	$sentence = $first;
	$sentence .= $second;

	echo $sentence;

?>

<br>

All simple: <?php echo strtolower($sentence); ?> <br>
All capital: <?php echo strtoupper($sentence); ?> <br>
First ltr capital : <?php echo ucfirst($sentence); ?> <br>
Word's first ltr capital : <?php echo ucwords($sentence); ?> <br>
Nmbr of Characters : <?php echo strlen($sentence); ?> <br>
Search for string or character : <?php echo strstr($sentence, "oh") ?> <br>
Replace character or string : <?php echo str_replace("oh", "what", $sentence); ?> <br>
