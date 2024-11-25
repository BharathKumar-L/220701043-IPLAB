<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access.");
}

$user_id = $_SESSION['user_id'];
$score = $_POST['score'];

$stmt = $conn->prepare("INSERT INTO scores (user_id, score) VALUES (?, ?)");
if ($stmt->execute([$user_id, $score])) {
    echo "Score saved successfully.";
} else {
    echo "Failed to save score.";
}
?>
