<?php
$servername = "localhost";
$username = "root"; 
$password = "Bhk@2005/";
$dbname = "event_management"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
