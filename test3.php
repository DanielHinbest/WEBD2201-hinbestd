<?php
	$title = "Daniel's Term Test 3";
	$file = "test3.php";
	$description = "This is the web page for the Test #3";
	$date = "16 April 2020";
	$banner = "Term Test 3";
	/*
	Daniel Hinbest
	WEBD2201
	April 16, 2020
	*/
	include 'header.php'; 
	$sql = "";
	$results = "";
	$output = "";
	$success = "";
	$name = "";
	$email_address = "";
	$phone_number = "";
	$handle = "";
	$today = date("Y-m-d",time());
	$error = "";	
	define("MAXIMUM_NAME_LENGTH", 30);
	define("PHONE_NUMBER_LENGTH", 10);
	define("MAXIMUM_EMAIL_LENGTH", 255);
	$conn = db_connect();	//Uses the db_connect function from the functions page

	if($_SERVER["REQUEST_METHOD"] == "POST") //Makes the form sticky
	{	
		$name = $_POST[trim('name')];
		$email_address = $_POST[trim('email_address')];
		$phone_number = $_POST[trim('phone_number')];
		$sql = "SELECT * FROM contacts";	
		$results = pg_query($conn, $sql);
		
		if ($name == "")
		{
			$error = "The name of the contact is blank. You entered: " . $name . ".";
		}
		if (strlen($name) > MAXIMUM_NAME_LENGTH)
		{
			$error = "The name cannot be longer than " . MAXIMUM_NAME_LENGTH . " characters. You entered: " . $name . ".";
		}
		if ($email_address == "")
		{
			$error .= "<br/>The email address cannot be blank. You entered: " . $email_address . ".";
		}
		if ($email_address == pg_num_rows($results))
		{
			$error .= "<br/>That email address already exists. You entered: " . $email_address . ".";
		}
		if (!filter_var($email_address, FILTER_VALIDATE_EMAIL))
		{
			$error .= "<br/>The email address is invalid. You entered: " . $email_address . ".";
		}
		if (strlen($email_address) > MAXIMUM_EMAIL_LENGTH)
		{
			$error .= "<br/>The email address cannot be longer than " . MAXIMUM_EMAIL_LENGTH . ".";
		}
		if ($phone_number != "" && !is_numeric($phone_number))
		{
			$error .= "<br/>The phone number must be a number. You entered: " . $phone_number . ".";
		}
		if ($phone_number != "" && strlen($phone_number) != PHONE_NUMBER_LENGTH)
		{
			$error .= "<br/>The phone number must be " . PHONE_NUMBER_LENGTH . " characters. You entered: " . $name . ".";
		}
		else //If everything is valid, add the data and redirect to the login page
		{
			if ($phone_number == "")
			{				
				$handle = fopen("./tt3/dist_list.txt", 'a');
				pg_query("INSERT INTO contacts(email_address, name, connected) VALUES 
				('$_POST[email_address]', 
				'$_POST[name]',  
				'$today')");
				fwrite($handle, $name . " <" . $email_address . ">\n");
				fclose($handle);
			}
			else
			{
				$handle = fopen("./tt3/dist_list.txt", 'a');
				pg_query("INSERT INTO contacts(email_address, name, phone_number, connected) VALUES 
				('$_POST[email_address]', 
				'$_POST[name]',  
				'$_POST[phone_number]',
				'$today')");
				fwrite($handle, $name . "<" . $email_address . ">;\n");
				fclose($handle);
			}
		}
	}
?>
	<h2>Term Test 3</h2>
	<p>This is the page created as part of the third term test for WEBD2201. The table of contacts 
	below is created dynamically from a database table. The page contains a self-referring, "sticky" HTML form. 
	It allows a visitor into enter their contact information to be INSERTed into a database.
	It checks for entry of the name and email, as well as range and if the email is already used in the database.
	If a phone number is entered, it also checks for numeric and length input.</p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<h2>Add New Contact</h2>
		<h3><?php echo $error;?></h3>
		<h3><?php echo $success;?></h3>
		<table class="login">
			<tr>
				<td class="login"><strong>Name</strong></td>
				<td class="login"><input type="text" name="name" value="<?php ?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Email Address</strong></td>
				<td class="login"><input type="text" name="email_address" value="<?php ?>" size="20"/></td>
			</tr>
			<tr>
				<td class="login"><strong>Phone Number</strong></td>
				<td class="login"><input type="text" name="phone_number" value="<?php ?>" size="20"/></td>
			</tr>
		</table>
		<table class="login">
			<tr>
				<td class="login"><input type="submit" value="Add New Contact"/></td>	
			</tr>
		</table>
	</form>

	<h4 style="text-align: center;">Contact List</h4>
	<table border="1" width="75%" class="auto">
		<tr><th>Name</th><th>Email Address</th><th>Phone Number</th></tr>
		<?php 
			$sql = "SELECT name, email_address, phone_number FROM contacts";		
			$results = pg_query($conn, $sql);
			$records = pg_num_rows($results);
			for ($i = 0; $i < $records; $i++){ //loop through all of the retrieved records and add to the output variable
				$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($results, $i, "name")."</td>";
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "email_address")."</td>"; 
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "phone_number")."</td></tr>"; 
			}
			echo $output; //display the output
		?>
	</table>

<?php include 'footer.php'; ?>