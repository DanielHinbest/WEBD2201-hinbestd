<?php
	$title = "Daniel's Term Test 2";
	$file = "test2.php";
	$description = "This is the web page for the Test #2";
	$date = "26 March 2020";
	$banner = "Term Test 2";
	/*
	Daniel Hinbest
	WEBD2201
	March 26, 2020
*/
include 'header.php'; 
$error = "";
$output = "";
$num = "";
define("EURO_TO_CDN", 1.54978);
define("POUND_TO_CDN", 1.69784);
if($_SERVER["REQUEST_METHOD"] == "GET"){	
	//default mode when the page loads the first time
	//can be used to make decisions and initialize variables
	$country = "";	
	$money = "";
} else if($_SERVER["REQUEST_METHOD"] == "POST"){	
	//the page got here from submitting the form, let's try to process
	$country = trim($_POST["country"]);
	$money = trim($_POST["money"]);
	
	// Data validation	
	if ($country == "")//Checks for currency input
	{
		$error = "Please select a currency";
	}
	if ($money == "")//Checks for amount input
	{
		$error .= "<br/>You must enter an amount to be converted.";
	}
	if ($money <= 0) //Checks for range input
	{
		$error .= "<br/>The amount to be converted must be a positive number, you entered: " . $money;
	}
	if (!is_numeric($money))//Checks for numeric input
	{
		$error .= "<br/>The amount to be converted MUST be a number, you entered: " . $money;
	}
	else 
	{
		if ($country == "euro")
		{
			$num = EURO_TO_CDN * $money;
			$output = "You can exchange &euro;" . $money . " for $" . number_format($num, 2) . "CDN";
		}
		else if ($country == "pound")
		{
			$num = POUND_TO_CDN * $money;
			$output = "You can exchange &pound;" . $money . " for $" . number_format($num, 2) . "CDN";
		}
	}
}
?>
<h2>Term Test 2</h2>
<p>Foreign Currency Exchange - Canadian Market Converter

This web page implements several topics that have been covered in the Web Developement Fundamentals course (WEBD2201) 
course this semester. This page still implements CSS technology, and ensures XHTML validation but was created to demonstrate 
PHP functionality including working with HTML forms, data validation (including making the forms "sticky"), PHP constants and functions.</p>

<p>The page, after doing data validation, will calculate the Canadian Dollar value of an amount in Euros or Pounds, depending on the option 
(radio button) selected. The conversion from the Euro and British pound to Canadian dollars:</p>

    <p><?php echo "&euro;1.00 = $" . number_format(EURO_TO_CDN, 2);?>CDN</p>
    <p><?php echo "&pound;1.00 = $" . number_format(POUND_TO_CDN, 2);?>CDN</p>

<h3><?php echo $error ?></h3>
<h3><?php echo $output ?></h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table cellpadding="10" border="1">
	<tbody><tr>
		<td><strong>Currency to convert:</strong></td>
		<td align="center">
			Euros<input type="radio" name="country" value="euro"/>
			Pounds<input type="radio" name="country" value="pound"/>	
		</td>
	</tr>
	<tr>
		<td><strong>Amount to convert:</strong></td>
		<td align="center"><input type="text" name="money" value="" size="20"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Convert Currency"/></td>
	</tr>
	</tbody></table>
</form>
<?php include 'footer.php'; ?>