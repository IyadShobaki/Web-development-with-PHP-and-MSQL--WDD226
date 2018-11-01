<?php
// $conn = mysqli_connect("localhost", "root", "****");
// if ($conn === false){
//     die("Error: Could not connect. " . mysqli_connect_error());
// }
// $sql = "create database SalesData_iy collate utf8mb4_bin";
// if(mysqli_query($conn, $sql)){
//     echo "Database created successfully!";
// }
// else{
//     echo "Error creating a databse! " . mysqli_error($conn);

// }
// mysqli_close($conn);

// $conn = mysqli_connect("localhost", "root", "****", "SalesData_iy");
// if ($conn === false){
//     die("Error: Could not connect. " . mysqli_connect_error());

// }
// $sql = "create table Sales(
//         ID int(11) not null auto_increment,
//         Name varchar(50) character set utf8 not null,
//         Item varchar(50) character set utf8 not null,
//         Date date not null,
//         Amount int(11) not null,
//         primary key (ID))";

// echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);

// if (mysqli_query($conn, $sql)){
//     echo "Table Sales created successfully!";
// }
// else{
//     echo "Error creating table: " . mysqli_error($conn);
// }
// mysqli_close($conn);


$conn = mysqli_connect("localhost", "root", "****", "SalesData_iy");
if ($conn === false){
    die("Error: Could not connect. " . mysqli_connect_error());

}
$sql = "INSERT INTO `sales` (`id`, `name`, `item`, `date`, `amount`) VALUES
(1, 'Andrew', 'Television', '2016-06-07', 2500),
(2, 'Bryan', 'Washing Machine', '2016-07-10', 1100),
(3, 'Cherly', 'Water Dispenser', '2016-08-11', 95),
(4, 'Dean', 'Refrigerator', '2016-09-15', 583),
(5, 'Esryl', 'Wall Fan', '2016-10-11', 45),
(6, 'Franky', 'Steam Iron', '2016-10-17', 0),
(7, 'Gerry', 'Air Conditioner', '2016-11-17', 325);";

echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);

if (mysqli_query($conn, $sql)){
    echo "Table Contacts created successfully!";
}
else{
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);

?>