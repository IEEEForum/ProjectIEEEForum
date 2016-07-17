<?php
include 'aes.php';
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"test");

if(isset($_POST['submit']))
{
	
	$enc = $_GET['name'];
	echo $enc;
	echo '<br>';
	for($i=0;$i<strlen($enc);$i++)
	{
		if($enc[$i]==" ")
		{
			$enc[$i] = "+";
		}
	}
	echo $enc;
	echo '<br>';
	$inputKey = "My text  encrypt";
	$blockSize = 256;
	$inputText="iam";
	$ae = new AES($enc, $inputKey, $blockSize);
	$ae->setData($enc);
	$dec=$ae->decrypt();
		
	//echo $_GET['name'];
	//echo '<br>';
	echo $dec;
}
?>