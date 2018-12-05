<?php
$conn = mysqli_connect("localhost", "root", "Password", "Tulip");
if(!$conn){
    echo "Connection Error! " . mysqli_connect_error();
}
?>