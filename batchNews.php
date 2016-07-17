<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$name = "mayankk";
	$query = "SELECT batchNews FROM student where name = '$name'";
	$run = mysqli_query($con,$query)or die(mysqli_error($con));
	if($run)
	{
		$row = mysqli_fetch_assoc($run);
		//echo $row['batchNews'];
		$arr = explode(',',$row['batchNews']);
		$length = count($arr);
		//print_r(array_values($arr));
		for($i=0;$i<$length;$i++)
		{
			$id = $arr[$i];
			$quer = "SELECT * FROM batchNews WHERE newsId = '$id'";
			$ru = mysqli_query($con,$quer)or die(mysqli_error($con));
			if($ru)
			{
				$rr = mysqli_fetch_assoc($ru);
				echo $rr['news'];
				echo $rr['deliveredBy'];
				echo '<br>';
			}

		}
		
	}
	
}
?>

<html>
<body>
<form action = "" method = "post">
<input type = "submit" name= "submit" value= "click">
</form>
</body>
</html>