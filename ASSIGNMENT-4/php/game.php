<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Obstacle Game</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
    <div id="game-container">
        <div id="player"></div>
        <div id="obstacle"></div>
    </div>
    <div id="score-display">Score: <span id="score">0</span></div>
    <button id="save-score">Save Score</button>
</body>
</html>
