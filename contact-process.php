<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
session_start();

$to = "sentiencecloud@gmail.com";
$subject = "Enquiry by $name | $phone";
$txt = "$message";
$headers = "From: $email". "\r\n";
if(@mail($to,$subject,$txt,$headers))
{
	$_SESSION['email-s']="1";
}else{
	$_SESSION['email-f']="1";
}
header("Location: contact");
?>