
<?php
		function sanitise_input($data)
			{
				$data =  trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

	require_once ("settings.php");
	$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
	$errMsg = "";
	
	if(!$conn){
		$errMsg .= "<p>Database connection failure</p>";
	} else {
		$firstname = sanitise_input($_POST["firstname"]);
		$lastname = sanitise_input($_POST["lastname"]);
		$Phone = sanitise_input( $_POST["Phone"]);
		$pcontact = sanitise_input( $_POST["pcontact"]);
		$street = sanitise_input( $_POST["street"]);
		$town = sanitise_input( $_POST["town"]);
		$pcode = sanitise_input( $_POST["pcode"]);
		$state = sanitise_input( $_POST["state"]);
			$food1 = sanitise_input( $_POST["food1"]);
			$food2 = sanitise_input( $_POST["food2"]);
			$desert1 = sanitise_input( $_POST["desert1"]);
			$drink = sanitise_input( $_POST["drink"]);
		$cost = sanitise_input( $_POST["cost"]);
		$email =  sanitise_input($_POST["email"]);
		$quantity = sanitise_input($_POST["quantity"]);
		
		$foodname1 = explode(",",$food1);
		$foodname2 = explode(",",$food2);
		$desertname1 = explode(",",$desert1);
		$drinkname1 = explode(",",$drink);
		
		$Card = sanitise_input($_POST["Card"]);	
		$cname = sanitise_input($_POST["cName"]);
		$cnum = sanitise_input($_POST["cNum"]);
		$cvv = sanitise_input($_POST["CVV"]);
		$expmm = sanitise_input($_POST["ExpMM"]);
		$expyy = sanitise_input($_POST["ExpYY"]);


	if($firstname == ""){
		$errMsg .= "<p>You must enter your first name.</p>";
	}else if($lastname == ""){
		$errMsg .= "<p>You must enter your last name.</p>";
	}else if (!preg_match("/^[a-zA-Z-]*$/",$lastname)) {
		$errMsg .= "<p>Only alpha letters and hyphen allowed in your last name.</p>";
	}
	else if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
		$errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
	}
	if(!$email)
	{
		$errMsg .= "<p>You need to provide your email address.</p>";
	}
	if(!$Phone)
	{
		$errMsg .= "<p>You need to provide your phone number.</p>";
	}
	if(!isset($_POST["pcontact"]))
	{
		$errMsg .= "<p>You need to select contact method.</p>";
	}
	if((!$street) || (!$town) || (!$pcode) || (!$state))
	{
		$errMsg .= "<p>You must provide your address.</p>";
	}
	
	if(!$food1)
	{
		$errMsg .= "<p>You need to choose at least, one item.</p>";
	}
		
	if(!isset($_POST["Card"]))
	{
		$errMsg .= "<p>You need to choose your credit card type.</p>";
	}
	

	
	if($state)
		{
		switch($state){
			case "VIC":
				if(!preg_match("/^[3]|[8]/",$pcode)){
					$errMsg .= "<p>VIC post code should start with 3 or 8.</p>";
				}
			break;
			case "NSW":
				if(!preg_match("/^[1]|[2]/",$pcode)){
					$errMsg .= "<p>NSW post code should start with 1 or 2.</p>";
				}
			break;
			case "QLD":
				if(!preg_match("/^[4]|[9]/",$pcode)){
					$errMsg .= "<p>QLD post code should start with 4 or 9.</p>";
				}
			break;
			case "NT":
				if(!preg_match("/^[0]/",$pcode)){
					$errMsg .= "<p>NT post code should start with 0.</p>";
				}
			break;
			case "WA":
				if(!preg_match("/^[6]/",$pcode)){
					$errMsg .= "<p>WA post code should start with 6.</p>";
				}
			break;
			case "SA":
				if(!preg_match("/^[5]/",$pcode)){
					$errMsg .= "<p>SA post code should start with 5.</p>";
				}
			break;
			case "TAS":
				if(!preg_match("/^[7]/",$pcode)){
					$errMsg .= "<p>TAS post code should start with 7.</p>";
				}
			break;
			case "ACT":
				if(!preg_match("/^[0]/",$pcode)){
					$errMsg .= "<p>ACT post code should start with 0.</p>";
				}
			break;
		}
		
	}
	
	if(!preg_match("/^[a-zA-Z\s]+$/",$cname)){
			$errMsg .= "<p>Name must only contain alpha characters nor number.</p>";
		}
		
		switch($Card){
			case "Master":
				if(!preg_match("/^[5][1-5]\d{14}/",$cnum)){
					$errMsg .= "<p>Credit Card must start from 51 to 55 and 16 digits.</p>";
				}
				if(!preg_match("/^\d{3}/",$cvv)){
					$errMsg .= "<p>CVV must be 3 digits for Master Card.</p>";
				}
				
				break;
			case "Visa":
				if(!preg_match("/^[4]\d{15}/",$cnum)){
					$errMsg .= "<p>Credit Card must start with 4 and 16 digits.</p>";
				}
				if(!preg_match("/^\d{3}/",$cvv)){
					$errMsg .= "<p>CVV must be 3 digits for Master Card.</p>";
				}
			break;
			case "American":
				if(!preg_match("/^[3]([4]|[7])\d{14}/",$cnum)){
					$errMsg .= "<p>Credit Card must be started with 34 or 37 and 16 digits.</p>";
				}
				if(!preg_match("/^\d{4}/",$cvv)){
					$errMsg .= "<p>CCV must be 4 digits for American Card.</p>";
				}
			break;
		}

		if($expyy<17){
			$errMsg .= "<p>Your Card is expired.</p>";
		} else if  (($expmm<4) && ($expyy<=17)){
			$errMsg .= "<p>Your Card is expired.</p>";
		}
		
		if(!$cvv)
		{
			$errMsg .= "<p>Your must provide your cvv.</p>";
		}
		
		if($quantity<0)
		{
			$errMsg .= "<p>You can't input negative number.</p>";
		}
		
		if(!$quantity)
		{
			$quantity = 1;
		}
		
		if(!$cost)
		{
			$foodvalue1 = intval($food1);
			$foodvalue2 = intval($food2);
			$desertvalue1 = intval($desert1);
			$drinkvalue = intval($drink) * $quantity;
			$cost = $foodvalue1 + $foodvalue2 + $desertvalue1 + $drinkvalue;
	}
}

	if($errMsg != ""){
		session_start();
		$_SESSION["errMsg"]= $errMsg;
		$_SESSION["firstname"]= $firstname;
		$_SESSION["lastname"]= $lastname;
		$_SESSION["Phone"]= $Phone;
		$_SESSION["pcontact"]= $pcontact;
		$_SESSION["street"]= $street;
		$_SESSION["town"]= $town;
		$_SESSION["pcode"]= $pcode;
		$_SESSION["state"]= $state;
		$_SESSION["cost"]= $cost;
		$_SESSION["email"]= $email;
		$_SESSION["quantity"]= $quantity;
		
		
		header("location: fix_order.php");

	}else{
		$sql_table='order';
		$query = "select * from `$sql_table`";
		$result = mysqli_query($conn,$query);

		if(empty($result))
		{
		$query = "CREATE TABLE IF NOT EXISTS `$sql_table` (
		 order_id int(10) NOT NULL AUTO_INCREMENT,
		 firstname varchar(30) NOT NULL,
		 lastname varchar(30) NOT NULL,
		 phone varchar(10) NOT NULL,
		 pcontact varchar(10) NOT NULL,
		 email varchar(30) NOT NULL,
		 street varchar(20) NOT NULL,
		 suburb varchar(20) NOT NULL,
		 state varchar(3) NOT NULL,
		 postcode varchar(4) NOT NULL,
		 food1 varchar(20) NOT NULL,
		 food2 varchar(20) DEFAULT NULL,
		 desert varchar(20) DEFAULT NULL,
		 drink varchar(20) DEFAULT NULL,
		 quantity int(10) DEFAULT NULL,
		 total int(10) NOT NULL,
		 order_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		 order_status varchar(10) NOT NULL DEFAULT 'PENDING',
		 cardtype varchar(10) NOT NULL,
		 cname varchar(10) NOT NULL,
		 cnum varchar(16) NOT NULL,
		 cvv int(4) NOT NULL,
		 expmm int(2) NOT NULL,
		 expyy int(2) NOT NULL,
		 PRIMARY KEY (order_id)
		)";
		$result = mysqli_query($conn,$query);
		}
		$query = "insert into `$sql_table` (order_id,firstname,lastname,phone,pcontact,email,street,suburb,state,postcode,food1,food2,desert,drink,quantity,total,order_date,order_status,cardtype,cname,cnum,cvv,expmm,expyy) VALUES (NULL, '$firstname','$lastname','$Phone','$pcontact','$email','$street','$town','$state','$pcode','$foodname1[1]','$foodname2[1]','$desertname1[1]','$drinkname1[1]','$quantity','$cost',CURRENT_TIMESTAMP,default,'$Card','$cname','$cnum','$cvv','$expmm','$expyy')";
		$result = mysqli_query($conn,$query);
			
		header ("location: receipt.php");

	}
?>
</html>