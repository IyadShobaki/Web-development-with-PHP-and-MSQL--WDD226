<?php 
// This script performs an INSERT query to add a record to the sales table.
$page_title = 'Sales Data';
include('includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	require('dbConnection.php'); // Connect to the db.
	$errors = []; // Initialize an error array.
	
	// Check for a product id:
	if (empty($_POST['prodId'])) 
	{
		$errors[] = 'You forgot to enter a product id.';
	} 
		else 
	{
		$prd = mysqli_real_escape_string($connection, trim($_POST['prodId'])); //string function is used to create a legal SQL string
	}
	
	// Check for quantity:
	if (empty($_POST['qty'])) 
	{
		$errors[] = 'You forgot to enter a value for quantity.';
	} 
		else 
	{
		$qty = mysqli_real_escape_string($connection, trim($_POST['qty'])); //pay attention to the variable $connection, it matches the variable  from the dbConnection.php file
	}
	
	// Check for a value for amount:
	if (empty($_POST['amount'])) 
	{
		$errors[] = 'You forgot to enter an amount.';
	} 
		else 
	{
		$amt = mysqli_real_escape_string($connection, trim($_POST['amount']));
	}
	
	// Check for a customer id:
	if (!empty($_POST['custId'])) 
	{
		if ($_POST['custId'] != $_POST['custId']) 
		{
			$errors[] = 'Your forgot to enter a customer id.';
		} 
			else 
		{
			$cst = mysqli_real_escape_string($connection, trim($_POST['custId']));
		}
	}
	if (empty($errors)) 
		
	{ // If everything's OK.
		// Enter values into the database...
		
		// Make the query:
		$q = "INSERT INTO sales (prodId, qty, amount, custId) VALUES ('$prd', '$qty', '$amt', '$cst' )";
		
		$r = mysqli_query($connection, $q); // Run the query.
		
		if ($r) 
			
		{ // If it ran OK.
			// Print a message:
			echo '<h1>Thank you, the data has been inserted into the database!</h1>';
		} 
			else 
		
		{ // If it did not run OK.
			// Public message:
			
			echo '<h1>System Error</h1>
			<p class="error">Houston, we have a problem!.</p>';
			
			// Debugging message:
			echo '<p>' . mysqli_error($connection) . '<br><br>Query: ' . $q . '</p>';
		} 
		
		// End of if ($r) IF.
		
		mysqli_close($connection); // Close the database $connection.
		
		// Include the footer and quit the script:
		include('includes/footer.html');
		exit();
	} 
		else 
		
	{ 
	// Report the errors.
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) 
		{ 
		
		// Print each error.
			echo " - $msg<br>\n";
		}
		echo '</p><p>Please try again.</p><p><br></p>';
	} 
	
	// End of if (empty($errors)) IF.
	mysqli_close($connection); // Close the database $connection.
} 

// End of the main Submit conditional.
?>
<h1>Add Sales Data</h1>
<form action="enterRecords.php" method="post">
	<p>Product ID: <input type="text" name="prodId" size="15" maxlength="20" value="<?php if (isset($_POST['prodId'])) echo $_POST['prodId']; ?>"></p>
	<p>Quantity: <input type="text" name="qty" size="15" maxlength="20" value="<?php if (isset($_POST['qty'])) echo $_POST['qty']; ?>"></p>
	<p>Amount: <input type="amount" name="amount" size="20" maxlength="20" value="<?php if (isset($_POST['amount'])) echo $_POST['amount']; ?>" ></p>
	<p>Customer ID: <input type="custId" name="custId" size="10" maxlength="20" value="<?php if (isset($_POST['custId'])) echo $_POST['custId']; ?>" ></p>
	<p><input type="submit" name="submit" value="Sales Data"></p>
</form>
<?php include('includes/footer.html'); ?>