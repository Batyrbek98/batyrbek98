<?php 
session_start();
$login=$_SESSION['login'];
$dop=$_SESSION['position'];
if(empty($_SESSION['login'])){
echo "<meta http-equiv='Refresh' content='0; URL=../index.php'>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php 
include_once '../functions.php';
show_namesur($login);
?></title>
	<meta charset="keywords" description="">
	<script type="text/javascript" src="../script/jsq1.js"></script>
	<script type="text/javascript" src="../script/jsq2.js"></script>
	<script type="text/javascript" src="../script/jsq3.js"></script>
	<script type="text/javascript" src="../script/jsq6.js"></script>
	<link href="../images/favicon.ico" rel="icon" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<title></title>
</head>
<body>
<div id="left_s">
<?php 
require_once "main_menu.php";
?>
</div>	
<div id='bottom_address'>
Abylaikhan St, Kaskelen, Almatinskaya St 1/1, 040900, Kazakhstan<br><br>
 +7 727 307 9565
</div>
<div id='bottom_link'>
Created by Yessenamanov Batyrbek. &copy Suleyman Demirel University. 2015
</div>
<div id="all_center">
<?php 
if($dop=="+"){
require_once "profile.php";
}
else{
	echo "<div id='ne_reg'><div id='full_reg'>";
	require_once "registr.php";
	echo "</div>";
	echo "<div id='main_s'>";
	include_once "../functions.php";
	show_profile($login);
	echo "</div></div>";
}
?>
</div>
</body>
</html>