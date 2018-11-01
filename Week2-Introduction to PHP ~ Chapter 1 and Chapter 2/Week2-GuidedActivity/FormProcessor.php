<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Feedback</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
</head>
<body>


<?php
if(!empty($_REQUEST['FormName']))
{
    $name = $_REQUEST['FormName'];
}
else
{
    $name = NULL;
    echo '<p class="error">You didn\'t enter a name. Please enter your name!';
}
if(!empty($_REQUEST['FormMovie']))
{
    $movie = $_REQUEST['FormMovie'];
}
else
{
    $movie = NULL;
    echo '<p class="error">You didn\'t enter a movie. Please enter your favorite movie!';
}
   
if(is_numeric($_REQUEST['FormAge']))
{
    $age = $_REQUEST['FormAge'];
    if($age < 18)
    {
        echo'<p>You can\'t vote!</p>';
    }
    else
    {
        echo"<p>You can vote</p>";
    }
}
else
{
    $age = false;
    echo'<p class="error">You didn\'t enter an age.Please enter your age as a number!';
    
}

if($name && $movie && $age)
{
  echo "<p>Thank you <strong>$name</strong>, for sharing this information! We so appreciate your feedback!</p>";  
}
else
{
    echo '<p class="error"> Please enter the required data!'."<br><br>";
}
?>
<?php
    $select = ($_REQUEST['Select']);
    switch($select)
    {
        case "ferrari":
            echo "Your favorite car is <span>Ferrari!!!!</span>";
            break;
        case "lamborghini":
            echo "Your favorite car is <span>Lamborghini!!!!</span>";
            break;
        case "porsche":
            echo "Your favorite car is <span>Porsche!!!!</span>";
            break;
        case "bugatti":
            echo "Your favorite car is <span>Bugatti!!!!</span>";
            break;
    }
?>

    
</body>
</html>