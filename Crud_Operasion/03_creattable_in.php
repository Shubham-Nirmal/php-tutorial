<?php 

// connecting to the Database 

$servername = "localhost";
$username = "root";
$password = "Shubham@36";
$database = "shubham";

// Create a connection 

$conn = mysqli_connect($servername, $username, $password, $database);


// Die if connection was not successful 
if (!$conn) {
    die("Sorry we failed to connect ". mysqli_connect_error());
}

echo "Connection was successful <br> ";


// Create a table in the db
$sql = "CREATE TABLE `trip` (
    `sno` INT(6) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(12) NOT NULL,
    PRIMARY KEY (`sno`)
)";

$result = mysqli_query($conn, $sql);

// check for the table  creation scuccess
if ($result) {
   echo"The   table was created successfully";
}else{
    
   echo"The  table was not created successfully".mysqli_error($conn);
}

echo "The result is ";
echo var_dump($result);
echo "<br>";




?>