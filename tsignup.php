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
$name=mysqli_real_escape_string($conn,htmlentities(trim($name)));
$depart=$_POST['t2'];
$depart=mysqli_real_escape_string($conn,htmlentities(trim($depart)));
$email=$_POST['t3'];
$email=mysqli_real_escape_string($conn,htmlentities(trim($email)));
$password=$_POST['t4'];
$password=mysqli_real_escape_string($conn,htmlentities(trim($password)));
$contact=$_POST['t5'];
$contact=mysqli_real_escape_string($conn,htmlentities(trim($contact)));




$sql = "INSERT INTO tsignup (full_name, depart, email, web_password, contact) VALUES ('$name', '$depart', '$email', '$password', '$contact')";

if ($conn->query($sql) === TRUE) {
    header("location:teacherlogin.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>