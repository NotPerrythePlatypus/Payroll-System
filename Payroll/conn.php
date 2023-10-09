<?php

// Connecting to the Database
$servername = "sql104.epizy.com";
$username = "epiz_30008062";
$password = "RZdIMKs9QUH6iY";
$database = "epiz_30008062_payroll";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>