<?php
require 'textlocal.class.php';

$userID = "";
$apiKey = "";
$textlocal=new Textlocal(false,false,$apiKey);

$mobile = array(910000000000); //10 digits number with 91 as prefix
$message = "Hello Class";
$sender = 'TXTLCL';
$response = $textlocal->sendSms($mobile,$message,$sender);
print_r($response);
?>