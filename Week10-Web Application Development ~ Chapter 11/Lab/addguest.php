<?php 
// This script performs an INSERT query to add a record to the users table.
$page_title = 'Register';
include('includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	require('../../connection/DBconnection.php'); // Connect to the db.
	$errors = []; // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['first_name'])) 
	{
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($conn, trim($_POST['first_name']));
	}
	
	// Check for a last name:
	if (empty($_POST['last_name'])) 
	{
		$errors[] = 'You forgot to enter your last name.';
	} else 
	{
		$ln = mysqli_real_escape_string($conn, trim($_POST['last_name']));
	}
	
	// Check for an email address:
	if (empty($_POST['email'])) 
	{
		$errors[] = 'You forgot to enter your email address.';
	} else 
	{
		$e = mysqli_real_escape_string($conn, trim($_POST['email']));
	}

	if (empty($_POST['comments'])) 
	{
		$errors[] = 'Please add a comment.';
	} else 
	{
		$cn = mysqli_real_escape_string($conn, trim($_POST['comments']));
	}
	
	if (empty($errors)) 
		
	{ // If everything's OK.
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO guests (first_name, last_name, email, comments) VALUES ('$fn', '$ln', '$e', '$cn')";
		$r = @mysqli_query($conn, $q); // Run the query.
		if ($r) 
			
		{ // If it ran OK.
			// Print a message:
			echo '<h1>Thank you, <strong>' . $fn . '</strong> !</h1>
		<p id="save">Your information saved successfully!</p><p><br></p>';
		} else 
		
		{ // If it did not run OK.
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
			
			// Debugging message:
			echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $q . '</p>';
		} 
		
		// End of if ($r) IF.
		
		mysqli_close($conn); // Close the database connection.
		
		// Include the footer and quit the script:
		include('includes/footer.html');
		exit();
	} else 
		
	{ 
	// Report the errors.
		echo '<p class="error">Error!
		<br>The following error(s) occurred:<br>';
		foreach ($errors as $msg) 
		{ 
		
		// Print each error.
			echo " - $msg<br>\n";
		}
		echo '<br>Please try again.</p>';
	} 
	
	// End of if (empty($errors)) IF.
	mysqli_close($conn); // Close the database connection.
} 

// End of the main Submit conditional.
?>
<h1>Guest Form</h1>
<form action="addguest.php" method="post">
	<p>First Name: </p><input class="inp" type="text" name="first_name" size="20" maxlength="25" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
	<p>Last Name: </p><input class="inp" type="text" name="last_name" size="20" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
	<p>Email Address: </p><input class="inp" type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > 
	<p>Comments: <br> <textarea name="comments"  rows="5" cols="40"  value="<?php if (isset($_POST['comments'])) echo $_POST['comments']; ?>" ></textarea></p>
	<p><input id="submit"type="submit" name="submit" value="Submit"></p>
    
</form>

<?php include('includes/footer.html'); ?>