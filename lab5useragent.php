<?php
	$title = "Lab 5";
	$file = "lab5useragent.php";
	$description = "Lab 5 page for my WEBD2201 Website";
	$date = "9 March 2020";
	$banner = "Lab 5: HTTP User Agent";
	/*
	Daniel Hinbest
	WEBD2201
	March 9, 2020
	*/
?>
<?php include 'header.php'; ?>

<p>This page is designed to display the environment that the website is being accessed. This is done by making a PHP variable named $agent, and then using the 
<code>getenv("HTTP_USER_AGENT")</code>, which collects the information. This is then displayed using the echo command and calling the variable.</p>

<?php
$agent = getenv("HTTP_USER_AGENT"); //Gets the HTTP agent
echo " You are using $agent.";
?>
<br/>
<br/>
<a href="lab5.php">Back to Lab 5</a>
<?php include 'footer.php'; ?>