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
$enroll=$_POST['t2'];
$batch=$_POST['t3'];
$branch=$_POST['t4'];
$email=$_POST['t5'];
$password=$_POST['t6'];
$contact=$_POST['t7'];

$sql = "INSERT INTO users (full_name, enroll_no, Batch, branch, email, webkiosk_password, contact) VALUES ('$name', '$enroll', '$batch', '$branch', '$email', '$password', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>