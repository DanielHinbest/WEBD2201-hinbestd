<?php
	$title = "Lab 5";
	$file = "lab5calculate_form.php";
	$description = "Lab 5 page for my WEBD2201 Website";
	$date = "9 March 2020";
	$banner = "Lab 5: Calculate Form";
	/*
	Daniel Hinbest
	WEBD2201
	March 9, 2020
*/
?>
<?php include 'header.php'; ?>
<h2>Calculate Form</h2>
<p>This page is an introduction to forms. It provides a basic calculator with addition, subtraction, multiplication and division. This is all done in a form page, while the calculation
is done in a separate calculation page with a header linked to this page for reference. This allows the user to enter two numbers, and choose the operation
to perform. It the calculates it and outputs it on the next screen.</p>

<form method="post" action="lab5calculate.php">
<p>Value 1: <input type="text" name="val1" size='10pt'/></p>
<p>Value 2: <input type="text" name="val2" size='10pt'/></p>
<p>Calculation:<br/>
<input type="radio" name="calc" value="add"/> add<br/>
<input type="radio" name="calc" value="subtract"/> subtract<br/>
<input type="radio" name="calc" value="multiply"/> multiply<br/>
<input type="radio" name="calc" value="divide"/> divide<br/></p>
<p><input type="submit" name="submit" value="Calculate"/></p>
</form>

<a href="lab5.php">Back to Lab 5</a>
<?php include 'footer.php'; ?>