<?php
include'C:\xampp\htdocs\exam\db.php';
// Get form data
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];

// Insert data into database
$sql = "INSERT INTO teacher (name, username, password, gender) VALUES ('$name', '$username', '$password', '$gender')";
$conn = mysqli_connect("localhost","root","","admin");
if(isset($_POST['username'])){
if (mysqli_query($conn, $sql)) {
  echo "<script>";
  echo "alert('Data Inserted Successfully');";
  echo "window.location.href='admin_faculty_management.php';";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error Inserting Data');";
  echo "window.location.href='admin_faculty_management.php';";
  echo "</script>";
}
}
?>