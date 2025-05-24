<?php 

// connecting to the Database 

$servername = "localhost";
$username = "root";
$password = "Shubham@36";

// Create a connection 

$conn = mysqli_connect($servername, $username, $password);


// Die if connection was not successful 
if (!$conn) {
    die("Sorry we failed to connect ". mysqli_connect_error());
}

echo "Connection was successful <br> ";


// Create a database 
 
$sql = "CREATE DATABASE shubham367 ";
$result = mysqli_query($conn, $sql);

// check for the database creation scuccess
if ($result) {
   echo"The  db was created successfully";
}else{
    
   echo"The  db was not created successfully".mysqli_error($conn);
}

echo "The result is ";
echo var_dump($result);
echo "<br>";






?>