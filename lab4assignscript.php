<?php
	$title = "Using Assignment Operators";
	$file = "lab4assignscript.php";
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
echo "<h2>Using Assignment Operators</h2>";

echo "<p>This page shows the use of assignment operators and changing the value of the operator and re-assigning it. In this 
example, it is shown that the original value of the variable is origVar is 100. It then changes to 125 after the += operator is used.
It then changes to 113 after the -= operator takes 12 back from the total. The final change is made with the .= operator, which changes the 
value to a string, which is set to \" chickens\".</p>";

$origVar = 100;
echo "<p>Original value is $origVar</p>";

$origVar += 25;
echo "<p>Added a value, now it's $origVar</p>";

$origVar -= 12;
echo "<p>Subtracted a value, now it's $origVar</p>";

$origVar .= " chickens";
echo "<p>Final answer: $origVar</p>";
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>