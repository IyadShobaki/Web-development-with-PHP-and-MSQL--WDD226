<?php
$conn = mysqli_connect("localhost", "root","****");
if ($conn === false)
{
    die("Error: could not connect. " . mysqli_connect_error());
}
    $sql = "create database myDemo_is collate utf8mb4_bin";
    if(mysqli_query($conn, $sql))
    {
        echo "Database created successfully!";
    }
    else{
        echo "Error creating a database! " . mysqli_error($conn);
        
    }
    

mysqli_close($conn);
?>