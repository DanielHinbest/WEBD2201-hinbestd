<?php
	$title = "Code Comments";
	$file = "lab4comments.php";
	$description = "Lab 4 page for my WEBD2201 Website";
	$date = "2 March 2020";
	$banner = "Lab 4: PHP Chapter Files From Textbook";
?>
<?php include 'header.php'; ?>

<!-- This is an HTML comment. -->
<?php
/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/

echo "<h2>Commenting Your Code</h2>";
echo "<p>The purpose of this page is to show the different commenting styles 
available in PHP. This can't be seen on the web page itself because comments are not parsed as code
to be displayed, but can be used to make notes for the developer in the code. There are four
different types of comments being used in this page. The HTML commenting style: <!--...-->,
the single-line PHP comments which is created by adding a double backslash (//), C-style multiline comments,
which can be as long as we would like, created by using: /*...*/, and shells, which is created with the pound sign (#).</p>";

// This is a simple PHP comment.
/* This is a C-style, multiline comment. You can make this
as long as you like.*/
# Used to shells? Use this kind of comment.
?>

<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>