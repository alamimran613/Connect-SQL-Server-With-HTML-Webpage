<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include CSS file -->
</head>
<body>
    <div class="container">
        <h1>Student Information Form</h1>
        <!-- Form for adding a new student -->
        <form action="insert.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="class">Class:</label>
            <input type="text" id="class" name="class" required><br><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>
            <input type="submit" value="Submit">
        </form>

        <hr>

        <h1>Student Records</h1>
        <!-- Display student records -->
        <?php include 'display.php'; ?>
        
        <!-- Button to delete all records -->
        <form action="delete_all.php" method="POST" onsubmit="return confirmDelete();">
            <input type="submit" value="Delete All Records">
        </form>
    </div>

    <script>
    function confirmDelete() {
        // First confirmation
        var firstConfirmation = confirm('Are you sure you want to delete all records?');
        if (firstConfirmation) {
            // Second confirmation
            var secondConfirmation = confirm('This action cannot be undone. Are you sure you want to proceed?');
            if (secondConfirmation) {
                return true; // Proceed with deletion
            } else {
                return false; // Cancel deletion
            }
        } else {
            return false; // Cancel deletion
        }
    }
    </script>
</body>
</html>
