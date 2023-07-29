<?php
include'C:\xampp\htdocs\exam\db.php';
// Get form data
$exam_name = $_POST['exam_name'];
$subject = $_POST['subject'];
$duration = $_POST['duration'];
$questions = $_POST['questions'];

// Insert data into database
$sql = "INSERT INTO teacher_exam (exam_name, subject, duration, questions) VALUES ('$exam_name', '$subject', '$duration', '$questions')";
$conn = mysqli_connect("localhost","root","","admin");
if (mysqli_query($conn, $sql)) {
  echo "<script>";
  echo "alert('Data Inserted Successfully');";
  echo "window.location.href='teacher_exam.php';";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error Inserting Data');";
  echo "window.location.href='teacher_exam.php';";
  echo "</script>";
}

?>