<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teachersignup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['t1'];
$depart=$_POST['t2'];
$email=$_POST['t3'];
$password=$_POST['t4'];
$contact=$_POST['t5'];

$sql = "INSERT INTO tsignup (full_name, depart, email, web_password, contact) VALUES ('$name', '$depart', '$email', '$password', '$contact')";

if ($conn->query($sql) === TRUE) {
    header("location:welcome.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>