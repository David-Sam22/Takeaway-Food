<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Reserve a table" />
  <meta name="keywords" content="booking,table,reserve" />
  <meta name="author" content="David Sam"  />
  <title>Booking form</title>

	<link href="styles/style.css" rel="stylesheet"/> 
</head>
<?php include ("includes/header.inc"); ?>
<body id="Home">

	<hr>
<article>

	<h2>Booking a table</h2>
<section id="ESec1">
	<h5>Please fill in the form below</h5>
<form method="post" action="payment.php">	
	<fieldset>
	<legend>Contact Info</legend>
		<p>
			<label for="Title"> Title </label>
			<select name="Title" id="Title" required="required">
				<option value="">Please Select</option>
				<option value="Mr">Mr</option>			
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
				<option value="Miss">Miss</option>
			</select>
		</p>

		<p>
			<label for="First">First Name :</label> 
			<input name="First" id="First" required="required" type="text" maxlength="25" pattern="[a-z]{1,15}"> 	
		</p>
		
		<p>
			<label for="Last">Last Name :</label> 
			<input name="Last" id="Last" required="required" type="text" maxlength="25" pattern="[a-z]{1,15}"> 
		</p>
		
		<p>
			<label for="Email">Email :</label>
			<input name="Email" id="Email" required="required" type="email"> 	
		</p>
			
		<p>
			<label for="Phone">Phone Number :</label> 
			<input type="tel" id="Phone" required="required" placeholder="04-0000-0000" maxlength="10"> 	
		</p>
	
	</fieldset>
	
	<fieldset>
	<legend>Reserve</legend>
	
		<p>
			<label for="Time">Time</label> 
			<input type="text" name="text" placeholder="HH:MM" id="Time" maxlength="5" pattern="\d\d:\d\d"> 	
		</p>
	
		<p>
			<label for="Date">Date</label> 
			<input type="text" name="Date" placeholder="dd/mm/yyyy" id="Date" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}"> 
		</p>
	
		<p>
			<label for="Guests">Number of Guests :</label> 
			<input type="number" id="Guests" required="required" min="1"> 
		</p>
		
		<p>Preferred Location :
			<input type="radio" name="Location" id="Hawthorn"> 
			<label for="Hawthorn"> Hawthorn </label>
			<input type="radio" name="Location" id="Springvale"> 
			<label for="Springvale"> Springvale </label>
		</p>
		
	</fieldset>
	
	<fieldset>
	<legend>Comment / Request</legend>	
		<p>
			<label for="Request"></label>
			<textarea id="Request" placeholder="Make a request when dinning in..." name="Reqeust"></textarea>
		</p>
	</fieldset>
	<input type="submit" value="Book"> 
	<input type="reset" value="Reset"> 

	</form>

</section>

</article> 
<?php include ("includes/footer.inc") ?>
<hr>
</body>
</html>