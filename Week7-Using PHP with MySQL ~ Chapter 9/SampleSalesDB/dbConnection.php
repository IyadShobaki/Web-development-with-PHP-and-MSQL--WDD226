<?php

//create a variable; you will see this variable name modified througout various activities, you will develop your own naming scheme

//the connection needs four (4) arguments:
//1st = the name of the server, in this case localhost
//2nd = the name of the user, in this case root
//3rd = the password, which could be empty
//4th = the name of the database

$connection = mysqli_connect("localhost" , "root" , "****", "myTest_is");

if(!$connection)
    {
        echo "Connection ERROR! ".mysqli_connect_error();
    }
?>

