<?php 
$title=$_GET['title'];
$text=$_GET['text'];
$date=$_GET['date'];
include_once "../functions.php";
addnotes($title,$text,$date);
?>