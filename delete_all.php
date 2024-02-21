<?php
$servername = "localhost";
$username = "root";
$password = "Imran@2210";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Construct SQL query to delete all records from students table
$sql = "DELETE FROM students";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "All records deleted successfully";
    // Redirect back to index.php after deletion
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    echo "Error deleting records: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
