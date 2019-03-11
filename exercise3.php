<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$d = date("D");

	echo "$d<br>";

	if ($d=="Mon")
		echo "Today is Monday!";
	else if ($d=="Tue")
		echo "Today is Tuesday!";
	else if ($d=="Wed")
		echo "Today is Wednesday";
	else if ($d=="Thu")
		echo "Today is Thursday!";
	else if ($d=="Fri")
		echo "Today is Friday!";
	else if ($d=="Sat")
		echo "Today is Saturday!";
	else 
		echo "Today is Sunday!";
	?>

</body>
</html>