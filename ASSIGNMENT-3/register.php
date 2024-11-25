<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        $successMessage = "Registration successful. <a href='login.html'>Login here</a>";
    } else {
        $successMessage = "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message-container {
            background-color: #fff;
            padding: 20px 30px;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .message-container h1 {
            font-size: 24px;
            color: #388e3c;
            margin-bottom: 10px;
        }
        .message-container p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }
        .message-container a {
            text-decoration: none;
            color: #1e88e5;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .message-container a:hover {
            color: #1565c0;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <?php if (isset($successMessage)) { ?>
            <h1>Success!</h1>
            <p><?php echo $successMessage; ?></p>
        <?php } else { ?>
            <h1>Error</h1>
            <p>There was an issue with your registration. Please try again.</p>
        <?php } ?>
    </div>
</body>
</html>
