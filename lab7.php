<?php
	$title = "Lab 7";
	$file = "lab7.php";
	$description = "Lab 7 page for my WEBD2201 Website";
	$date = "26 March 2020";
	$banner = "Lab 7: Database Intro";
	/*
	Daniel Hinbest
	WEBD2201
	March 26, 2020
	*/
include "header.php";
?>
<h2>Database Introduction</h2>
<p>This lab is the first to include PostGreSQL, which is used for database access. The two parts to this page are a list of James Bond movies, as well as a list of
automobiles. This lab includes several postgreSQL method calls.  Such as pg_connect(),pg_query(), and pg_fetch_result(). It also uses SQL statements for create tables,
inserting, displaying, updating and deleting data.</p>

<p><a href="./lab7_bond_info.php">Bond Info</a></p>
<p><a href="./sql/lab7_bond_movies.sql">Bond Movies Script</a></p>
<p><a href="./lab7_auto_info.php">Auto Info</a></p>
<p><a href="./sql/lab7_auto_records.sql">Auto Records Script</a></p>

<?php
	include "footer.php";
?>