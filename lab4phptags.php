<?php
	$title = "Lab 3";
	$file = "lab3.php";
	$description = "Lab 4 page for my WEBD2201 Website";
	$date = "6 February 2020";
	$banner = "Lab 3: Formatting and Layout with CSS";
?>
<?php include 'header.php'; ?>
<?php
/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/

echo "<h2>PHP Start and End Tags</h2>";
echo "<p>This page shows examples of three PHP start and end tags. Not all of the tags 
used are supported by PHP7, which is the reason for the \"; ?> which comes from the second tag,
and is why the third tag does not appear at all. The tags used were &lt;?php, &lt;?, and &lt;script language=\"php\"&gt;.
The text is created using the echo command, and is set to
paragraph using the &lt;p&gt; and the &lt;/p&gt; tags</p>";

echo "<p>This is a test using the first tag type.</p>";
?>

<?
echo "<p>This is a test using the second tag type.</p>";
?>

<script language="php">
echo "<p>This is a test using the third tag type.</p>";
</script>
<p><a href="lab4.php">Return back to Lab 4</a></p>

<?php include 'footer.php'; ?>