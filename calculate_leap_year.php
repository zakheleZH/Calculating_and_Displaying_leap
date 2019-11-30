<!DOCTYPE html>
<html>
<head>
	<title>Displaying leap year starting</title>
</head>
<body>
<h1>Calculating and Displaying leap year starting form 1994 to 2013</h1>
<form action="calculate_leap_year.php" method="POST">
	<select name="year">
	<option value="1994">1994</option>
	<option value="1995">1995</option>
	<option value="1996">1996</option>
	<option value="1997">1997</option>
	<option value="1999">1999</option>
	<option value="2000">2000</option>
	<option value="2001">2001</option>
	<option value="2002">2002</option>
	<option value="2003">2003</option>
	<option value="2004">2004</option>
	<option value="2005">2005</option>
	<option value="2006">2006</option>
	<option value="2007">2007</option>
	<option value="2008">2008</option>
	<option value="2009">2009</option>
	<option value="2010">2010</option>
	<option value="2011">2011</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>

		
	</select>
	<input type="submit" name="submit">
</form>
<?php

if(isset($_POST['submit']))// chicking if the submit button is chick
{
	$year = $_POST['year']; //accepting and storing a year from the form

	if($year%4 ==0) // checking if a year is a leap year
	{
		echo "<b>$year Leap Year</b>"; // displaying a leap year
	}
	else
	{
		echo "$year not a Leap Year"; // displaying if a year is not a leap year
	}
}


?>

</body>
</html>