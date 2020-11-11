<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Receipt|Jade Delight</title>
	<style>
		tr:nth-child(even) {
  			background-color: #dddddd;
		}
	</style>
</head>
<body>
	
	<h1 id = "h1"style="color:#df9f9f;"> 
		<?php
			extract ($_POST);
			echo "Hello ". $fname. " " . $lname. ", Thank You For Your Order!";
		?>
	</h1>
	<hr/>

	<div id = "time">
		<?php
			if($p_or_d == "pickup"){
			?>
				<script language="javascript">
					const t = new Date();
					t.setTime(t.getTime() + 15*60000);
					time = "<p><b>Estimate Pickup Time:&nbsp; </b>"+ t +"</p>";
					document.writeln(time);
				</script>
			<?php
			}
			else{
			?>
				<script language="javascript">
					const t = new Date();
					t.setTime(t.getTime() + 30*60000);
					time = "<p><b>Estimate Pickup Time:&nbsp; </b>"+ t +"</p>";
					document.writeln(time);
				</script>
			<?php
			}
		?>
		
	</div>

	<div id = "order">
		<table>
			<tr>
				<th>Qty</th>
				<th>Description</th>
				<th>Cost Each($)</th>
				<th>Amount($)</th>
			</tr>
				<?php
					$items = array("names" => array("Chicken Chop Suey", "Sweet and Sour Pork", "Shrimp Lo Mein","Moo Shi Chicken","Fried Rice"),
								"costs" => array("4.50",6.25, 5.25,"6.50",2.35),
								"qty"   => array($quan0, $quan1, $quan2, $quan3, $quan4),
								"amounts"=> array($cost0,$cost1, $cost2, $cost3, $cost4)
							);
					$order = "";

					for($i = 0; $i <  5 ; $i ++){
						if($items["qty"][$i] > 0){
							$order .= "<tr><td>". $items["qty"][$i] . "</td>";
							$order .= "<td>". $items["names"][$i] . "</td>";
							$order .= "<td>". $items["costs"][$i] . "</td>";
							$order .= "<td>". $items["amounts"][$i] . "</td></tr>";
						}
					}
					echo $order ;
				?>

  		</table>

	</div>

	<div id = "total">
		<?php
			echo "<p> <b>Subtotal: &nbsp; </b> $" . $subtotal . " </p>";
			echo "<p> <b>Mass tax 6.25%: &nbsp;</b>$ " . $tax . " </p>";
		    echo"<p> <b>Total: &nbsp;</b> $" . $total . " </p>";
		?>
	</div>




</body>
</html>


