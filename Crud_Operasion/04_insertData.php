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


 $sql = "INSERT INTO `trip` (`sno`, `name`) VALUES ('3', 'Nitin  ')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the data base 
if ($result) {
   echo"The   recrod has been  successfully <br> ";
}else{
    
   echo"The   recrod was not created successfully".mysqli_error($conn);
}


?>