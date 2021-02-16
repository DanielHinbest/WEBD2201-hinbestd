<?php
	$title = "Lab 7: Bond Movies";
	$file = "lab7_bond_info.php";
	$description = "Lab 7 page for my WEBD2201 Website";
	$date = "26 March 2020";
	$banner = "Lab 7: Bond Movies";
	/*
	Daniel Hinbest
	WEBD2201
	March 26, 2020
	*/
include "header.php";
?>
<a href="./lab7.php">Back to Lab 7</a>
<h2>List of James Bond Movies</h2>
<p>This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result(). It includes all of the James Bond movies,
as well as the year they were released, and the actor that portrayed James Bond.
It uses two tables in the SQL script for actors and movies, before the data is 
combined in the PHP script.</p>
<!-- setup the table -->
<table border="1" width="75%" class="bond">
	<tr><th class="movies">Movie</th><th class="year">Year</th><th class="actor">Actor</th></tr>

<?php
$output = ""; //Set up a variable to store the output of the loop 
//connect
$conn = pg_connect("host=127.0.0.1 dbname=hinbestd_db user=hinbestd password=100717231" );  
//N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead

//issue the query
$sql = "SELECT movies.title, movies.year, actors.name
			FROM movies, actors
			WHERE movies.actor=actors.id
			ORDER BY movies.year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>"; 
	}

	echo $output; //display the output
?>
</table>
<!-- end the table -->
<a href="./lab7.php">Back to Lab 7</a>
<?php
	include "footer.php";
?>