<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<h1>If statements</h1>
<?php  

/*  

	***Humor is always welcome ~ but keep it appropriate ;) ***
	
	
// Program lines of code:

$apollo11 = 145000;
$android = 12000000;
$osx = 86000000;

// Step 1: Create a variable named 'myLines' and set it's value equal to the integer 4000000

// Step 2: Use an if statement to check whether 'myLines' is greater than $osx, and if so, display the string "You have written more code than is included in MacOS 10.4."


// Step 3: Add an else if statement to check whether 'myLines' is greater than $android, and if so, display the string "You have written more code than it takes to run an Android phone."

// Step 4: Add another else if statement to check whether 'myLines' is greater than $apollo11, and if so, display the string "You have written more code than it took to launch Apollo 11."

// Step 5: Add an else statement to display the string "Keep writing code to accomplish something great!"

// Step 6: Test your code by changing the value of 'myLines' until you have reached all possibilities. (examples: -14552880, 45000000, 1449100800)
Step 1: Write a program to find the square of the first 10 numbers using a for loop
	
	Step 2: Make sure the page is formatted beautifully
	
		 *  The finished page should include the following to receive full credit:
				*  Comments  / name, date, description
				*  Header
				*  Incorporate CSS, this will make or break the interview process! ;)
				

	
*/

$apollo11 = 145000;
$android = 12000000;
$osx = 86000000;
$myLines = 4000000;
    if ($myLines > $osx){
      echo  "You have written more code than is included in MacOS 10.4.";   
    }
    elseif ($myLines > $android){
        echo "You have written more code than it takes to run an Android phone.";
    }
    elseif ($myLines > $apollo11){
        echo "You have written more code than it took to launch Apollo 11.";
    }
    else
    {
        echo  "Keep writing code to accomplish something great!";
    }
?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>