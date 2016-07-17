<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"test");
if(isset($_POST['submit']))
{
	$arr = array('hello','world','i','am','good');
	print_r(array_values($arr));
	$str = implode(",",$arr);
	$query = "INSERT INTO test(news) VALUES('$str')";
	$run = mysqli_query($con,$query)or die(mysqli_error($con));
	if($run)
	{
	echo "nice";
	}
	$id = "3";
	$quer = "SELECT news from test where id = '$id'";
	$r= mysqli_query($con,$quer)or die(mysqli_error($con));
	$rr= mysqli_fetch_assoc($r);
	if($r)
	{
		$a = explode(',',$rr['news']);
		print_r(array_values($a));
		echo $a[3];
		echo '<br>';
		echo count($a);
		$a[count($a)] = "hiii again";
		echo '<br>';
		print_r(array_values($a));
		$st = implode(",",$a);
		$q = "Insert into test(news) values('$st')";
		$t = mysqli_query($con,$q);
		if($t)
			echo "work done";
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