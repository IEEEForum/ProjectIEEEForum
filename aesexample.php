<?php

include 'aes.php';
$inputText = "My text to encrypt";
$inputKey = "My text  encrypt";
$blockSize = 256;
$aes = new AES($inputText, $inputKey, $blockSize);
$enc = $aes->encrypt();
$aes->setData($enc);
$dec=$aes->decrypt();
echo "After encryption: ".$enc."<br/>";
echo "After decryption: ".$dec."<br/>";

?>