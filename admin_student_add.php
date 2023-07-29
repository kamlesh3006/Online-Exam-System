<?php
include'C:\xampp\htdocs\exam\db.php';
// Get form data
$username = $_POST['username'];
$kbtugid = $_POST['kbtugid'];
$password = $_POST['password'];
$gender = $_POST['gender'];

// Insert data into database
$sql = "INSERT INTO student (username, kbtugid, password, gender) VALUES ('$username', '$kbtugid', '$password', '$gender')";
$conn = mysqli_connect("localhost","root","","admin");
if(isset($_POST['username'])){
if (mysqli_query($conn, $sql)) {
  echo "<script>";
  echo "alert('Data Inserted Successfully');";
  echo "window.location.href='admin_student.php';";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error Inserting Data');";
  echo "window.location.href='admin_student.php';";
  echo "</script>";
}
}
?>