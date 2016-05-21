<?php
$mail=$_GET['mail'];
$pass=$_GET['check_pass'];
include_once '../functions.php';
check_login($mail,$pass);
?>