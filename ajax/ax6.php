<?php 
session_start();
$login=$_SESSION['login'];
$id=$_SESSION['id'];
$ln=$_GET['flname'];
$cn=$_GET['fcname'];
$fac=$_GET['facn'];
$pro=$_GET['pron'];
$batya=$_GET['batya'];
$dataw=$_GET['dataw'];
$gro=$_GET['gro'];
$crs=$_GET['crs'];
include_once "../functions.php";
registrfull($id,$login,$ln,$cn,$fac,$pro,$batya,$dataw,$gro,$crs);
for_batya($id,$batya,$dataw);
?>