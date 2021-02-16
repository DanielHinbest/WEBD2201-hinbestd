<?php
	$title = "Using Constants 2";
	$file = "lab4constants2.php";
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

echo "<h2>Using Constants 2</h2>";

echo "<p>This exercise is more practice using constants in PHP, with other constants that can be used in the language. These 
constants are set based on the information related to the file and PHP itself. The first is the file information with the \"__FILE__\" variable. This gives 
information about its location and its name. The \"__LINE__\" variable gives the line number that the variable is called on. The
next variable is \"PHP_VERSION\", which shows that I am using PHP version 7.2.23-0. The next \"PHP_OS\" shows the operating system that PHP is being run on.</p>";

echo "<br/>This file is ".__FILE__;
echo "<br/>This is line number ".__LINE__;
echo "<br/>I am using ".PHP_VERSION;
echo "<br/>This test is being run on ".PHP_OS;
?>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>