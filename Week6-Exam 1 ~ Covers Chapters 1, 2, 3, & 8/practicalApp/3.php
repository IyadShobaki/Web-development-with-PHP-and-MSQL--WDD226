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
	
	Step 1: Create a loop to display 10 numbers starting with your age, my list would start with 61


	Step 2 : Find the errors in this code:
	
		/* <! php
		      print 'Good morning, how are you?'
			  pring 'I'm fine'
			>
		*/
    echo '<div id="Age">';
    echo "10 numbers: start with 36 and increased by 5<br>";
     # 10 numbers loop
    for ($i=36; $i<=85; $i+=5)
    {
        echo "Age is: " . $i . "<br>";
    }
    echo '</div>';
   
    echo '<div id="Good">';
    # Correct code
    print 'Good morning, how are you?';
    print '<br>';
    print 'I\'m fine';
	echo '</div>';
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>