<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ieee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}

$enroll=$_POST['p1'];
$enroll=mysqli_real_escape_string($conn,htmlentities(trim($enroll)));
$pass=$_POST['p2'];
$pass=mysqli_real_escape_string($conn,htmlentities(trim($pass)));

$sql = "SELECT enroll_no, webkiosk_password FROM users WHERE enroll_no='$enroll' AND webkiosk_password = '$pass' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) 
     {
		echo "login successful";
	}
	else 
	{
    echo "invalid login";
	}


mysqli_close($conn);
?>