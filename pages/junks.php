<!DOCTYPE html>
<html>
<head>
	<title>Useless junks</title>
<script type="text/javascript" src="../script/jsq1.js"></script>
	<script type="text/javascript" src="../script/jsq2.js"></script>
	<script type="text/javascript" src="../script/jsq3.js"></script>
	<script type="text/javascript" src="../script/jsq4.js"></script>
	<link href="../images/favicon.ico" rel="icon" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<?php 
$date=date("d");
printf("<body onload='day_color(%s);'>",$date);?>
<div id="headline">
Useless junks</div>
<div id="center">
<div id="left_menu">
<a href="../index.php"><img src="../images/home.png"></a><br>
<a href="#" id="audio"><img src="../images/audio.png"></a>
<br>
<a href="dashboard.php"><img src="../images/bag.png"></a><br>
<a href="calendar.php"><img src="../images/calendar.png"></a><br>
<a href=""><img src="../images/dustbin.png"></a><br>
<img src="../images/search.png"><br>
<img src="../images/id.png"><br>
</div>
<div id="music">
<input type='text' value='No music' disabled="disabled" id="music_name">
<audio controls style='width:250px;margin-bottom:5px;' autoplay="enabled" id="music_id"><source src='' type='audio/mpeg' ></audio><br>
<?php 
include_once "../functions.php";
music();
?>
</div>
</div>
<div id="all_things">
</div>

</body>
</html>