<?php
$name=$_GET['name'];
$sur=$_GET['sur'];
$password=$_GET['password'];
$age=$_GET['age'];
$gend=$_GET['gender'];
$mail=$_GET['mail'];
include_once "../functions.php";
registration($name,$sur,$password,$age,$gend,$mail);
?>