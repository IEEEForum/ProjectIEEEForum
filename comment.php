<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	if($_SESSION['name']=="")
	{
		header("location:loginn.php");
	}
	else
	{
	$id = $_GET['name'];
	$com = $_POST['comment'];
	$answeredBy = $_SESSION['name'];
	$query = "INSERT INTO postanswer(postId,answer,answeredBy) VALUES('$id','$com','$answeredBy')";
	$run = mysqli_query($con,$query);
	if($run)
	{
		header("location:home.php");
	}
	}
}

?>