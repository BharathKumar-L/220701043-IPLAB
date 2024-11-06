
<?php
$servername = "localhost";
$username = "root";
$password = "Bhk@2005/";
$dbname = "BankingApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
