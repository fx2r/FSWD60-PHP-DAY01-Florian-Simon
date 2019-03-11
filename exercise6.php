<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php  

		$heroes = array 

		(

			array("Ana", "Healer"),
			array("Bastion", "DPS"),
			array("Mercy", "Healer"),
			array("Lucio", "Healer"),
			array("Reinhardt", "Tank"),
			array("Zarya", "Tank"),
			array("Genji", "DPS")

		);

		echo "The heroe is: ".$heroes[0][0]." and the class is ".$heroes[0][1].".<br>";
		echo "The heroe is: ".$heroes[1][0]." and the class is ".$heroes[1][1].".<br>";
		echo "The heroe is: ".$heroes[2][0]." and the class is ".$heroes[2][1].".<br>";
		echo "The heroe is: ".$heroes[4][0]." and the class is ".$heroes[4][1].".<br>";



	?>

</body>
</html>