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
    </div>
</body>
</html>
