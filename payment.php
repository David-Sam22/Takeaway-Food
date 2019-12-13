<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Make a payment" />
  <meta name="keywords" content="TakeAway, payment, Meals, Asian,confirm" />
  <meta name="author" content="David Sam"  />
  <title>Payment</title>

	<link href="styles/style.css" rel="stylesheet"/> 
	<script src="scripts/part2.js"></script>
</head>
<?php include ("includes/header.inc"); ?>
<body id="Home">

<form id="bookform" method="post" action="includes/process_order.php" novalidate="novalidate">

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
		<p>
			<label for="cName">Name on Credit card :</label> 
			<input name="cName" id="cName" required="required" type="text" maxlength="40"> 		
		</p>

		<p>
			<label for="cNum">Credit card number :</label> 
			<input name="cNum" id= "cNum"required="required" placeholder="15 or 16-digits" type="text" maxlength="16"> 		
		</p>
			
		<p> Expiry Date :
			<input name="ExpMM" id="ExpMM"type="number" max="12" pattern="\d\d"> 
			<input name="ExpYY" id="ExpYY" type="number" max="99" pattern="\d\d"> 
		</p>
		<p>
			<label for="CVV">CVV :</label> 
			<input id="CVV" name="CVV"required="required" placeholder="3 or 4-digits" type="text" maxlength="4"> 		
		</p>		
		
	<fieldset>
		<legend>Your Booking</legend>
		<p>Your Name: <span id="confirm_name"></span></p>
		<p>Preferred Contact: <span id="confirm_pcontact"></span></p>
		<p>Address: <span id="confirm_address"></span></p>
		<p>Phone: <span id="confirm_phone"></span></p>
		<p>Email: <span id="confirm_email"></span></p>
		<p>Food:</p>
		<p>Order 1: <span  id="confirm_food1"></span></p>
		<p>Order 2: <span  id="confirm_food2"></span></p>
		<br/>
		<p>Desert:</p> 
		<p>Order 1: <span  id="confirm_desert1"></span></p>
		<br/>
		<p>Drink: <span  id="confirm_drink"></span></p>
		<br/><hr/><br/>
		<p>Total Cost: <span  id="confirm_cost"></span></p>
		<br/>
		<p>Comment / Request: <span  id="confirm_cmt"></span></p>
		<input type="hidden" name="firstname" id="firstname" />
		<input type="hidden" name="lastname" id="lastname" />
		<input type="hidden" name="pcontact" id="pcontact" />
		<input type="hidden" name="email" id="email" />
		<input type="hidden" name="Phone" id="Phone" />
		<input type="hidden" name="state" id="state" />
		<input type="hidden" name="street" id="street" />
		<input type="hidden" name="pcode" id="pcode" />
		<input type="hidden" name="town" id="town" />
		<input type="hidden" name="request" id="Request" />
		<input type="hidden" name="cost" id="cost" />
		<input type="hidden" name="drink" id="drink" />
		<input type="hidden" name="desert1" id="desert1" />
		<input type="hidden" name="food1" id="food1" />
		<input type="hidden" name="food2" id="food2" />
		<input type="hidden" name="quantity" id="quantity" />
		
		<input type="submit" value="Check out" />
		<button type="button" id="cancelButton" >Cancel</button>
		</fieldset>
</form>
<?php include ("includes/footer.inc") ?>