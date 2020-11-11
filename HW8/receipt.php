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
			$message = '<html><body><head><style>p{font-size: 20px;}tr:nth-child(even) {background-color: #dddddd;}table {border-collapse: collapse;width: 60%;}td, th {border: 1px solid #706868;text-align: left;padding: 8px;}</style></head>';
			$message .= "<p>Hello ". $fname. " " . $lname. ", Thank You For Your Order! </p>";
			echo "Hello ". $fname. " " . $lname. ", Thank You For Your Order!";
		?>
	</h1>
	<hr/>
	<div id = "time">
		<?php
			$time_txt ="";
			if($p_or_d == "pickup"){
				$time_txt .= "<p><b>Estimate Pickup Time:&nbsp; </b>";
				$message .= "<p><b>Pickup Address:&nbsp;</b> 12345 Tufts Ave., Medford, MA, 02155 </p>";
				
			
			}
			else{
				$time_txt .= "<p><b>Estimate Delivery Time:&nbsp; </b>";
				$message .= "<p><b>Delivery Address:&nbsp; </b>". $street. ", ". $city. "</p>";
			}
			$time_txt .= $time . "</p>";

			echo $time_txt;


			$message .= $time_txt ;


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
					$message .= "<table><tr><th>Qty</th><th>Description</th><th>Cost Each($)</th><th>Amount($)</th></tr>";
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
					$message .= $order . "</table>";
					echo $order ;
				?>

  		</table>

	</div>

	<div id = "total">
		<?php
			$message .= "<p> <b>Subtotal: &nbsp; </b> $" . $subtotal . " </p>";
			$message .= "<p> <b>Mass tax 6.25%: &nbsp;</b>$ " . $tax . " </p>";
			$message .= "<p> <b>Total: &nbsp;</b> $" . $total . " </p>";
			echo "<p> <b>Subtotal: &nbsp; </b> $" . $subtotal . " </p>";
			echo "<p> <b>Mass tax 6.25%: &nbsp;</b>$ " . $tax . " </p>";
		    echo"<p> <b>Total: &nbsp;</b> $" . $total . " </p>";
		?>
	</div>


	<div id = "Email">
		</br></br>
		<p><b>
		<?php
			$message .= '</html></body>';
			$to = $email;
			$subject = "Jade Delight Receipt";
			$headers = "From: CustomerService@JadeDelight.com\r\n" ;
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(mail($to,$subject,$message,$headers))
			{
			    echo "Receipt Sent To ". $email ."</br>" ;
			    //echo "Message accepted";
			}
			else
			{
			    echo "Error: Message not accepted";
			}
			
			

		?>
		</b></p>
	</div>




</body>
</html>


