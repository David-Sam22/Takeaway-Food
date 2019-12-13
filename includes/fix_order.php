<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<meta name="description" content="Fix-order"  />
<meta name="keywords" content="PHP, MySql" />

	<link href="../styles/style.css" rel="stylesheet"/> 
<title>Form</title>
</head>

<body id="Home">


<h1>Please fill in the form below</h1>

<form id="RegForm" method="post" action="process_order.php" novalidate="novalidate">	

	<fieldset>
	<legend> Your Contact </legend>

		<p>
			<label for="firstname">First Name :</label> 
			<input name="firstname" id="firstname" required="required" type="text" maxlength="25" value="<?php echo $_SESSION["firstname"]; ?>" pattern="[a-z\sA-Z]{1,15}"> 		
		</p>
		
		<p>
			<label for="lastname">Last Name :</label> 
			<input name="lastname" id="lastname" required="required" type="text" maxlength="25" value="<?php echo $_SESSION['lastname']; ?>" pattern="[a-z\sA-Z]{1,15}"> 		
		</p>
		
		<p>
			<label for="Phone">Phone Number :</label> 
			<input type="text" id="Phone" name="Phone" required="required" value="<?php echo $_SESSION['Phone']; ?>" placeholder="04-0000-0000" maxlength="10"> 
		</p>
		<p>
			<label for="email">email :</label> 
			<input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" maxlength="30"> 
		</p>			
	<fieldset id="pcontact">	
		<p> Preferred Contact :
			<input type="radio" name="pcontact" id="Text" value="Text"> 
			<label for="Text"> Text </label>			
			<input type="radio" name="pcontact" id="Call"  value="Call"> 
			<label for="Call"> Call </label>
		</p>
	</fieldset>		
	</fieldset>

	<br/><br/>
	<fieldset>
	<legend>Address</legend>
		<p>
			<label for="street">Street Address :</label> 
			<input name="street" id="street" required="required" value="<?php echo $_SESSION['street']; ?>" type="text" maxlength="40"> 
		</p>
		
		<p>
			<label for="town">Suburb/Town :</label> 
			<input name="town" id="town" required="required" type="text" value="<?php echo $_SESSION['town']; ?>" maxlength="20"> 
		</p>
		<p>
			<label for="pcode">Postcode :</label>
			<input name="pcode" id="pcode" required="required" type="text" value="<?php echo $_SESSION['pcode']; ?>" maxlength="4" pattern="\d{4}"> 
		</p>

		<p>
			<label for="state">State :</label>
			<select name="state" id="state" required="required">
				<option value="">Please Select</option>
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>			
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option>
			</select>
		</p>

	</fieldset>
<br/><br/>
	<fieldset>
	<legend> Foods </legend>
		<p>
			<label for="food1"> Order #1 </label>
			<select name="food1" id="food1" required="required" >
				<option value="">Please Select</option>
				<option value="20,ChilliCrab">Chilli Crab - 20$</option>			
				<option value="20,Khantoke">Khantoke Dinner - 20$</option>
				<option value="20,Momos">Momos - 20$</option>
				<option value="15,Kimchi">Kimchi - 15$</option>
				<option value="15,Satay">Satay (Sate) - 15$</option>
				<option value="15,RotiPrata">Roti Prata - 15$</option>
				<option value="18,NoodleSoups">Noodle Soups - 18$</option>
				<option value="18,ShanNoodles">Shan Noodles - 18$</option>
				<option value="20,BeefRendang">Beef Rendang - 20$</option>
				<option value="10,Sushi">Sushi - 10$</option>
			</select>
		</p>

		<br/><br/>
		<p>
			<label for="food2"> Order #2 </label>
			<select name="food2" id="food2">
				<option value="">Please Select</option>
				<option value="20,Chilli_Crab">Chilli Crab - 20$</option>			
				<option value="20,Khantoke">Khantoke Dinner - 20$</option>
				<option value="20,Momos">Momos - 20$</option>
				<option value="15,Kimchi">Kimchi - 15$</option>
				<option value="15,Satay">Satay (Sate) - 15$</option>
				<option value="15,Roti_Prata">Roti Prata - 15$</option>
				<option value="18,Noodle_Soups">Noodle Soups - 18$</option>
				<option value="18,Shan_Noodles">Shan Noodles - 18$</option>
				<option value="20,Beef_Rendang">Beef Rendang - 20$</option>
				<option value="10,Sushi">Sushi - 10$</option>
			</select>
		</p>

		
	</fieldset>
	<br/><br/>
	<fieldset>
	<legend> Deserts </legend>
		<p>
			<label for="desert1"> Order #1 </label>
			<select name="desert1" id="desert1">
				<option value="">Please Select</option>
				<option value="10,PanCakes_Stack">Short PanCakes Stack - 10$</option>			
				<option value="8,Waffles">Waffles with syrup - 8$</option>
				<option value="7.50,Seasonal_Fruit">Seasonal Fruit - 7.50$</option>
			</select>
				<br/> 
	</fieldset>
	<br/> <br/>
	<fieldset >
	<legend> Drinks </legend>
		<p>
			<label for="drink"> Order #1 </label>
			<select name="drink" id="drink">
				<option value="">Please Select</option>
				<option value="10,Chocolate_Shake">Chocolate Shake - 10$</option>			
				<option value="10,Melon_Shake">Melon Shake - 10$</option>
				<option value="5,Coke">Coke - 5$</option>
				<option value="6,Lemonade">Lemonade - 6$</option>
				<option value="8,Apple_Juice">Natural Apple Juice - 8$</option>
				<option value="8,Kiwi">Kiwi - 8$</option>
			</select>
		</p>
		<p>
			<label for="quantity">Quantity</label> 
			<input type="number" name="quantity" id="quantity" min="1"> 
		</p>
	</fieldset>	
	<br/> <br/>
		<fieldset id="Card">
		<legend>Credit card details</legend>
		<p> Credit Card Type:
					<input id="master" name="Card" type="radio" value="Master">
					<label for="master">Master Card</label>
					<input id="visa" name="Card" type="radio" value="Visa"> 
					<label for="visa">Visa Card</label>
					<input id="american" name="Card" type="radio" value="American"> 
					<label for="american">American Express</label>
		</p>
		</fieldset>
			<br/> <br/>
		<fieldset>
		<p>
			<label for="cName">Name on Credit card :</label> 
			<input name="cName" id="cName" required="required" type="text" maxlength="40"> 		
		</p>

		<p>
			<label for="cNum">Credit card number :</label> 
			<input name="cNum" id="cNum" required="required" placeholder="15 or 16-digits" type="text" maxlength="16"> 		
		</p>
			
		<p> Expiry Date :
			<input name="ExpMM" id="ExpMM"	type="number" max="12" > 
			<input name="ExpYY" id="ExpYY" type="number" max="99" > 
		</p>
		<p>
			<label for="CVV">CVV :</label> 
			<input id="CVV" name="CVV" required="required" placeholder="3 or 4-digits" type="text" maxlength="4"> 		
		</p>		
		<input type="submit" value="Order / Make Payment" > 
		</fieldset>
</form>
<section id="err">
<h2>errors</h2>
<?php 
		if(!isset($_SESSION["errMsg"]))
			$_SESSION["errMsg"]= ""; 
			$errMsg = $_SESSION["errMsg"];
		echo "$errMsg";

?>
</section>	
</body>
</html>