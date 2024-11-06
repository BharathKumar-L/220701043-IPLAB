<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <h2>Delete Employee</h2>
    <form method="POST" action="delete_employee.php">
        <label for="name">Enter Employee Name or ID:</label>
        <input type="text" name="name" required><br>
        <input type="submit" value="Delete Employee">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db.php';
        $name = $_POST['name'];

        // Prepare and bind the statement
        $stmt = $conn->prepare("DELETE FROM Employee WHERE Name = ? OR EmpID = ?");
        $stmt->bind_param("si", $name, $name); // Assuming EmpID is an integer

        // Execute the statement
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Employee deleted successfully.');</script>";
            } else {
                echo "<script>alert('No employee found with that name or ID.');</script>";
            }
        } else {
            echo "<script>alert('Error in deleting employee: " . $conn->error . "');</script>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

    <br>
    <button onclick="window.location.href='index.php'">Back to Home</button>
</body>
</html>
