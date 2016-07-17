<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$name = "shruti";
	$news = "class_there";
	$deliveredToYear = 3;
	$deliveredToBatches = "B9,b7";
	$query = "INSERT INTO batchNews(news,deliveredBy,deliveredToYear,deliveredToBatches) VALUES('$news','$name','$deliveredToYear','$deliveredToBatches')";
	$run = mysqli_query($con,$query)or die(mysqli_error($con));
	if($run)
	{
		$queryy = "SELECT * FROM batchNews WHERE deliveredBy = '$name' ORDER BY newsId DESC";
		$runn = mysqli_query($con,$queryy)or die(mysqli_error($con));
		$row = mysqli_fetch_assoc($runn);
		$arr = explode(',',$row['deliveredToBatches']);
		
		for($i=0;$i<count($arr);$i++)
		{
			$ai = $arr[$i];
			$rowdeliveredToYear = $row['deliveredToYear'];
			$quer = "SELECT batchNews FROM student WHERE batch='$ai' AND year='$rowdeliveredToYear'";
			$ru = mysqli_query($con,$quer)or die(mysqli_error($con));
			if($ru)
			{
				$r = mysqli_fetch_assoc($ru);
				$a = explode(',',$r['batchNews']);
				$a[count($a)] = $row['newsId'];
				$st = implode(",",$a);
				
				$arri = $arr[$i];
				$q = "UPDATE student SET batchNews='$st' WHERE batch='$arri' AND year = '$rowdeliveredToYear'";
				$t = mysqli_query($con,$q)or die(mysqli_error($con));
			}
		}
		echo 'done';
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