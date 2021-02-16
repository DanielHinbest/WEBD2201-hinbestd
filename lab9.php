<?php
	$title = "Lab 9";
	$file = "lab9.php";
	$description = "Lab 9 page for my WEBD2201 Website";
	$date = "2 April 2020";
	$banner = "Lab 9: Database/PHP Lab - User Login";
	/*
	Daniel Hinbest
	WEBD2201
	April 2, 2020
	*/
	
	include "header.php";
	$login ="";
	$output = "";	
	$error = "";
	//$script = "";
	$success= "";
	$sql = "";
	$results = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	//Makes the form sticky
		$login = $_POST[trim('login')];
		$pass = $_POST[trim('pass')];		
		$conn = db_connect();	//Uses the db_connect function from the functions page
		$sql = "SELECT first_name, last_name, email_address, enrol_date, last_access FROM lab9_users WHERE id = '" . $login."' AND password= '" . $pass . "'";	
		$results = pg_query($conn, $sql);
		
		if(pg_num_rows($results)) //not zero means something was found
		{ 
		
			pg_query("UPDATE lab9_users SET last_access = '" . date('Y-m-d', time()) . "' WHERE id = '" . $login . "'");
			//user found, use pg_fetch_result to pull user specific info to display	
			$sql = "SELECT first_name, last_name, email_address, enrol_date, last_access FROM lab9_users WHERE id = '" . $login."' AND password= '" . $pass . "'";	
			$results = pg_query($conn, $sql);
			$output = "Welcome back " . pg_fetch_result($results, "first_name") . " " . pg_fetch_result($results, 0, "last_name") . ".";
			$output .= "<br/>Our records show that <br/> your email address is: " . pg_fetch_result($results, 0, "email_address") . ".";
			$output .= "<br/>You last accessed the system on: " . pg_fetch_result($results, 0, "last_access") . ".";		
			
		}
		else
		{
			
			//user not found, check for just login id
			$sql = "SELECT * FROM lab9_users WHERE id = '" . $login . "'";
			$results = pg_query($conn, $sql);
			
			if(!pg_num_rows($results))//user not found, empty $login to unstick it
			{ 
				$login = ""; //when echo’’ed in the form
			}				
			$error = "<h2 class='login'>Username/password not found</h2>";
		}
	}
?>

	<h2>User Login Form</h2>
	<p>This page is a user login form where the user is prompted to enter a login ID and a password. The data is stored in a PostGreSQL database
	where the data entered is retrieved for verification. If the data is valid, it logs the user in, updates the last access date and displays the name, email 
	and last access date. If it fails, then it shows a message for invalid entry. This used predefined functions for <code>pg_connect</code> to connect, stored in a 
	<code>db_connect</code> function. It also uses <code>pg_query, pg_num_rows,</code> and <code>pg_fetch_result</code> for manipulation of the data.</p>
	<h2><?php echo $output;?></h2>
	<h2><?php echo $error;?></h2>
	<h2>Please Log In</h2>
	<p class="login">Please enter your username and password</p>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<table class="login">
			<tr>
				<td class="login"><strong>Login ID</strong></td>
				<td class="login"><input type="text" name="login" value="<?php echo $login;?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Password</strong></td>
				<td class="login"><input type="password" name="pass" value="" size="20"/></td>
			</tr>
		</table>
		<table class="login">
			<tr>
				<td class="login"><input type="submit" value="Log In"/></td>	
				<td class="login"><input type="reset" value="Reset"/></td>
			</tr>
		</table>
	</form>

<?php
	include "footer.php";
?>