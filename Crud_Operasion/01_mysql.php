<?php 
echo"Welcome to the stage where we are ready to get connected to a database <br> ";

/*
ways to connect to a mysql Database 

1) mysqli extension 
2) PDO

*/

$servername = "localhost";
$username = "root";
$password = "Shubham@36";

// Create a connection 

$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful 
if (!$conn) {
    die("Sorry we failed to connect ". mysqli_connect_error());
}

echo "Connection was successful";



?>