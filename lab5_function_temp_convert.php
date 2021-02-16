<?php
	$title = "Lab 5";
	$file = "lab5_function_temp_convert.php";
	$description = "Lab 4 page for my WEBD2201 Website";
	$date = "March 9, 2020";
	$banner = "Lab 5 - Function Temperature Conversion";
	include("./header.php");
	/*
	Daniel Hinbest
	WEBD2201
	March 9, 2020
*/
?>
<a href="lab5.php">Back to Lab 5</a>
<h2>Function Temperature Conversion</h2>

<p>This exercise is similar to the <a href="lab5_simple_temp_convert.php">Simple Temperature Conversion</a> page where the idea is the same, however, the calculation is 
no longer taking place in the loop. Now, the loop is only used to increment the Celsius value and display the output of the conversion. To make this work, a new function
is used. I created a function called tempConvert with the parameters being the $celsius variable. In the function it runs the formula, then returns the value of $fahrenheit
when it is called. Each time through the loop, the function is called and then displays the data in each row of the table. It stops once the 100&deg;C value has been reached.</p>

<table class="temperature" style = "margin-left: auto; margin-right: auto;"> 
<?php
function tempConvert($celsius) //Function to calculate the fahrenheit temperature
{
	$fahrenheit = 9.0 / 5.0 * $celsius + 32; //formula for celsius to fahrenheit
	return $fahrenheit; //returns fahrenheit
}
//Creates table and the headers
	echo"<tr><th>Celsius</th><th>Fahrenheit</th></tr>";
for ($celsius = -50; $celsius < 100;) //Loop to create the rows with the celsius and fahrenheit temperatures in the table
{	
	$celsius+=10;	
	$fahrenheit = tempConvert($celsius);
	echo "<tr><td>$celsius&deg;</td><td>$fahrenheit&deg;</td></tr>";	
}
echo "";
?>
</table>
<a href="lab5.php">Back to Lab 5</a>

<?php include 'footer.php'; ?>