<?php 
session_start();
unset($_SESSION['login']); 
unset($_SESSION['id']);
echo "<meta http-equiv='Refresh' content='0; URL=../index.php'>";
?>