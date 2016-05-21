<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<script type="text/javascript" src="../script/jsq1.js"></script>
	<script type="text/javascript" src="../script/jsq2.js"></script>
	<script type="text/javascript" src="../script/jsq3.js"></script>
	<script type="text/javascript" src="../script/jsq4.js"></script>
	<script type="text/javascript" src="../script/jsq5.js"></script>
	<link href="../images/favicon.ico" rel="icon" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<body>
<div id="headline">
Dashboard</div>
<div id="center">
<div id="left_menu">
<a href="../index.php"><img src="../images/home.png"></a><br><hr>
<a href="#" id="audio" style="padding-left:5px;"><img src="../images/audio.png"></a>
<br><hr>
<a href=""><img src="../images/bag.png"></a><br><hr>
<a href="calendar.php"><img src="../images/calendar.png"></a><br><hr>
<a href="junks.php" style="padding-left:5px;"><img src="../images/dustbin.png"></a><br><hr>
<img src="../images/search.png"><br><hr>
<img src="../images/id.png"><br><hr>
</div>
<div id="music">
<input type='text' value='No music' disabled="disabled" id="music_name">
<audio controls style='width:280px;margin-bottom:5px;' autoplay="enabled" id="music_id"><source src='' type='audio/mpeg' ></audio><br>
<?php 
include_once "../functions.php";
music();
?>
</div>
</div>
<div id="all_things">
<div id="picture">
<ul>
<li><input type="image" src="../images/200.jpg" onclick="pictur_turn(200);" width="100px" name="200" height="160px"  value="../images/200.jpg" class="pictu"></li>
<li><input type="image" src="../images/201.jpg" onclick="pictur_turn(201);" width="100px" name="201" height="160px"  value="../images/201.jpg" class="pictu"></li>
<li><input type="image" src="../images/202.jpg" onclick="pictur_turn(202);" width="100px" name="202" height="160px"  value="../images/202.jpg" class="pictu"></li>
<li><input type="image" src="../images/203.jpg" onclick="pictur_turn(203);" width="100px" name="203" height="160px"  value="../images/203.jpg" class="pictu"></li>
<li><input type="image" src="../images/204.jpg" onclick="pictur_turn(204);" width="100px" name="204" height="160px"  value="../images/204.jpg" class="pictu"></li>
<li><input type="image" src="../images/205.jpg" onclick="pictur_turn(205);" width="100px" name="205" height="160px"  value="../images/205.jpg" class="pictu"></li>
<li><input type="image" src="../images/206.jpg" onclick="pictur_turn(206);" width="100px" name="206" height="160px"  value="../images/206.jpg" class="pictu"></li>
<li><input type="image" src="../images/207.jpg" onclick="pictur_turn(207);" width="100px" name="207" height="160px"  value="../images/207.jpg" class="pictu"></li>
<li><input type="image" src="../images/208.jpg" onclick="pictur_turn(208);" width="100px" name="208" height="160px"  value="../images/208.jpg"  class="pictu"></li>
<li><input type="image" src="../images/209.jpg" onclick="pictur_turn(209);" width="100px" name="209" height="160px"  value="../images/209.jpg" class="pictu"></li>
<li><input type="image" src="../images/210.jpg" onclick="pictur_turn(210);" width="100px" name="210" height="160px"  value="../images/210.jpg" class="pictu"></li>
<li><input type="image" src="../images/211.jpg" onclick="pictur_turn(211);" width="100px" name="211" height="160px"  value="../images/211.jpg" class="pictu"></li>
</ul>
</div>
<?php 
require_once "../dash/calc.php";
?>
<div id="class12">
<img src="../images/class2.jpg" width="415px" height="250px">
</div>
<?php 
require_once "../dash/note.php";
?>
<div id='day'>
		
</div>
</div>
<div id="for_pic">
<input type="image" src="../images/wrong.png" onclick="colse();" id="close_pic1"><br>
<img src="#" id="changing_pic" width="350px" height="490px">
<div id="left0">
<input type="image" src='../images/left.png' id="left_key" >
</div>
<div id="right0">
<input type="image" src='../images/right.png' id="right_key" >
</div>
</div>
</body>
</html>