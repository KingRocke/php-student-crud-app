<?php

// Step 1: Define connection settings
$host = 'localhost';
$database = 'student_crud';
$username = 'root';
$password = '';


// create a database connection with mysqli_connect
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
