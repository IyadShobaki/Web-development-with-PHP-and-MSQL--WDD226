<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<table border="1" align="center">
<?php  

/*  

	***Humor is always welcome ~ but keep it appropriate ;) ***
	
	Step 1: Create a web page that places the following data inside a table.  Names, James, Mary, Matthew, Zachary, Jane ~ Monthly Salary, 5000, 5500, 6500, 7700, 9800 
	Step 2: Create a calculatation that displays each person's "Annual Salary".



 */
function getAnnual($value)
{
    $total = $value * 12;
    return $total;
}
    
$Employee = [
    'James' => 5000,
    'Mary' => 5500,
    'Matthew' => 6500,
    'Zachary' => 7700,
    'Jane' => 9800,
   
];
 

echo '<tr><th><strong>Employee Name</strong></th>
<th><strong>Monthly Salary</strong></th><th><strong>Annual Salary</strong></th></tr>';
foreach ($Employee as $name => $M_Salary) {
    echo "<tr><td>$name</td><td>$M_Salary</td><td>".getAnnual($M_Salary);"</td></tr>";
  
}
  
	
?>

    </table>




</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>