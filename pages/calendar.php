<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
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
Calendar</div>
<div id="center">
<div id="left_menu">
<a href="../index.php"><img src="../images/home.png"></a><br><hr>
<a href="#" id="audio" style="padding-left:5px;"><img src="../images/audio.png"></a>
<br><hr>
<a href="dashboard.php"><img src="../images/bag.png"></a><br><hr>
<a href=""><img src="../images/calendar.png"></a><br><hr>
<a href="junks.php" style="padding-left:5px;"><img src="../images/dustbin.png"></a><br><hr>
<img src="../images/search.png"><br><hr>
<img src="../images/id.png"><br><hr>
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
<div id="add_card">
<input type="submit" value="X" id="close">
Title:
<input type="text" id="title_id"/><br>
Text:<br>
<textarea id="text_id">
</textarea><br>
<button id="button_id">
	Add
</button>
<input type="button" id="hide_id">
</div>
<div id="real_cal">
<?php 
include_once "../functions.php";
calendar();
?>
</div>
<div id="note1">
<?php 
require_once "../dash/note.php";
?>
</div>
</div>

</body>
</html>