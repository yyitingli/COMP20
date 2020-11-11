<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Demo</title>
</head>

<body>
	<h1>My First PHP Page</h1>
	<?php
	$pageTitle = "My Great PHP Page";
	//echo "<h1>$pageTitle</h1>";
	//echo "<h1>" . $pageTitle. "</h1>";
	?>
	<h2><?php echo $pageTitle ?></h2>
	<script language="javascript">
	document.write ("This was written using javascript")
	</script>
	
	<?php
	$x = "20";  $y = 30;
	$z = $_GET["number"];
		
	echo "<br>Checking if $x is less than $z<br>";
	
	if ($x < $z)
		echo "<br>$x is less<br>";
	else
	{
		echo "<br>$x is more<br>";
		?>
	
		here is more content<?php  echo $x;?><br>
		this is straight <strong>html</strong><hr>
	
		<?php
	}
		
	$items = array("first","second");
	$items[]= "stuff";
	//echo  $items;			//NO!
	$items[]= "things";
	$items[]= "widget";
	array_unshift ($items, 1,2,3);
	for ($i=0;$i <count($items);$i++)
		echo $items[$i] . "<br>";
	
	foreach($items as $item)
		echo "$item<br>";
		
	function addOne()
	{
		global $y;
		$y++;
	}
	function randomMessage()
	{
		 $n = rand(1,3);
		switch($n)
		{    case (1):$msg = "Have a great day!"; break;
			case (2):$msg = "Check our Daily Specials";break;
			case (3):$msg = "Welcome Back!";
		}
			return $msg;  
	}	
	
	echo randomMessage(). "<br>";
		
	echo "The value of y is: $y<br>";
	addOne();
	echo "The value of y is: $y<br>";	
	?>
	
</body>
</html>