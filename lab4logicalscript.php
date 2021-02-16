<?php
	$title = "Using Logical Operators";
	$file = "lab4logicalscript.php";
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

echo "<h2>Using Logical Operators</h2>";

echo "<p>This final exercise in Lab 4 works witb logical operators in if statements. There are 2 variables used in this page. The first is \$degrees, which is
set for 95. The second variable is named \$hot, which is set to \"yes\". An if statement is then started to check if \$degrees is greater than 100, and
the uses the \"or\" operator, which is a \"||\". In this case, if one of the conditions are true, the whole statement is true. Since \$hot is set for \"yes\",
this statement is true and the output shows that the temperature is hot. In the second statement, it is using an and operator, which is \"&amp;&amp;\".
For this case, in order for the if statement to be true, but statements must be true. Since the statement calls for the \$degree variable to be over 100,
and it is set for 95, this statement is false and the else statement is used.</p>";

$degrees = "95";
$hot = "yes";

if (($degrees > 100) || ($hot == "yes")) {
echo "<p>Test 1: It's <strong>really</strong> hot!</p>";
} else {
echo "<p>Test 1: It's bearable.</p>";
}

if (($degrees > 100) && ($hot == "yes")) {
echo "<p>Test 2: It's <strong>really</strong> hot!</p>";
} else {
echo "<p> Test 2: It's bearable.</p>";
}
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>