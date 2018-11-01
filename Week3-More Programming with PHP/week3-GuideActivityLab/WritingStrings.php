<!--Iyad Shobaki
    FALL 2018 WEB DEV WITH PHP AND MYSQL
    Professor  Kathy Ison
    GuidedAcivity_Lab
    9/11/2018 -->
<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
    <link rel="stylesheet" href="style.css">
    <a href="#Modify"> Click here to go to Activity #4 modified </a>
<head>
	<title>Writing Strings</title>
	<!--activity #1 solution-->
</head>
<body>
<!--php script-->
<?php
echo '<h2>Activity #1</h2>';
echo 'Tomorrow I \'ll learn PHP global variables.'."\n"; 
echo '<p>Do you know what this command does? ~ del c:\\*.*'."\n</p>"; 
echo '<p>It\'s a shame we never seem to accomplish all of our daily tasks.  Why do you suppose that is the case?'."\n</p>";
    
?>

<!--activity #2 solution-->

<?php
echo '<h2>Activity #2</h2>';
$var = 'PHP Tutorial';
?>

  <h3><?php echo $var; ?></h3>
  
  <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
  <p>Check out this site for excellent PHP techniques: <a href="https://www.codementor.io/community/topic/php-7">Go to the <?php echo $var; ?></a>.</p>
  
  
  <!--activity #3 solution-->
  
  <?php
    echo '<h2>Activity #3</h2>';
    
    /*use the ord() function 
    return ASCII value of a character or the first character of a string.*/
    
    for ($x = ord('a');
        $x <= ord('z');
        $x++)
        
   /*use the chr() function 
   returns a character from the specified ASCII value*/        
        echo chr($x);
        echo "\n"
  ?>    
  
  
  <!--activity #4 solution-->
  
  <?php
    echo '<h2>Activity #4</h2>';
    $myString = 'If it’s important to you, you’ll find a way. If not, you’ll find an excuse.';
    
    /*the implode() method joins array elements and outputs them as a single string. This is useful when you need to create one string out of a set of array values.*/
    
    /*explode is the opposite of implode and uses a delimiter to decide where to break up a string. It is usually the simplest way to break up a string into an array.*/
    
    /*The array_slice() function returns selected parts of an array.*/
     
   echo implode(' ', array_slice(explode(' ', $myString), 0, 5))."\n";
?>
   
<h2 id="Modify">Activity #4 modified</h2>
<?php
 
  $myString = "If it’s important to you, you’ll find a way. If not, you’ll find an excuse.";
  /*the chop() method to remove a white space or other predefined character from the right end of a string.*/
  /*You have to write until the full stop, if you try this code without full stop you will not have a result.
  echo chop($myString,"find an excuse"); */
  echo $myString . "<br>";  
  echo chop($myString,"find an excuse.");
  /*ltrim() method is the opposite for chop(), it will remove the white space or other character from the left side of a string*/
?>
    <br><br>
<?php
  $myString = 'If it\'s important to you, you\'ll find a way. If not, you\'ll find an excuse.';
  echo $myString . "<br>";
    /*Notice that we have to start with If*/
  echo ltrim ($myString, "If it");
?>


<!--activity #5 solution-->
  
  <?php
    echo '<h2>Activity #5</h2>';
    $str1 = "2,543.12";
    
    /*The str_replace() function replaces some characters with some other characters in a string.*/
        $x = str_replace( ',', '', $str1);
    
    /*The is_numeric() function is used to check whether a variable is numeric or not.*/
            if( is_numeric($x))
            {
                echo $x."\n";
            }
    ?>
    
    
    <!--activity #6 solution-->
  
  <?php
    echo '<h2>Activity #6</h2>';    
    
    for ($i = 1; $i < 13; $i++)
        {
         
          for ($j = 1; $j < 13; $j++) 
            {
               if ($j == 1) 
                {
                    /*The str_pad() function pads a string to a new length.*/
                  echo str_pad($i * $j, 2, " ", STR_PAD_LEFT);
                } 
               else 
               {
                   echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
                }
            }
                echo "<br>";
        }
    ?>
    
    
  
    
</body>
</html>  