<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Form for takeaway" />
  <meta name="keywords" content="TakeAway, DineIn, Meals, Asian,form" />
  <meta name="author" content="David Sam"  />
  <title>Take-Away Form</title>

	<link href="styles/style.css" rel="stylesheet"/> 
	<script src="scripts/part2.js"></script>
</head>
<?php include ("includes/header.inc"); ?>
<body id="Home">

	<hr>
<article>

	<h2> Make an Order </h2>
<section id="TSec1">
<h5>Please fill in the form below</h5>
<form id="RegForm" method="post" action="payment.php" novalidate="novalidate">	
	<fieldset>
	<legend> Your Contact </legend>

		<p>
			<label for="First">First Name :</label> 
			<input name="First" id="First" required="required" type="text" maxlength="25" pattern="[a-z\sA-Z]{1,15}"> 		
		</p>
		
		<p>
			<label for="Last">Last Name :</label> 
			<input name="Last" id="Last" required="required" type="text" maxlength="25" pattern="[a-z\sA-Z]{1,15}"> 		
		</p>
		
		<p>
			<label for="Phone">Phone Number :</label> 
			<input type="text" id="Phone" required="required" placeholder="04-0000-0000" maxlength="10"> 
		</p>
		<p>
			<label for="email">email :</label> 
			<input type="email" id="email"  maxlength="30"> 
		</p>			
	<fieldset id="pcontact">	
		<p> Preferred Contact :
			<input type="radio" name="Con" id="Text" value="Text"> 
			<label for="Text"> Text </label>			
			<input type="radio" name="Con" id="Call"  value="Call"> 
			<label for="Call"> Call </label>
		</p>
	</fieldset>		
	</fieldset>
	<br/><br/>
	<fieldset>
	<legend>Address</legend>
		<p>
			<label for="Street">Street Address :</label> 
			<input name="Street" id="Street" required="required" type="text" maxlength="40"> 
		</p>
		
		<p>
			<label for="Town">Suburb/Town :</label> 
			<input name="Town" id="Town" required="required" type="text" maxlength="20"> 
		</p>
		<p>
			<label for="Post">Postcode :</label>
			<input name="Post" id="Post" required="required" type="text" maxlength="4" pattern="\d{4}"> 
		</p>
		<fieldset id="State">
		<p>
			<label for="State">State :</label>
			<select name="State" id="State" required="required">
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
	</fieldset>
<br/><br/>
	<fieldset>
	<legend> Foods </legend>
		<p>
			<label for="OrderF1"> Order #1 </label>
			<select name="OrderF1" id="OrderF1" required="required" >
				<option value="">Please Select</option>
				<option value="20,ChilliCrab">Chilli Crab - 20$</option>			
				<option value="20,Khantoke">Khantoke Dinner - 20$</option>
				<option value="20,Momos">Momos - 20$</option>
				<option value="14,Kimchi">Kimchi - 15$</option>
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
			<label for="OrderF2"> Order #2 </label>
			<select name="OrderF2" id="OrderF2">
				<option value="">Please Select</option>
				<option value="20,Chilli_Crab">Chilli Crab - 20$</option>			
				<option value="20,Khantoke">Khantoke Dinner - 20$</option>
				<option value="20,Momos">Momos - 20$</option>
				<option value="14,Kimchi">Kimchi - 15$</option>
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
			<label for="OrderD1"> Order #1 </label>
			<select name="OrderD1" id="OrderD1">
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
			<label for="OrderD3"> Order #1 </label>
			<select name="OrderD3" id="OrderD3">
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
			<label for="Quantity">Quantity</label> 
			<input type="number" id="Quantity" min="1"> 
		</p>
	</fieldset>	
	<br/><br/>
	<fieldset>
		<legend>Do you want to hear from us ?</legend>	
		<p>
			<label for="news" id="news"></label>
				<input type="radio" name="news" value="Yes" checked> Yes<br>
				<input type="radio" name="news" value="No"> No<br>
		</p>
	</fieldset>
	<br/><br/>
	<fieldset>
	<legend>Comment / Request</legend>	
		<p>
			<label for="Request"></label>
			<textarea id="Request" placeholder="Main Entrance ? Back door ?" name="Reqeust"></textarea>
		</p>
	</fieldset>
	<input type="submit" id="Mpayment" value="Order / Make Payment" > 
	<input type="reset" value="Reset"> 
</form>
</section>
	<aside>
		<p> * free Delivery within 3-5 km  for orders from 30$ happy hour for every take-away between 5pm - 7pm, FREE vegetable Spring rolls.</p>
	</aside>
</article> 
<?php include ("includes/footer.inc") ?>
<hr>
</body>
</html>