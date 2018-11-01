<?php 
/*  Iyad Shobaki
    FALL 2018 WEB DEV WITH PHP AND MYSQL
    Professor  Kathy Ison
    Week 10 Lab
    10/28/2018 */
$page_title = 'Welcome to my website!';
include('includes/header.html');

?>

<?php
date_default_timezone_set("America/New_York") ;

echo '<div id="today">'. 
"Today is " . date("l") . ", " .
 date("F d, Y") .
"<br>" . '<div id="arrow">&#8595</div>'.
'</div>';
?>
<div id="imgquote">
<?php
$today = date("l");  //determine today's date
echo '<form id="form1" action="" method="GET">';
echo '<h3 class="Quote">Quote of the day</h3>';
echo '<button type="Submit" name="on">Show</button>';
echo '<button type="Submit" name="off">Hide</button>';
echo '</form>';

if(isset($_GET['on'])){
    getImg($today);
}
?>
<?php
function getImg ($src)
{
    switch($src)
    {
        case "Sunday":
            echo '<img class="imgq"src="images/lift.jpg">' ;
            break;
        case "Monday":
            echo '<img class="imgq" src = "images/ChineseProverb.jpg">';
            break;
        case "Tuesday":
            echo '<img class="imgq" src="images/harley-davidson.jpg">';
            break;
        case "Wednesday":
            echo '<img class="imgq"src="images/hansen.jpg">';
            break;
        case "Thursday":
            echo '<img class="imgq"src="images/disney.jpg">';
            break;
        case "Friday":
            echo '<h3 class="Quote">Quote of the day</h3>';
            break;
        case "Saturday":
            echo '<img class="imgq" src="images/helen-keller.jpg">';
    }
}
    
//getImg($today);


//If today is Monday, a message will display ~ "Today is Monday!" and will also display the image1.gif file
//if($today == "Monday")
//{
//	echo '<h3 class="Quote">Quote of the day</h3>';
//	//images are stored inside an images folder
//	echo '<img class="imgq" src = "images/ChineseProverb.jpg">'; 
//}
//elseif($today == "Tuesday")
//{
//    echo '<h3 class="Quote">Quote of the day</h3>';
//echo '<img class="imgq" src="images/harley-davidson.jpg">';
//}
//elseif($today == "Wednesday")
//{
//    echo '<h3 class="Quote">Quote of the day</h3>';
//echo '<img class="imgq"src="images/hansen.jpg">';
//}
//elseif($today == "Thursday")
//{
//    echo '<h3 class="Quote">Quote of the day</h3>';
//echo '<img class="imgq"src="images/disney.jpg">';
//}
//elseif($today == "Friday")
//{
//echo '<h3 class="Quote">Quote of the day</h3>';
//echo '<img class="imgq"src="images/eleanorroosevelt1.jpg">';
//}
//elseif($today == "Saturday")
//{
//echo '<h3 class="Quote">Quote of the day</h3>' ;
//echo '<img class="imgq" src="images/helen-keller.jpg">';
//}
//elseif($today == "Sunday")
//{
//    echo '<h3 class="Quote">Quote of the day</h3>';
//echo '<img class="imgq"src="images/lift.jpg">';
//}



?>
</div>

    

<?php

include('includes/footer.html');
?>