<?php
	$title = "Using Arithmetic Operators";
	$file = "lab4arithmeticscript.php";
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

echo "<h2>Using Arithmetic Operators</h2>";

echo "<p>This exercise provides an introduction to aritmetic operators. I created 2 variables (\$a and \$b) with values of 85 and 24.
The first line is just an output of the two numbers currently. The second line creates a third variable (\$c) and makes it the result of
the addition of the first two variables with the + operator. The next line uses a new instance of the \$c variable where it is subtracting the values of variable \$a and \$b
with the - operator. The next line of the page is the result of when the two variables, \$a and \$b are multiplied. 
The fifth example is using the \ operator to divide the result of the \$a and \$b variables. The final part of the example uses the % operator
to calculate the modulus of the two variables and outputs them to the page.</p>";

$a = 85;
$b = 24;

echo "<p>Original value of \$a is $a and \$b is $b</p>";

$c = $a + $b;
echo "<p>Added \$a and \$b and got $c</p>";

$c = $a - $b;
echo "<p>Subtracted \$a and \$b and got $c</p>";

$c = $a * $b;
echo "<p>Multiplied \$a and \$b and got $c</p>";

$c = $a / $b;
echo "<p>Divided \$a by \$b and got $c</p>";

$c = $a % $b;
echo "<p>The modulus of \$a and \$b is $c</p>";
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>