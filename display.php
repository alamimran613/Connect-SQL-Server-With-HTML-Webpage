<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$dbname = "students";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch student records
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output student records in a table
    echo "<table>";
    echo "<tr><th>Name</th><th>Class</th><th>Address</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Class"] . "</td>";
        echo "<td>" . $row["Address"] . "</td>";
        echo "<td><button onclick='deleteRecord(" . $row["Roll_No"] . ")'>Delete</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No student records found.";
}

$conn->close();
?>
<script>
function deleteRecord(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        // Send AJAX request to delete the record
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Refresh the page after successful deletion
                window.location.reload();
            }
        };
        xhr.send("Roll_No=" + id);
    }
}
</script>
