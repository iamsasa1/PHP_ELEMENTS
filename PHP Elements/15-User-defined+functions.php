<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User-defined_Functions</title>
</head>
<body>
	
	<?php 

		function get_month_name($monthval=0, $yearval=0){

			switch ($monthval) {
				case 1: $month_name  = "Duruthu"; break;
				case 2: $month_name  = "Navam"; break;
				case 3: $month_name  = "Madin"; break;
				case 4: $month_name  = "Bak"; break;
				case 5: $month_name  = "Vesak"; break;
				case 6: $month_name  = "Poson"; break;
				case 7: $month_name  = "Esala"; break;
				case 8: $month_name  = "Nikini"; break;
				case 9: $month_name  = "Binara"; break;
				case 10: $month_name =  "Vap"; break;
				case 11: $month_name =  "Il"; break;
				case 12: $month_name =  "Unduvap"; break;
				default: $month_name =  "Invalid Month"; break;
			}

			return $yearval . " " . $month_name;

		}

		echo get_month_name(8, 2014);
		echo "<br>";
		echo get_month_name(1, 2016);
		echo "<br>";

		echo "<hr>";

		$domain_name = "My_Company";

		echo "Outside Function: {$domain_name} <br>";

		myfunc();
		 
		echo "Outside Function again: {$domain_name} <br>";

		function myfunc() {

			global $domain_name;

			echo "Inside Function: {$domain_name} <br>";

			$domain_name = "Yes!..My_Company";

		}

	 ?>

</body>
</html>