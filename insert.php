<?php
$servername = "localhost";
$username = "root";
$password = "Imran@2210";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['address'];

// Insert data into database
$sql = "INSERT INTO students (Name, Class, Address) VALUES ('$name', '$class', '$address')";
if ($conn->query($sql) === TRUE) {
    // Echo JavaScript code to display popup message and refresh page
    echo "<script>alert('Record Saved');";
    echo "window.location.href = 'index.php';";  // Redirect to index.php
    echo "document.getElementById('myForm').reset();"; // Reset form fields
    echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
