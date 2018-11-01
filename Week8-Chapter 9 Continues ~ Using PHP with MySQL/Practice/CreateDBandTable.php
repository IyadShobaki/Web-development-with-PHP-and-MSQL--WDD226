<?php
// $conn = mysqli_connect("localhost", "root", "****");
// if ($conn === false){
//     die("Error: Could not connect. " . mysqli_connect_error());
// }
// $sql = "create database Practice_W8 collate utf8mb4_bin";
// if(mysqli_query($conn, $sql)){
//     echo "Database created successfully!";
// }
// else{
//     echo "Error creating a databse! " . mysqli_error($conn);

// }
// mysqli_close($conn);

$conn = mysqli_connect("localhost", "root", "****", "Practice_W8");
if ($conn === false){
    die("Error: Could not connect. " . mysqli_connect_error());

}
$sql = "create table Contacts(
        ID int(5) unsigned auto_increment primary key,
        FirstName varchar(30) not null,
        LastName varchar(30) not null,
        Email varchar(75))";

echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);

if (mysqli_query($conn, $sql)){
    echo "Table Contacts created successfully!";
}
else{
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>