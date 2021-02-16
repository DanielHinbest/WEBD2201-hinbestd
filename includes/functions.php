<?php
	/*
	Daniel Hinbest
	WEBD2201
	April 2, 2020
	*/
	function db_connect()
	{
		$conn = pg_connect("host=127.0.0.1 dbname=hinbestd_db user=hinbestd password=100717231");
		return $conn;
	}

	function displayCopyrightInfo()
	{
		echo "&copy; " . date('Y') . " Daniel Hinbest";
	}

	function defineConstants()
	{
		define("MINIMUM_ID_LENGTH", 5);
		define("MAXIMUM_ID_LENGTH", 20);
		define("MINIMUM_PASSWORD_LENGTH", 6);
		define("MAXIMUM_PASSWORD_LENGTH", 15);
		define("MAX_FIRST_NAME_LENGTH", 30);
		define("MAX_LAST_NAME_LENGTH", 30);
		define("MAXIMUM_EMAIL_LENGTH", 255);
	}
	
	function evaluate( $d1, $d2, $op) {
	switch($op) {
		case '+' : // addition
			$result = $d1 + $d2;
			break;
		case '-' : // subtraction
			$result = $d1 - $d2;
			break;
		case '*' : // multiplication
			$result = $d1 * $d2;
			break;
		default :  // Unidentified, return safe value
			$result = 0;
	}
	return $result;
	}


	/* Return a number in the range 0-9 inclusive
	*/
	function randdigit() 
	{
		return mt_rand(0,9);
	} // end functionranddigit()

	function randop()
	{
		$ops = array('+', '-', '*');
		// pick a random index between zero and highest index in array.
		$randnum = mt_rand(0,sizeof($ops)-1);
		return $ops[$randnum];  // Use the index to pick the operator
	}
?>