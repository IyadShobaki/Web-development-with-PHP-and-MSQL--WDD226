<!DOCTYPE html>
<html lang="en">
		<head>
			<title>Tulip Clothing Store</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width,initial-scale=1.0" >
			<link rel="stylesheet" href="css/tulip.css">
			<style>
				textarea {
					height:200px;
					width:400px;
				}
			</style>
		</head>
		<body>
			<header>
				<img class="welcome" src="images/thanks.jpeg" alt="Thanks for Joining US">
			</header>
			<nav>
				<ul>
					<li><div class="logo"></div>       </li>
					<li><a href="index.php">Home</a>   </li>
					<li><a href="men.php">Men</a>      </li>
					<li><a href="women.php">Women</a>      </li>
					<li><a href="about.php">About</a>      </li>
					<li><a href="contact.php">Feedback</a>      </li>
                     <li><a href="view_contacts.php">Reviews</a>      </li>
				</ul>
			</nav>
            <br>
            <?php
            // Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	require('dbConnection.php'); // Connect to the db.
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

	if (empty($_POST['message'])) 
	{
		$errors[] = 'Please add a message.';
	} else 
	{
		$msg = mysqli_real_escape_string($conn, trim($_POST['message']));
	}
	
	if (empty($errors)) 
		
	{ // If everything's OK.
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO contacts (first_name, last_name, email, message) VALUES ('$fn', '$ln', '$e', '$msg')";
		$r = @mysqli_query($conn, $q); // Run the query.
		if ($r) 
			
		{ // If it ran OK.
			// Print a message:
			echo '<h1 id="thanks">Thank you, <strong>' . $fn . '</strong> !</h1>
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
			<aside class="floatright">			
						<form action="contact.php" method="post" >
											
							<label for="name">First Name:</label><br>
							<input type="text" id="name" name="first name" placeholder="First Name.." value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"><br>
                            <label for="name">Last Name:</label><br>
							<input type="text" id="name" name="last name" placeholder="Last Name.." value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"><br>
							<label for="name">Email:</label><br>
							<input type="text" id="name" name="email" placeholder="Your Email.." value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><br>							
							<label for="message">Message:</label><br>
							<textarea id="message" name="message" placeholder="Message.."  value="<?php if (isset($_POST['message'])) echo $_POST['message']; ?>"></textarea><br>
							<input type="submit" value="Submit">							
						</form>
			</aside>
			<main>			
				<div class="floatleft">
					<h2>We'd love to hear from you!</h2><p>please use the form to contact us!<br><br>
					Or simply visit us at:<br><br>
					230 Rainbow St<br>
					North Canton, OH 44720</p>
                    <a id="mobile" href="tel:333-999-7777"> 333-999-7777 </a><span id="desktop"> 333-999-7777 </span><br>					</div>	
			</main>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div style="clear: both"></div>
			<footer>
				Copyright &copy 2018 Made By <a href="contact.php">Shobaki</a>.
			</footer>
            
		</body>
</html>