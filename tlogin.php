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
$email=mysqli_real_escape_string($conn,htmlentities(trim($email)));
$pass=$_POST['p2'];
$pass=mysqli_real_escape_string($conn,htmlentities(trim($pass)));

$sql = "SELECT email, web_password FROM tsignup WHERE email='$email' AND web_password = '$pass' ";
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