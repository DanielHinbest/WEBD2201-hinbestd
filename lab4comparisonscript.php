<?php
	$title = "Using Comparison Operators";
	$file = "lab4comparisonscript.php";
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

echo "<h2>Using Comparison Operators</h2>";

echo "<p>This part of the lab is an introduction to if statements and comparison operators. Each test scenario uses a different if statement and a different
condition for each. All statements are using the same variables. \$a is 21 and \$b is 15. The first scenario checks if they are equal using the == operator.
Since they are not equal, it uses the else statement which outputs that \$a is not equal to \$b. Test 2 uses the != operator to check if the variables are not
equal. Since the two variables are unequal, the condition in the statement is true, it is displayed as unequal. The next test uses the greater than operator
to check which number is larger. In this case, it is checking to see if \$a is larger, and since it is that is what is displayed. The fourth test is similar
to Test 3, but uses the less than operator to see if \$a is less than \$b. Since it is larger, the else condition is used to say it is not less than \$b.
Test 5 uses the operator for greater than or equal to another variable. This checks both variables, and looks to see if \$a is greater than or equal to \$b.
If it is less than \$b, which it is not, then that is what comes up In this case, it is shown that \$a is greater than or equal to \$b. 
Test 6 uses the less than or equal to operator. This looks to see if \$a is less than or equal to \$b. Since \$b is a smaller number, this case is false
and it is displayed that \$a is not less than \$b</p>";

$a = 21;
$b = 15;

echo "<p>Original value of \$a is $a and \$b is $b</p>";

if ($a == $b) {
	echo "<p>Test 1: \$a equals \$b</p>";
} else {
	echo "<p>Test 1: \$a is not equal to \$b</p>";
}

if ($a != $b) {
	echo "<p>Test 2: \$a is not equal to \$b</p>";
} else {
	echo "<p>Test 2: \$a equals \$b</p>";
}

if ($a > $b) {
	echo "<p>Test 3: \$a is greater than \$b</p>";
} else {
	echo "<p>Test 3: \$a is not greater than \$b</>";
}

if ($a < $b) {
	echo "<p>Test 4: \$a is less than \$b</p>";
} else {
	echo "<p>Test 4: \$a is not less than \$b</p>";
}

if ($a >= $b) {
	echo "<p>Test 5: \$a is greater than or equal to \$b</p>";
} else {
	echo "<p>Test 5: \$a is not greater than or equal to \$b</p>";
}

if ($a <= $b) {
	echo "<p>Test 6: \$a is less than or equal to \$b</p>";
} else {
	echo "<p>Test 6: \$a is not less than or equal to \$b</p>";
}
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php' ?>