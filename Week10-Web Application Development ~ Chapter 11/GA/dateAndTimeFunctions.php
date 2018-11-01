<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
<head>
	<title>Date and Time Functions</title>
</head>
<body>
<!--php scripts-->
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?> 
<?php
echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");
?>
<?php
echo "The time is " . date("h:i:sa")."<br>";
?>
<?php
date_default_timezone_set("America/New_York")."<br>";
echo "The time is " . date("h:i:sa")."<br>";
?> 
<?php
//Determine the number of days between two dates
//Start Date
$then = "1957-08-12";
 
//Convert it into a timestamp.
$then = strtotime($then);
 
//Get the current timestamp.
$now = time();
 
//Calculate the difference.
$difference = $now - $then;
 
//Convert seconds into days.
$days = floor($difference / (60*60*24) );
 
echo "The difference between ". $then. " and " . $now. "is " .$days. "<br><br>";
echo "The number of years from " . $then . " is " . $days / 365 . "<br><br>";
?>
<?php
$today = date("l");  //determine today's date

//If today is Monday, a message will display ~ "Today is Monday!" and will also display the image1.gif file
if($today == "Monday")
{
	echo "Today is Monday, the start of a work week!" . "<br><br>";
	//images are stored inside an images folder
	echo "<img src = 'images/image1.gif'>" . "<br><br>"; 
}
elseif($today == "Tuesday")
{
echo "Today is Tuesday" . "<br><br>";
echo "<img src='images/image2.gif'>" . "<br><br>";
}
?> 
</body></html>   










