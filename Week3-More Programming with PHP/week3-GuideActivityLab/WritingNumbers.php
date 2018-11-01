<!--Iyad Shobaki
    FALL 2018 WEB DEV WITH PHP AND MYSQL
    Professor  Kathy Ison
    GuidedAcivity_Lab
    9/11/2018 -->
<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
    <link rel="stylesheet" href="style.css">
<head>
	<title>Writing Numbers</title>
</head>
<body>
<!--php script-->

<!--Numbers solution #1-->

<?php
echo "<h3>Numbers Activity #1</h3>";
    
$dates = array('2018-02-01', '2018-02-02', '2018-02-03');
echo "Latest Date: ". max($dates)."\n";
echo "<br>";
echo "Earliest Date: ". min($dates)."\n";
?>
    
 
<!--Numbers solution #2-->

<?php
    echo "<h3>Numbers Activity #2</h3>";

    $num1 = 160;
    $num2 = 15;

    echo "<p>The  value of variable 1 is $num1 &  variable 2 is $num2</p>";

    $result = $num1 % $num2;

    echo "<p>The modulus of these numbers  is $result</p>";
?>
    
    
<!--Numbers solution #3-->

<?php
    echo "<h3>Numbers Activity #3</h3>";
    
    $number=97;
        if($number % 2 ==0)
        {
            echo " $number is a even number ";
        }
            else
                {
                    echo " $number is an odd number ";
                }
 ?>
    
<!--Numbers solution #4-->

<?php
    echo "<h3>Numbers Activity #4</h3>";
    
        function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){ 
        $pi = pi(); 
        $x = sin($latitudeFrom * $pi/180) * 
        
        /*The sin() function returns the sine of a number.*/
        sin($latitudeTo * $pi/180) + 
        
        /*The cos() function returns the cosine of a number.*/
        cos($latitudeFrom * $pi/180) * 
        cos($latitudeTo * $pi/180) * 
        cos(($longitudeTo * $pi/180) - ($longitudeFrom * $pi/180)); 
        $x = atan((sqrt(1 - pow($x, 2))) / $x); 
        return abs((1.852 * 60.0 * (($x/$pi) * 180)) / 1.609344); 
        } 
        // Distance from New York to London
        echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275).'is the distance in miles from New York to London.'."\n"; 
?>
    
    
 <!--Numbers solution #5-->

<?php
    echo "<h3>Numbers Activity #5</h3>";
   
        $sum = 0;
        for($x=1; $x<=50; $x++)
        {
            $sum +=$x;
        }
        echo "The sum of the numbers 0 to 50 is: $sum"."\n";
 ?>
<h3 id="Modify">Numbers Activity #5 modified</h3> 
<?php
    
   
        $sum = 0;
        for($x=1; $x<=50; $x++)
        {
            $sum +=$x;
        }
        echo "The sum of the numbers 0 to 50 is: $sum"."\n";
        echo "<br>";
        echo "The sum of the numbers 0 to 50 is:"; echo number_format($sum);
        echo "<br>";
        echo "The sum of the numbers 0 to 50 is:"; echo number_format($sum,2);
        echo "<br>";
        echo "The sum of the numbers 0 to 50 is:"; echo number_format($sum,2,",",".");
 ?>

    
  
    
</body>
</html>   