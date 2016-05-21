<?php 
session_start();
$login=$_SESSION['login'];
$id=$_SESSION['id'];
echo "<br>";
echo " <span class='head_text'><a href=''>Home</a></span><br>";
echo " <br><span class='head_text' ><a id='social_click' href='#'>Social</a></span>";
echo " <br><span id='social_shit'><span class='bot_text'><a href=''>News</a></span><br>";
echo " <span class='bot_text'><a href=''>Friends</a></span><br>";
echo " <span class='bot_text'><a href=''>Messages</a></span></span><br>";
echo " <span class='head_text'><a id='dash_click' href='#'>Dashboard</a></span><br>";
echo " <span id='dash_shit'><span class='bot_text'><a href=''>Calendar</a></span><br>";
echo " <span class='bot_text'><a href=''>Notes</a></span></span><br>";
echo " <span class='head_text'><a href='#' id='log_out'>Log Out</a></span><br>";
?>