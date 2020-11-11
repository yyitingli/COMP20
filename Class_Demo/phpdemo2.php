<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Demo 2</title>
</head>

<body>
<?php
	$population = array ("MA"=>2000, "CT"=>3000);
	echo $population["CT"] ."<br>";
	foreach ($population as $k=>$v)
	{
		echo "$k: ". $population[$k]. "<br>";
		
	}
?>	
	<form method="post" action="php_process2.php">
	enter number:
	<input type="text" name="number">
	<input type= "submit">
	

	
	
</body>
</html>