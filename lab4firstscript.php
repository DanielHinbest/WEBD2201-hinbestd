
<?php
	$title = "My First PHP Script";
	$file = "lab4.php";
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

echo "<h2>Code Cohabitation</h2>";

echo "<p>This exercise creates an example of how PHP can co-exist with HTML. This web page is created using PHP inside HTML tags.</p>";

echo "<p><em>Hello World! I'm using PHP!</em></p>";
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>