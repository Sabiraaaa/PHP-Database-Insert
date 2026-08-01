<?php
// Include database connection file
include 'dbconnect.php';

// Get data from HTML form using POST method
$name = $_POST['name'];
$dept = $_POST['dept'];

// SQL query to insert data into table
$sql = "INSERT INTO info (name, dept) VALUES ('$name', '$dept')";

// Execute the SQL query
if (mysqli_query($con, $sql)) {
    // Message if data inserted successfully
    echo "Insert successfully completed";
} else {
    // Message if any error occurs
    echo "Error: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);
?>