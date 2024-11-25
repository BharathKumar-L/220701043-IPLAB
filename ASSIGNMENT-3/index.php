<?php
include 'db.php';
$query = "SELECT * FROM events";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Event Management System</h1>
        <nav>
            <ul>
                <li><a href="events.php">Events</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to the Event Management System</h2>
        <section class="featured-events">
            <h3>Featured Events</h3>
            <?php while ($event = mysqli_fetch_assoc($result)): ?>
            <div class="event-card">
                <h4 class="event-title"><?php echo $event['title']; ?></h4>
                <p class="event-details"><?php echo $event['description']; ?> ,Date: <?php echo $event['date']; ?>, Location: <?php echo $event['location']; ?>, Price: $<?php echo $event['price']; ?></p>
            </div>
            <?php endwhile; ?>
        </section>
    </main>
</body>
</html>
