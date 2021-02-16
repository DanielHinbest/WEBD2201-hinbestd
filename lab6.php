<?php
	$title = "Lab 6";
	$file = "lab6.php";
	$description = "Lab 6 page for my WEBD2201 Website";
	$date = "23 March 2020";
	$banner = "Lab 6: Sticky Form/Data Validation";
	/*
	Daniel Hinbest
	WEBD2201
	March 23, 2020
	*/
include "header.php";
?>
<h2>Temperature Conversion Form</h2>
<p>This page uses multiple functions provided by PHP. This uses a similar approach but is controlled by user input, following a form created. 
The user enters the temperature range, as well as the increment. When the user selects the button, to convert the temperatures. The page also runs 
through a validation check for blank input, non-numeric input, and increment range. After the validation for this is completed, it checks to verify 
the order of the numbers, if the "Stop Temperature" input is lower than "Start Temperature", it swaps the two numbers and carries on. </p>

<?php
function tempConvert($celsius)// Function to calculate the fahrenheit temperature
{
	$fahrenheit = 9.0 / 5.0 * $celsius + 32; //Conversion to fahrenheit
	return $fahrenheit;
}
define("MAX_ITERATIONS", 100);
define("MIN_ITERATIONS", 1);
$error = "";
$output = "";
$headers = "";

if($_SERVER["REQUEST_METHOD"] == "GET"){	
	//default mode when the page loads the first time
	//can be used to make decisions and initialize variables
	$start = "";
	$stop = "";
	$incr = "";	
} else if($_SERVER["REQUEST_METHOD"] == "POST"){	
	//the page got here from submitting the form, let's try to process
	$start = trim($_POST["start"]);
	$stop = trim($_POST["stop"]);
	$incr = trim($_POST["increment"]);	
	// Data validation
	if (!isset($start) || $start == "") //checks for the start box input
	{
		$error .= "Please enter a value for \"Starting Temperature\".";
	}
	else if (!isset($stop) || $stop == "")//checks for the stop box input
	{
		$error .= "Please enter a value for \"Stop Temperature\".";
	}
	else if (!isset($incr) || $incr == "")//checks for the increment box input
	{
		$error .= "Please enter a value for \"Temperature Increment\".";
	}
	else if (!is_numeric($start))//checks for numeric input in the start box
	{
		$error .= "Please enter a number in the \"Starting Temperature\" text box. You entered: " . $start;
		$start = "";
	}
	else if (!is_numeric($stop))//checks for numeric input in the stop box
	{
		$error .= "Please enter a number in the \"Stop Temperature\" text box. You entered: " . $stop;
		$stop = "";
	}
	else if (!is_numeric($incr) || $incr > MAX_ITERATIONS || $incr < MIN_ITERATIONS)//checks for increment range
	{
		$error .= "The increment must be between " . MIN_ITERATIONS . " and " . MAX_ITERATIONS . ". You entered: " . $incr;
		$incr = "";
	}
	
	if ($error == "")//Checks error value
	{
		if ($start > $stop)//Changes the start and stop numbers if stop is lower than start
		{
			$temp = $start;
			$start = $stop;
			$stop = $temp;
		}

	$headers = "<tr><th>Celsius</th><th>Fahrenheit</th></tr>";	//header for table
	for ($celsius = $start; $celsius <= $stop;) //loop to set each value
	{			
		$fahrenheit = tempConvert($celsius);	//sets the fahrenheit value
		$output .= "<tr><td>$celsius&deg;</td><td>$fahrenheit&deg;</td></tr>";	//adds a row to the existing output
		$celsius+=$incr;//increments the celsius

	}

	}
	else 
	{		
	$error .= "<br/>Please Try Again";
	}
}
?>
<h3><?php echo $error;?></h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!--Try removing the values and move PHP to after the form and see what happens-->
<p>Starting Temperature: &emsp;&nbsp;<input type="text" name="start" value="<?php echo $start;?>" /></p>
<p>Stop Temperature: &emsp;&emsp;&nbsp;&nbsp;<input type="text" name="stop" value="<?php echo $stop;?>" /></p>
<p>Temperature Increment: &nbsp;<input type="text" name="increment" value="<?php echo $incr;?>" /></p>
<p><input type="submit" name="convert" value="Create a Conversion Table"/></p>
</form>
<?php
//Output of the data
echo "<table class = 'temperature'>
	<tr><td class = 'temperature'></td></tr>
	$headers
	$output
	</table>";	
?>
<?php include "footer.php";?>