<?php
	$title = "Lab 5";
	$file = "lab5remoteaddress.php";
	$description = "Lab 5 page for my WEBD2201 Website";
	$date = "9 March 2020";
	$banner = "Lab 5: Remote Address";
	/*
	Daniel Hinbest
	WEBD2201
	March 9, 2020
*/
?>
<?php include 'header.php'; ?>

<p>This exercise uses an variable name $address to determine the IP Address of the user viewing the page. This variable is set using <code>getenv("REMOTE_ADDR")
</code> to get the information of the remote address. This address is then displayed using the echo command.</p>

<?php
$address = getenv("REMOTE_ADDR"); //gets the remote environment 
echo "Your IP address is $address.";
?>
<br/>
<br/>
<a href="lab5.php">Back to Lab 5</a>
<?php include 'footer.php'; ?>