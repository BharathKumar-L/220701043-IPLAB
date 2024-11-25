<?php
require 'db.php';

$stmt = $conn->query("SELECT users.username, scores.score, scores.created_at 
                      FROM scores 
                      JOIN users ON scores.user_id = users.id 
                      ORDER BY scores.score DESC");

$scores = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Leaderboard</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Score</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $score): ?>
            <tr>
                <td><?= htmlspecialchars($score['username']) ?></td>
                <td><?= $score['score'] ?></td>
                <td><?= $score['created_at'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
