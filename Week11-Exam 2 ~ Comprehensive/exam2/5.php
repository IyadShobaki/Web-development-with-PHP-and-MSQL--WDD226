<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

	***Humor is always welcome ~ but keep it appropriate ;) ***
	
	Step 1: Create a PHP program that computes the total cost of this meal (feel free to modify menu items):
	
	     *  hamburger ~ $4.95  (you were hungry so you ate 2 of them!)
		 *  chocolate shake ~ $1.95 (flavor price all of the same)
		 *  soda ~ $.85 (refills are free)
		 *  sals tax rate ~ 7.5%
		 *  pre-tax tip ~ 16%  
	
	Step 2: Make sure the page is formatted beautifully
	
		 *  The finished page should include the following to receive full credit:
				*  Comments  / name, date, description
				*  Header
				*  Details about the menu items / show each item along with corresponding price
				*  Sub total of meal before tax and tip
				*  Total which includes meal cost, tax, and tip
				*  Incorporate CSS, this will make or break the interview process! ;)
				
	The image is a guide only, your submission will be amazing!
	*helpful code for total ~ echo "The cost of my meal, including tax and tip:  " . "$". round($total,2);
	
*/

?>
<div><h1>Steak and Shake Resturant </h1></div>
<form action="5.php" method="post">
    
    <p>Burger Menu:
      <select name="Menu">
        <option>Select item</option>
		<option value="4.95" <?php if (isset($_POST['Menu']) && ($_POST['Menu'] == '4.95')) echo ' selected="selected"'; ?>>Classic Burger</option>
		<option value="7.50" <?php if (isset($_POST['Menu']) && ($_POST['Menu'] == '7.50')) echo ' selected="selected"'; ?>>Double Burger</option>
		<option value="11.99" <?php if (isset($_POST['Menu']) && ($_POST['Menu'] == '11.99')) echo ' selected="selected"'; ?>>Special Burger</option> 
        <p><input type="number" min="1" name="Number" style="width: 4em;" value="<?php if (isset($_POST['Number'])) echo $_POST['Number']; ?>"></p>
	</select>
    
    </p>
    <p>Shake Menu:
      <select name="Menu1">
        <option>Select item</option>
		<option value="1.95" <?php if (isset($_POST['Menu1']) && ($_POST['Menu1'] == '1.95')) echo ' selected="selected"'; ?>>Strawberry Shake</option>
		<option value="1.95" <?php if (isset($_POST['Menu1']) && ($_POST['Menu1'] == '1.95')) echo ' selected="selected"'; ?>>Chocolate Shake</option>
		<option value="1.95" <?php if (isset($_POST['Menu1']) && ($_POST['Menu1'] == '1.95')) echo ' selected="selected"'; ?>>Bannana Shake</option> 
        <p><input type="number" min="1" name="Number1" style="width: 4em;" value="<?php if (isset($_POST['Number1'])) echo $_POST['Number1']; ?>"></p>
	</select>
    
    </p>
    <p>Soda Menu:
      <select name="Menu2">
        <option>Select item</option>
		<option value="0.85" <?php if (isset($_POST['Menu2']) && ($_POST['Menu2'] == '0.85')) echo ' selected="selected"'; ?>>Sprite</option>
		<option value="0.85" <?php if (isset($_POST['Menu2']) && ($_POST['Menu2'] == '0.85')) echo ' selected="selected"'; ?>>Coca Cola</option>
		<option value="0.85" <?php if (isset($_POST['Menu2']) && ($_POST['Menu2'] == '0.85')) echo ' selected="selected"'; ?>>Pepsi</option> 
        <p><input type="number" min="1" name="Number2" style="width: 4em;" value="<?php if (isset($_POST['Number2'])) echo $_POST['Number2']; ?>"></p>
	</select>
    
    </p>
    
    <p><input type="submit" name="submit" value="Calculate!"></p>
    </form>
   
   <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

if (isset($_POST['Menu'], $_POST['Number'],$_POST['Menu1'], $_POST['Number1'],$_POST['Menu2'], $_POST['Number2']) &&
	 is_numeric($_POST['Menu']) &&
    is_numeric ($_POST['Number'])&&
   is_numeric($_POST['Menu1'])&&
   is_numeric ($_POST['Number1'])&&
   is_numeric($_POST['Menu2'])&&
   is_numeric ($_POST['Number2'])) 
	 {
    echo 'Burger price is $' . $_POST['Menu'].'<br>';
    echo 'Shake price is $' . $_POST['Menu1'].'<br>';
    echo 'Soda price is $' . $_POST['Menu2'].' ..refills are free!'.'<br>';
    $total = $_POST['Menu'] * $_POST['Number'];
    $total1 = $_POST['Menu1'] * $_POST['Number1'];
    $total2 = $_POST['Menu2'] * $_POST['Number2'];
     
   
    
    $tot = $total + $total1 + $total2;
    $Tip = $tot * 0.16;
    $SalesTaxRate = 0.075;
    $Cost = $tot +($tot * $SalesTaxRate) + $Tip;
echo "The cost of your meal, before tax and tip:  " . "$". round($tot,2).'<br>'; 
echo "The cost of your meal, including tax and tip:  " . "$". round($Cost,2);
    }
    else
    {
        echo "Please select items to your meal!";
    }
} 



    ?>
</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>