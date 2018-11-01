<!--Iyad Shobaki
    FALL 2018 WEB DEV WITH PHP AND MYSQL
    Professor  Kathy Ison
    GuidedAcivity_Lab Week 4
    9/19/2018 -->

<?php # calculator.php
$page_title = 'Trip Cost Calculator';

include('includes/header.html');
function create_gallon_radio($value)
{
    echo '<input type = "radio" name = "gallon_price" value = "'.$value . '"';
    
    if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == $value))
    {
        echo ' checked = "checked"';
    }
    echo "> $value ";
}


// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	// Minimal form validation:
	// Basically checks that three submitted variables are set and are all numeric types
	// If the validation passes, the calculations will be made; otherwise, the user will be asked to try again
	
	if (isset($_POST['distance'], $_POST['Average_Speed'],$_POST['gallon_price'], $_POST['efficiency']) &&
	 is_numeric($_POST['distance']) && 
     is_numeric($_POST['Average_Speed']) &&
     is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) ) 
	 {
		
		// Calculate the results:
		// calculates the number of gallons of gasoline the trip will take, determined by dividing the distance by the fuel efficiency
		$gallons = $_POST['distance'] / $_POST['efficiency'];
		
		// calculates the cost of the fuel for the trip, determined by multiplying the number of gallons times the average price per gallon
		$dollars = $gallons * $_POST['gallon_price'];
		
		// calculates how long the trip will take, determined by dividing the distance by 65 (miles per hour)
		 $hours = $_POST['distance']/ $_POST['Average_Speed'];
		$speed = $_POST['Average_Speed'];
		// Print the results:
		// All of the values are printed, the cost and hours are formatted with the number_format() function_exists
		// Concatenate operator (.) allows the formatted numeric values to be appended to the printed message
		echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
		<p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . number_format($dollars, 2) . '. If you drive at an average of '.$speed.' miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours.</p>';
	}
	else 
	{ // Invalid submitted values.
		echo '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger">Please enter a valid distance, average speed, price per gallon, and fuel efficiency.</p>';
	}
} // End of main submission IF.
// Leave the PHP section and create the HTML form:
?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
	<p>Distance (in miles): <input type="number" name="distance" value="<?php if (isset($_POST['distance'])) echo $_POST['distance']; ?>"></p>
    <p>Average Speed limit:
      <select name="Average_Speed">
        <option>Select one</option>
		<option value="35" <?php if (isset($_POST['Average_Speed']) && ($_POST['Average_Speed'] == '35')) echo ' selected="selected"'; ?>>35 mph</option>
		<option value="45" <?php if (isset($_POST['Average_Speed']) && ($_POST['Average_Speed'] == '45')) echo ' selected="selected"'; ?>>45 mph</option>
		<option value="55" <?php if (isset($_POST['Average_Speed']) && ($_POST['Average_Speed'] == '55')) echo ' selected="selected"'; ?>>55 mph</option>
		<option value="65" <?php if (isset($_POST['Average_Speed']) && ($_POST['Average_Speed'] == '65')) echo ' selected="selected"'; ?>>65 mph</option>
	</select>
    </p>
	<p>Average Price Per Gallon:
		<?php
        create_gallon_radio('3.00');
        create_gallon_radio('3.50');
        create_gallon_radio('4.00');
        ?>
	</p>
    
	<p>Fuel Efficiency: <select name="efficiency">
        <option>Select one</option>
		<option value="10" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) echo ' selected="selected"'; ?>>Terrible</option>
		<option value="20" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) echo ' selected="selected"'; ?>>Decent</option>
		<option value="30" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) echo ' selected="selected"'; ?>>Very Good</option>
		<option value="50" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) echo ' selected="selected"'; ?>>Outstanding</option>
	</select></p>
	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('includes/footer.html'); ?>