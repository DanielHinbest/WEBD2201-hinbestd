<?php
	$title = "Print Var Script";
	$file = "lab4printvarscript.php";
	$description = "Lab 4 page for my WEBD2201 Website";
	$date = "2 March 2020";
	$banner = "Lab 4: PHP Chapter Files From Textbook";
?>
<?php include 'header.php'; ?>

<?php
/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/

echo "<h2>PHP Variable and Value Types</h2>";

echo "<p>This page is an introduction to some of the more comment value types that are used in PHP, and how to use them.
It demonstrates that to declare a variable, we would use a dollar sign ($), and then give it a name, and a value. I 
have three variables in this page, which are shown below. The first one is intVar, the second one is floatVar, and the 
third one is stringVar. The numbers were created as variables which are then called in the echo command for output, which also uses a dollar sign.
An integer variable is any whole number, a float variable is a decimal number, and strings are used for text.</p>";

$intVar = "9554215464";
$floatVar = "1542.2232235";
$stringVar = "This is a string.";

echo "<p>integer: $intVar</p>";
echo "<p>float: $floatVar</p>";
echo "<p>string: $stringVar</p>";
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>