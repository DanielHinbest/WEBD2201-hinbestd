<?php
	$title = "Lab 10";
	$file = "lab10.php";
	$description = "Lab 10 page for my WEBD2201 Website";
	$date = "13 April 2020";
	$banner = "Lab 10: Database/PHP Lab - User Registration";
	/*
	Daniel Hinbest
	WEBD2201
	April 13, 2020
	*/

	include "header.php";
	ob_start();
	defineConstants(); //calls all the constant variables for data validation
	$conn = db_connect(); //connects to the database
	$id = "";
	$pass = "";
	$confirm = "";
	$firstName = "";
	$lastName = "";
	$email = "";
	$error = "";
	$sql = "";
	$results = "";
	$today = date("Y-m-d",time());
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") //makes the form "sticky"
	{
		$id = $_POST[trim('id')];
		$pass = $_POST[trim('pass')];
		$confirm = $_POST[trim('confirm')];
		$firstName = $_POST[trim('first_name')];
		$lastName = $_POST[trim('last_name')];
		$email = $_POST[trim('email')];
		$sql = "SELECT first_name, last_name, email_address, enrol_date, last_access FROM webd2201_users WHERE id = '" . $id . "' AND password= '" . $pass . "'";	
		$results = pg_query($conn, $sql);

		if (strlen($id) < MINIMUM_ID_LENGTH || strlen($id) > MAXIMUM_ID_LENGTH) //Checks if the ID is in valid range
		{
			$error = "The user ID must be between " . MINIMUM_ID_LENGTH . " and " . MAXIMUM_ID_LENGTH . " characters." . " You entered: " . $id . ".";
			$login = "";
		}
		if ($id == "") //Checks for blank ID input
		{
			$error .= "<br/>The user ID cannot be blank.";
		}		
		if ($_POST['id'] == pg_num_rows($results)) //Checks if an ID is already taken
		{
			$error .= "<br/>An account with that ID already exists. You entered: " . $id . ".";
			$id = "";
		}
		if (strlen($pass) < MINIMUM_PASSWORD_LENGTH || strlen($pass) > MAXIMUM_PASSWORD_LENGTH) //Checks the password length
		{
			$error .= "<br/>The password must be between " . MINIMUM_ID_LENGTH . " and " . MAXIMUM_PASSWORD_LENGTH . " characters.";
			$pass = "";
		}
		if ($pass == "") //Checks for password entry
		{
			$error .= "<br/>The password cannot be blank";
		}
		if (strlen($confirm) < MINIMUM_PASSWORD_LENGTH || strlen($confirm) > MAXIMUM_PASSWORD_LENGTH) //Checks for confirm password range
		{
			$error .= "<br/>The password must be between " . MINIMUM_PASSWORD_LENGTH . " and " . MAXIMUM_PASSWORD_LENGTH . " characters";
			$pass = "";
		}
		if ($confirm == "") //Checks for confirm password entry
		{
			$error .= "<br/>The password cannot be blank";
		}
		if ($pass != $confirm) //Checks if the passwords match
		{
			$error .= "<br/>The passwords do not match. You entered: " . $pass . " and " . $confirm . ".";
			$pass = "";
			$confirm = "";
		}
		if (strlen($firstName) > MAX_FIRST_NAME_LENGTH) //Checks if the name is in range
		{
			$error .= "<br/>The first name must be less than " . MAX_FIRST_NAME_LENGTH . " characters" . " You entered: " . $firstName . ".";
			$firstName = "";
		}
		if ($firstName == "") //Checks for name input
		{
			$error .= "<br/>The first name cannot be empty";
		}		
		if (is_numeric($firstName)) //Checks if the name is numeric
		{
			$error .= "<br/>The first name cannot be a number. You entered: " . $firstName . ".";
		}
		if (strlen($lastName) > MAX_LAST_NAME_LENGTH) //Checks for the length of the last name
		{
			$error .= "<br/>The last name must be less than " . MAX_LAST_NAME_LENGTH . " characters" . " You entered: " . $lastName . ".";
			$lastName = "";
		}
		if ($lastName == "") //Checks for last name input
		{
			$error .= "<br/>The last name cannot be empty";
		}
		if (is_numeric($lastName)) //Checks for numeric entry
		{
			$error .= "<br/>The last name cannot be a number. You entered: " . $lastName . ".";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //Checks for a valid email format
		{
			$error .= "<br/>The email is invalid" . " You entered: " . $email . ".";
			$email = "";
		}
		if (strlen($email) > MAXIMUM_EMAIL_LENGTH) //Checks the email length
		{
			$error .= "<br/>The email cannot be longer than" . MAXIMUM_EMAIL_LENGTH . " characters" . " You entered: " . $email . ".";
			$email = "";
		}
		if ($_POST['email'] == pg_num_rows($results)) //checks if an email is already taken
		{
			$error .= "<br/>An account with that email already exists. You entered: " . $email . ".";
			$email = "";
		}
		if ($email == "") //checks for blank email input
		{
			$error .= "<br> The email cannot be blank.";
		}
		else //If everything is valid, add the data and redirect to the login page
		{
			pg_query("INSERT INTO webd2201_users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES 
			('$_POST[id]', 
			'$_POST[pass]', 
			'$_POST[first_name]', 
			'$_POST[last_name]', 
			'$_POST[email]',
			'$today',
			'$today')");
			ob_flush();
			header("Location: lab9.php");
		}
	}
?>
	<h2>User Registration Form</h2>
	<p>This page is designed using PHP and a PostGreSQL database to create a user registration form for the user table 
	in the database. This would allow the user to enter their ID, password, first and last names, and email into the form.
	If the data is valid when the register button is clicked, the data will be added to the <code>users</code> database,
	the same one that <a href="lab9.php">Lab 9</a> is connected to. This would allow the data entered in this form to be 
	used in the Lab 9 login page. After registration is completed, there is a redirect to the Lab 9 page to log in to the system.</p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">		
	<h2>Please register here</h2>
	<h3><?php echo $error;?></h3>
		<table class="login">
			<tr>
				<td class="login"><strong>Login ID</strong></td>
				<td class="login"><input type="text" name="id" value="<?php echo $id?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Password</strong></td>
				<td class="login"><input type="password" name="pass" value="<?php echo $pass?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Confirm Password</strong></td>
				<td class="login"><input type="password" name="confirm" value="<?php echo $confirm?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>First Name</strong></td>
				<td class="login"><input type="text" name="first_name" value="<?php echo $firstName?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Last Name</strong></td>
				<td class="login"><input type="text" name="last_name" value="<?php echo $lastName?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Email Address</strong></td>
				<td class="login"><input type="text" name="email" value="<?php echo $email?>" size="20"/></td>
			</tr>
		</table>
		<table class="login">
			<tr>
				<td class="login"><input type="submit" value="Register"/></td>
				<td class="login"><input type="submit" value="Clear"/></td>
			</tr>
		</table>
	</form>		
<?php
	include "footer.php";
?>