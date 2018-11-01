
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
if(!empty($_POST[ 'Txt1']))
{
    $t1 = $_POST['Txt1'];
    echo ("First text is: " . $t1 ) ;
}
else
{
    $t1 = NULL;
    echo '<p>You didn\'t enter the first string. Please enter a string!';
}
  echo "<br>";  
if(!empty($_POST['Txt2']))
{
    $t2 = $_POST['Txt2'];
    echo ("Second text is: " . $t2 ) ;
}
else
{
    $t2 = NULL;
    echo '<p>You didn\'t enter the second string. Please enter a string';
}
echo "<br><br>";
 
    if($t1 && $t2){
         if(isset($_POST['AddStrings'])){
             $a = $t1 . ' '. $t2;
           echo ("Your sentence is: " . $a);
        }
        elseif(isset($_POST['implode'])){
            $t = array("$t1", "$t2");
            echo implode(( $t),' PHP ');
             
        }
    elseif(isset($_POST['Count'])){
        
         $l1= strlen($t1);
        $l2= strlen($t2);
        
        $l = $l1 + $l2;
        
        echo ("Numbers of letters are: " . $l);
        }
        else
        {
            
        }
    }     
    
?>
    </div>