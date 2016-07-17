<?php
include 'aes.php'; 
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"test");

$q = "SELECT * FROM tester";
$r = mysqli_query($con,$q);

if($r)
{
	$post = [];
	$i=0;
	while($rr = mysqli_fetch_assoc($r))
	{
		echo $rr['text'];
		$post[$i] = $rr['text'];
		$name =$post[$i]; 
		
		$inputText = $name;
		$inputKey = "My text  encrypt";
		$blockSize = 256;
		$aes = new AES($inputText, $inputKey, $blockSize);
		$enc = $aes->encrypt();
		$aes->setData($enc);
		$dec=$aes->decrypt();
		echo "After encryption: ".$enc."<br/>";
		echo "After decryption: ".$dec."<br/>";
		
		echo '<form method="post" action="ts.php?name='.$enc.'">';
		echo '<input type = "submit" name = "submit" value = "click">';
		echo '</form>';
		$i++;
	}		
}
?>		