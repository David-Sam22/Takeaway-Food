<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="more info" />
  <meta name="keywords" content="info,timetable,About me" />
  <meta name="author" content="David Sam"  />
  <title>About me</title>
<!-- Library for facebook -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="styles/style.css" rel="stylesheet"/> 
</head>
<?php include ("includes/header.inc"); ?>
<body id="Home">

	<hr>

<section id="ASec1">	
	<h2> About Me </h2>

	<img id="me" src="images/images0.jpg" alt="David Sam" width="140" height="175">
	<dl>
	
		<dt>Name :</dt>
		<dd>David Sam</dd>
		<dt>Course :</dt>
		<dd>Computer Science</dd>
		<dt>Student ID :</dt>
		<dd></dd>
	</dl>
	<p><a id="CC"> Contact Me </a></p>
	<a href="http://www.facebook.com" class="fa fa-facebook"></a>
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
	<table>
		<tr>
			<th>Time</th>
			<th>Monday</th> 
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
		</tr>
		<tr>
			<th>8:30-9:30</th>
			<td><p><br/></p></td>
			<td rowspan="2"><p>COS10011<br/>EN313</p></td>
			<td rowspan="2"><p>COS10003<br/>ATC101</p></td>
			<td rowspan="2"><p>COS10011<br/>BA607</p></td>
			<td rowspan="2"><p>COS10003<br/>EW303</p></td>
		</tr>
		<tr>
			<th>9:30-10:30</th>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>10:30-11:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td rowspan="2"><p>COS20007<br/>ATC621</p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>11:30-12:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>12:30-1:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>1:30-2:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>2:30-3:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td rowspan="2"><p>COS10011<br/>BA607</p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>3:30-4:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>4:30-5:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td rowspan="2"><p>COS20001<br/>ATC321</p></td>
		</tr>
		<tr>
			<th>5:30-6:30</th>
			<td rowspan="2"><p>COS20007<br/>AMDC301</p></td>
			<td rowspan="2"><p>COS10011<br/>EN313</p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		</tr>
		<tr>
			<th>6:30-7:30</th>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
			<td><p><br/></p></td>
		
		</tr>
	</table>
	
</section>

	<h2> Assignment Requirements :</h2>
<section id="ASec3">

	<h5>HTML Requirements:</h5>
	<ul>
		<li>Home page: <em>YES</em></li>
		<li>Product range page: <em>YES</em></li>
		<li>Product enquiry page: <em>YES</em></li>
		<li>About page: <em>YES</em></li>
	</ul>
	<h5>CSS Requirements</h5>
	<ul>
		<li>Comments: <em>YES</em></li>
		<li>Selectors: <em>YES</em></li>
		<li>Lists: <em>YES</em></li>
		<li>Sections: <em>YES</em></li>
		<li>Asides: <em>YES</em></li>
		<li>Table: <em>YES</em></li>
		<li>Difinitions: <em>YES</em></li>
		<li>Navigation Menu: <em>YES</em></li>
		<li>Anchors: <em>YES</em></li>
	</ul>
</section>

<section id="ASec2">
	<h2> Reflection :</h2>
	<p>After finishing this assignment i felt like, i'm gaining a lot of knowledge about designing a basic website,eventhough i have a little struggle creating a css.</p><br/>
	<h3><a href="enhancements.php">Click here to go to Enhancements.html</a></h3>
	<h3><a href="enhancements3.php">Click here to go to Enhancements3.html</a></h3>
</section>

<?php include ("includes/footer.inc") ?>
<hr>
</body>
</html>