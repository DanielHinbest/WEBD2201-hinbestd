<?php
	$title = "Using Constants";
	$file = "lab4constants.php";
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

echo "<h2>Using Constants</h2>";

echo "<p>This lab introduces the concept of constants in PHP. In this example, the define command is used to create a 
constant variable named \"MYCONSTANT\", and set the variable as the string \"This is a test of defining constants\", which
is shown below. It is then displayed using the echo command that calls the variable.</p>";

define("MYCONSTANT", "This is a test of defining constants.");
echo MYCONSTANT;
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>