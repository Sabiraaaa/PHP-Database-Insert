<?php
// Create connection with MySQL database
$con = mysqli_connect("localhost", "root", "", "sabira");

// Check database connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>