<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<h1>Odd and Even Numbers</h1>
 <form action="6.php" method="POST">
        <p>Please enter a number:<br>
        <input type="text" name="Num" value="<?php if (isset($_POST['Num'])) echo $_POST['Num']; ?>"></p>
        <p><input type="submit" name="submit" value="Check Number!"></p>
        </form>
<?php  

/*  

	***Humor is always welcome ~ but keep it appropriate ;) ***
	
	Step 1: Using the if-else statement, write a program to find whether 53 is an even or odd
	
	Step 2: Make sure the page is formatted beautifully
	
		 *  The finished page should include the following to receive full credit:
				*  Comments  / name, date, description
				*  Header
				*  Print the number and answer to a web page
				*  Incorporate CSS, this will make or break the interview process! ;)
				
	Step 3: Create a program associated with Math that uses the if-else statement
*/


   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ if(isset($_POST['Num']) && is_numeric($_POST['Num'])){if(($_POST['Num']) % 2== 0){
            
            $Num = $_POST['Num'];
    
          echo $Num. " is Even number" .'<br>';}
 
            else
{
    $Num = $_POST['Num'];
 echo $Num. " is odd number".'<br>';
}

}
 elseif (($_POST['Num'] = " ") && !is_numeric($_POST)['Num']){
     echo "Please enter a number!";
 }
     }
    
 

            
?>
        
       
        

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>