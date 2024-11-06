<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <h1>Welcome to the Employee Management System</h1>
    <p>Select an action below to manage employee information:</p>

    <nav>
        <ul>
            <li><a href="insert_employee.php">Add New Employee</a></li>
            <li><a href="display_employees.php">View All Employees</a></li>
            <li><a href="update_employee.php">Update Employee Information</a></li>
            <li><a href="delete_employee.php">Delete Employee</a></li>
        </ul>
    </nav>

    <style>
        /* Basic styling for navigation */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #ffffff;
        }
        p{
            color: #ffffff;
            font-weight: 900;
        }

        nav ul {
            list-style-type: none;
            padding: 30px;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
            padding: 40px 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #003366;
        }
    </style>
</body>
</html>
