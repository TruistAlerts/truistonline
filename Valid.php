<?php
@session_start();
//var_dump($_SERVER);die;

if(empty($_SESSION['ValidCaptcha']))
//    return 1;
    header('Location: ../index.php');
