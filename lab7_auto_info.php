<?php
	$title = "Lab 7: Automobiles";
	$file = "lab7_auto_info.php";
	$description = "Lab 7 page for my WEBD2201 Website";
	$date = "26 March 2020";
	$banner = "Lab 7: Automobiles";
	/*
	Daniel Hinbest
	WEBD2201
	March 26, 2020
	*/
include "header.php";
?>
<a href="./lab7.php">Back to Lab 7</a>
<h2>Automobiles Information</h2>
<p>This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result(). This page uses SQL to create a list of five cars, with 
values for id, make, model, year, owner, msrp, and purchase date, but only make, model, year, and msrp
are shown. It then updates the database to change the ownership of one car, then delete another. This gives
an introduction to the update and delete statements.
</p>
<!-- setup the table -->
<table border="1" width="75%" class="auto">
	<tr><th class="automobiles">Make</th><th class="automobiles">Model</th><th class="year">Year</th><th class="automobiles">MSRP</th></tr>
	
<?php
$output = ""; //Set up a variable to store the output of the loop 
//connect
$conn = pg_connect("host=127.0.0.1 dbname=hinbestd_db user=hinbestd password=100717231");  
//N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead

//issue the query
$sql = "SELECT automobiles.make, automobiles.model, automobiles.year, automobiles.msrp
			FROM automobiles
			ORDER BY automobiles.year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);
	
//generate the table
	for ($i = 0; $i < $records; $i++){ //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>";
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "msrp")."</td>\n\t</tr>"; 
	}
	echo $output; //display the output
?>
</table>
<!-- end the table -->
<?php include "footer.php"; ?>