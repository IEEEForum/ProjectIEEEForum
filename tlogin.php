<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teachersignup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}

$email=$_POST['p1'];
$pass=$_POST['p2'];

$sql = "SELECT email, web_password FROM users WHERE email='$email' AND web_password = '$pass' ";
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