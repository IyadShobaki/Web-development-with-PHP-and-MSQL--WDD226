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
		
		Step 1: Create 2 variables called number1 and number2 and set 1 to value 110 and the other 220:

		Step 2: Add the two variables and display the sum with echo:

		Step3: Create an array of your favorite childhood candies, display them in any order you desire

		Step4: Demonstrate an example of using a constant
		
		*/
        
       
        //Create two variables
        $number1 = 110;
        $number2 = 220;
        // Add the two numbers and output the sum
		$sum = $number1 + $number2;
        echo "<h2>The sum of 110 and 220 is: $sum </h2>";
          echo '<br><br>'; 
            echo '<div id="candies">';
        echo '<h4>My favorite candies are: </h4>';
        // Create an array 
        $candies = [
            'N' => 'Nutella',
            'S' => 'Snickers',
            'K' => 'KitKat',
            'T' => 'Twix'            
        ];
         
        ksort($candies);
            
        foreach ($candies as $ab => $value){
           
           echo  $value . "($ab)";
           echo '<br>';
       }
            echo '</div>';
        echo '<br><br>';
            
         // Example of a constant   
        define ("Address", "123 Canton rd");
        echo '<p class="right">My street address is: ' . Address;
        echo '</p>'  
		?>


		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>