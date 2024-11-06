<?php
header('Content-Type: application/json');

include 'db.php';

$sql = "SELECT student_reg_no FROM students";
$result = $conn->query($sql);

$students = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

echo json_encode($students);

$conn->close();
?>

