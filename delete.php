<?php
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if Roll_No parameter is set
if (isset($_POST['Roll_No'])) {
    // Sanitize the Roll_No parameter to prevent SQL injection
    $Roll_No = $conn->real_escape_string($_POST['Roll_No']);
    
    // Construct SQL query to delete the record with the provided Roll_No
    $sql = "DELETE FROM students WHERE Roll_No = '$Roll_No'";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Return success response
        echo "Record deleted successfully";
    } else {
        // Return error response
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // If Roll_No parameter is not set, return an error response
    echo "Roll_No parameter is not set";
}

// Close the database connection
$conn->close();
?>
