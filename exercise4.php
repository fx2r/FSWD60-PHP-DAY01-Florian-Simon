<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<section class="container">
			<?php
			##############for loop##############
			/*
			$name = "Simon";

			for($i=0; $i<50; $i++) { //for loop
				echo "$name<br>";
			}
			*/

			##############while#############
			/*
			$i = 1;
			$name = "Simon";

				while($i <= 50) {
			    echo "$name likes fruits <br>";
		    	$i++;
			}
			*/

			##############do while##############
			//do {
		    //code to be executed;
			//} while (condition is true);
	
			$name = "Simon";
			$i = 55; 
			do {
				echo "$name<br>";
				$i--;
			} while ($i >= 6);
			
		?>
	</section>
</body>

</html>