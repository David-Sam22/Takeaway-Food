<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="List of food ordering" />
  <meta name="keywords" content="TakeAway,order, DineIn, Meals, Asian,form" />
  <meta name="author" content="David Sam"  />
  <link href="../styles/style.css" rel="stylesheet"/>
  <title>Manager</title>

</head>
<body>
	<h2> Manage the order list </h2>
<form id="query" method="post">

		<fieldset>
		<p>
			<label for="qselect">Query :</label>
			<select name="qselect" id="qselect">
				<option value="">...</option>
				<option value="all">All Orders</option>
				<option value="cus">Orders for a customer based on their name</option>			
				<option value="pro">Orders for a particular product</option>
				<option value="status">Orders that are pending</option>
				<option value="cost">Orders sorted by total cost</option>
			</select>
			<input type="submit" value="Go" />
		</p>
		</fieldset>

</form>
					<h3><a href="../index.php">Click here to go back to the Homepage.</a></h3>

<?php

	require_once ("settings.php");
	error_reporting(0);
	$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
	
	$sql_table="order";
	$update = "";
	$select = $_POST[qselect];
	
//	$result = mysqli_query($conn,$query);
	switch($select)
	{
		case "all":
				$query = "SELECT * FROM `$sql_table` Order by order_id";
				$result = mysqli_query($conn,$query);
			break;
		case "cus":
				$query = "SELECT * FROM `$sql_table` Order by firstname,lastname";
				$result = mysqli_query($conn,$query);
			break;
		case "pro":
				$query = "SELECT * FROM `$sql_table` Order by food1";
				$result = mysqli_query($conn,$query);
			break;
		case "status":
				$query = "SELECT * FROM `$sql_table` Where order_status = 'PENDING'";
				$result = mysqli_query($conn,$query);
			break;
		case "cost":
				$query = "SELECT * FROM `$sql_table` Order by total DESC ";
				$result = mysqli_query($conn,$query);
			break;
	}
	
	if(!$conn){
		echo "<p>Database connection failure</p>";
	} else {
		
		if(!$result){
			echo "<p>", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n"
				."<th scope=\"col\">ID</th>\n"
				."<th scope=\"col\">First Name</th>\n"
				."<th scope=\"col\">Last Name</th>\n"
				."<th scope=\"col\">Food 1</th>\n"
				."<th scope=\"col\">Food 2</th>\n"
				."<th scope=\"col\">Desert</th>\n"
				."<th scope=\"col\">Drink</th>\n"
				."<th scope=\"col\">Quantity</th>\n"
				."<th scope=\"col\">Total</th>\n"
				."<th scope=\"col\">Order Date</th>\n"
				."<th scope=\"col\">Order Status</th>\n"
				."<th scope=\"col\">Update</th>\n"
				."<th scope=\"col\">Drop</th>\n"
				."<tr>\n";
				
		while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["order_id"],"</td>\n";
				echo "<td>",$row["firstname"],"</td>\n";
				echo "<td>",$row["lastname"],"</td>\n";
				echo "<td>",$row["food1"],"</td>\n";
				echo "<td>",$row["food2"],"</td>\n";
				echo "<td>",$row["desert"],"</td>\n";
				echo "<td>",$row["drink"],"</td>\n";
				echo "<td>",$row["quantity"],"</td>\n";
				echo "<td>",$row["total"],"</td>\n";
				echo "<td>",$row["order_date"],"</td>\n";
				echo "<td>",$row["order_status"],"</td>\n";
				echo "<td><form method='post'><select name='update'>
				<option value='PENDING'>",'<p>PENDING</p>',"</option>
				<option value='FULLFILLED'>",'<p>FULLFILLED</p>',"</option>
				<option value='PAID'>",'<p>PAID</p>',"</option>
				<option value='ARCHIVED'>",'<p>ARCHIVED</p>',"</option></select><input type='submit' value='Update' /></form></td>\n";
				
			
				
				if($row["order_status"]=="PENDING")
				{
					echo "<td><form><input type='submit' value='Delete'/></form></td>\n";
				}

				echo "<tr>\n";
			}
			echo "</table>\n";
			
			mysqli_free_result($result);
		}
		mysqli_close($conn);
	}
?>
</body>
</html>