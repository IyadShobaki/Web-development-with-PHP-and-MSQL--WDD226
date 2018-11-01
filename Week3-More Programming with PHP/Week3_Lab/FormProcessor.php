
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Result</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div id="Result">
<?php
if(!empty($_POST[ 'Num1']))
{
    $n1 = $_POST['Num1'];
    echo ("First number is: " . $n1 ) ;
}
else
{
    $n1 = NULL;
    echo '<p>You didn\'t enter the first number. Please enter a number!';
}
  echo "<br>";  
if(!empty($_POST['Num2']))
{
    $n2 = $_POST['Num2'];
    echo ("Second number is: " . $n2 ) ;
}
else
{
    $n2 = NULL;
    echo '<p>You didn\'t enter the second number. Please enter a number';
}
echo "<br><br>";
 
    if($n1 && $n2){
         if(isset($_POST['Addition'])){
             $a = $n1+$n2;
           echo ("Addition result is: " . $a);
        }
        elseif(isset($_POST['Subtraction'])){
            $s = $n1-$n2;
           echo ("Subtraction result is: " . $s);
        }
    elseif(isset($_POST['Multiplication'])){
            $m= $n1 * $n2;
           echo ("Multiplication result is: " . $m);
        }
    elseif(isset($_POST['Division'])){
           $d= $n1 / $n2;
           echo ("Division result is: " . $d);
        }
        else
        {
            
        }
    }     
    
?>
        </div>
</body>
</html>