<?php
	$title = "Lab 5";
	$file = "lab5_simple_temp_convert.php";
	$description = "Lab 4 page for my WEBD2201 Website";
	$date = "March 9, 2020";
	$banner = "Lab 5 - SImple Temperature Conversion";
	include("./header.php");
	/*
	Daniel Hinbest
	WEBD2201
	March 9, 2020
*/
?>
<a href="lab5.php">Back to Lab 5</a>
<h2>Simple Temperature Conversion</h2>
<p>This exercise is the first to incorporate loops into PHP. The table below is a result of converting Celsius to Fahrenheit. The range in Celsius is -40&deg;C to 100&deg;C.
This creates a table in PHP with two headers for each column, and then goes right to the loop. In the loop, it starts from the lowest value, and the increments by 10, calculates
the fahrenheit value for each, and creates a new row in the table to display the data each time through the loop.</p>

<table class="temperature" style = "margin-left: auto; margin-right: auto;"> 
<?php
//Creates the table and the headers

	echo "<tr><th>Celsius</th><th>Fahrenheit</th></tr>";
for ($celsius = -50; $celsius < 100;)//Loop to create the rows with the celsius and fahrenheit temperatures in the table
{
	$celsius+=10; //Increments celsius by 10
	$fahrenheit = 9.0 / 5.0 * $celsius + 32; //Calculates fahrenheit
	echo "<tr><td>$celsius&deg;</td><td>$fahrenheit&deg;</td></tr>"; //Displays the rows with the temperatures
}
?>
</table>
<a href="lab5.php">Back to Lab 5</a>

<?php include 'footer.php'; ?>