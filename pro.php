<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}
$a=$_POST['txt'];
$b=$_POST['pro'];
$c=$_POST['type'];
if($c=="Share With")
{
	echo json_encode("Select Share With");
}
else
//$arr = array($c,$a,$b);
 //echo json_encode($arr);
 {
 $sql="INSERT INTO profile VALUES ('$c','$a','$b',NOW())";
 $resu = mysqli_query($conn, $sql);
 echo json_encode ("Response Recorded.");
 }
mysqli_close($conn);
?>