<?php

include 'db.php';
header('Content-Type: application/json');

$student_reg_no = $_GET['student_reg_no'] ?? '';

if ($student_reg_no) {
    $stmt = $conn->prepare("SELECT student_reg_no, student_name, student_email FROM students WHERE student_reg_no = ?");
    $stmt->bind_param("s", $student_reg_no);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

    echo json_encode($student);
} else {
    echo json_encode(null);
}

$stmt->close();
$conn->close();
?>