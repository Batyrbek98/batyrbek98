<?php  
session_start();
$login=$_SESSION['login'];
$dop=$_SESSION['position'];
if(empty($_SESSION['login'])){

}
else{
echo "<meta http-equiv='Refresh' content='0; URL=social/index.php'>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Unexpected Turn</title>
	<meta charset="keywords" description="">
	<script type="text/javascript" src="script/jsq1.js"></script>
	<script type="text/javascript" src="script/jsq2.js"></script>
	<script type="text/javascript" src="script/jsq3.js"></script>
	<script type="text/javascript" src="script/jsq4.js"></script>
	<link href="images/favicon.ico" rel="icon" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="all">
</div>

<div id="logo_sdu">
<a href=""><img src="images/asw.jpg" width="140px" height="140px" /></a>
</div>
<div id="main_menuler">
	<span class='mainder'>Home</span>
	<span class='mainder'>Who we are</span>
	<span class='mainder'>What we do</span>
	<span class='mainder'>Contacts</span></div>
<div id="center_line">
Suleyman Demirel University
</div>
<div id="menu_2">
GET STARTED
</div>
<div id="sign_line">
<?php 
require_once "dash/reg.php";
?>
</div>
<div id="log_line">
<?php 
require_once 'dash/log.php';
?></div>
</body>
</html>