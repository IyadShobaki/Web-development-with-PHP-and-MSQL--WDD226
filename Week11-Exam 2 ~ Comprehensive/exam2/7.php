<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<h1>Root Number</h1>
 <form action="7.php" method="POST">
        <p>Please enter start number:<br>
        <input type="text" name="Num" value="<?php if (isset($_POST['Num'])) echo $_POST['Num']; ?>"></p>
     <p>Please enter End number:<br>
        <input type="text" name="Num1" value="<?php if (isset($_POST['Num1'])) echo $_POST['Num1']; ?>"></p>
        <p><input type="submit" name="submit" value="Find root numbers"></p>
        </form>
<?php  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ if(isset($_POST['Num'],$_POST['Num1']) && is_numeric($_POST['Num'])&&
is_numeric($_POST['Num1'])){
    $Num1 = $_POST['Num'];
    $Num2 = $_POST['Num1'];
    if ($Num1 > 0 && $Num2 > 0 && $Num1 < $Num2){
    for ($i=$Num1; $i<=$Num2; $i+=1)
    {
        echo(sqrt($i)).'<br>';
    }
        
    }else{
            echo "Please enter postitive number and/or be sure that start number less than end number!";
        }
}
            


 elseif (($_POST['Num'] = " ") &&($_POST['Num1'] = " ") && !is_numeric($_POST)['Num'] && !is_numeric($_POST)['Num1']){
     echo "Please enter numbers!";
 }

    
}
     
/*  

	***Humor is always welcome ~ but keep it appropriate ;) ***
	
	Step 1: Write a program to find the square of the first 10 numbers using a for loop
	
	Step 2: Make sure the page is formatted beautifully
	
		 *  The finished page should include the following to receive full credit:
				*  Comments  / name, date, description
				*  Header
				*  Print the number and answer to a web page
				*  Incorporate CSS, this will make or break the interview process! ;)
				

	
*/




?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>