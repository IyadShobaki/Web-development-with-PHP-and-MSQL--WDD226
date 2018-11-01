<?php
require('dbConnection.php');

$sql = "select FirstName, LastName, Email from Contacts";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    echo "<p> There are currently $num contacts in this table.</p>\n";
    while($row = mysqli_fetch_assoc($result)){
        echo "Name: " . $row["FirstName"]. " " . $row["LastName"]. " " . "<br>" . " Email: " .$row["Email"]. "<br><br>";

    }
}
    else{
        echo "No results found";
    }

mysqli_close($conn);

?>