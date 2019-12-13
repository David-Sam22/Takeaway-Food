
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<meta name="description" content="Fix-order"  />
<meta name="keywords" content="PHP, MySql" />
  <title>Receipt</title>
<link href="../styles/style.css" rel="stylesheet"/> 
</head>
	<section id="test">
	
	<h2><em> we will proceed your order, and deliver it to you, soon. here is your receipt</em></h2>

	<?php

			error_reporting(0);
	require_once ("settings.php");
	$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
	$errMsg = "";


	
	if(!$conn){
		$errMsg .= "<p>Database connection failure</p>";
	} else {
		$sql_table="order";
		$query = "SELECT * FROM `$sql_table`  Order by order_id DESC limit 1";
		$result = mysqli_query($conn,$query);
		
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
				
		while ($row=mysqli_fetch_assoc($result)){
			for( $i = 0; $i<strlen($row["cnum"]); $i++ ) 
			{
				$cnum .= '*';
			}
			for( $i = 0; $i<strlen($row["cvv"]); $i++ ) 
			{
				$cvv .= '*';
			}
				echo '<p>Order ID :', $row["order_id"],"</p>";
				echo '<p>First Name :', $row["firstname"],"</p>";
				echo '<p>Last Name :', $row["lastname"],"</p>";
				echo '<p>Phone :', $row["phone"],"</p>";
				echo '<p>Email :', $row["email"],"</p>";
				echo '<p>Street :', $row["street"],"</p>";
				echo '<p>Suburb :', $row["suburb"],"</p>";
				echo '<p>State :', $row["state"],"</p>";
				echo '<p>Post Code :', $row["postcode"],"</p>";
				echo '<p>Food 1 :', $row["food1"],"</p>";
				echo '<p>Food 2 :', $row["food2"],"</p>";
				echo '<p>Desert :', $row["desert"],"</p>";
				echo '<p>Drink :', $row["drink"],"</p>";
				echo '<p>Quantity :', $row["quantity"],"</p>";
				echo '<p>Total :', $row["total"],"</p>";
				echo '<p>Order_Date :', $row["order_date"],"</p>";
				echo '<p>Order_Status :', $row["order_status"],"</p>";
				echo '<p>Credit Card Type :', $row["cardtype"],"</p>";				
				echo '<p>Card Holder Name :', $row["cname"],"</p>";
				echo '<p>Credit Card Number :' ,$cnum, "</p>";
				echo '<p>CVV :', $cvv,"</p>";
				echo '<p>Expiry Month :', $row["expmm"],"</p>";				
				echo '<p>Expiry Year :', $row["expyy"],"</p>";		

				
			}
		
			
			mysqli_free_result($result);
		}
	
	}

		mysqli_close($conn);

?>
</section>