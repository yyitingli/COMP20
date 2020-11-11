<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	//$value = $_POST["number"];
	//echo "The value is $value<br>";
	
	extract ($_POST);
	echo "The value is $number<br>";
	
	?>
</body>
</html>