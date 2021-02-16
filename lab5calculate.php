<?php
	$title = "Lab 5";
	$file = "lab5calculate.php";
	$description = "Lab 5 page for my WEBD2201 Website";
	$date = "9 March 2020";
	$banner = "Lab 5: Calculation Result";
	/*
	Daniel Hinbest
	WEBD2201
	March 9, 2020
*/
if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] == "")) { //uses the variables from the form to determine the numbers to calculate
	header("Location: lab5calculate_form.php");
	exit;
}
if ($_POST['calc'] == "add") { //Calculates the addition
	$result = $_POST['val1'] + $_POST['val2'];
} else if ($_POST['calc'] == "subtract") { //Calculates the subtraction
$result = $_POST['val1'] - $_POST['val2'];
} else if ($_POST['calc'] == "multiply") { //Calculates the multiplication
$result = $_POST['val1'] * $_POST['val2'];
} else if ($_POST['calc'] == "divide") { //Calculates the division
$result = $_POST['val1'] / $_POST['val2'];
}
?>
<?php include 'header.php'; ?>
<h2>Calculation Result</h2>
<p>This page is the output of the calculation form. On this page, an if statement is used to collect the variables entered from the form, as well as
find the operation selected in the previous form. After the information is collected, the operation is performed, and it is displayed in the output.</p>
<p>The result of the calculation is: <?php echo "$result"; ?></p>
<a href="lab5calculate_form.php">Back to calculation form</a><br/>
<a href="lab5.php">Back to Lab 5</a>
<?php include 'footer.php'; ?>