<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ieee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['t1'];
$name=mysqli_real_escape_string($conn,htmlentities(trim($name)));
$enroll=$_POST['t2'];
$enroll=mysqli_real_escape_string($conn,htmlentities(trim($enroll)));
$batch=$_POST['t3'];
$batch=mysqli_real_escape_string($conn,htmlentities(trim($batch)));
$branch=$_POST['t4'];
$branch=mysqli_real_escape_string($conn,htmlentities(trim($branch)));
$email=$_POST['t5'];
$email=mysqli_real_escape_string($conn,htmlentities(trim($email)));
$password=$_POST['t6'];
$password=mysqli_real_escape_string($conn,htmlentities(trim($password)));
$contact=$_POST['t7'];
$contact=mysqli_real_escape_string($conn,htmlentities(trim($contact)));

$sql = "INSERT INTO users (full_name, enroll_no, Batch, branch, email, webkiosk_password, contact) VALUES ('$name', '$enroll', '$batch', '$branch', '$email', '$password', '$contact')";

if ($conn->query($sql) === TRUE) {
    header("location:studentlogin.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>