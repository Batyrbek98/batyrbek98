<?php 
session_start();
?>
<?php 
function mysqldannye(){
	mysql_connect("mysql.hostinger.co.uk","u467827275_sduw","espgpi201314kz");
	mysql_select_db("u467827275_sdu");
}
function music(){
	mysqldannye();
	$query="SELECT * FROM `music`";
	$sql=mysql_query($query);
	echo "<table border='0px'>";
	echo "<tr><td></td><td></td></tr>";
	while($array=mysql_fetch_array($sql)){
		printf("<tr><td><input type='image' value='%s' src='../images/play.png' onclick='configas(%s);' class='music90'></td><td><l>%s</l></td></tr>",$array['name'],$array['src'],$array['name']);
	}
	echo "</table>";
}
function notes(){
	mysqldannye();
	$data=date("d");
	$query="SELECT `title`,`text` FROM notes WHERE `date`='$data'";
	$sql=mysql_query($query);
	while ($assoc=mysql_fetch_assoc($sql)) {
	printf("<b>%s :</b> %s<br>",$assoc['title'],$assoc['text']);
	}
}
function calendar(){
	mysqldannye();
	$query="SELECT * FROM calendar";
	$result=mysql_query($query);
	$sql="SELECT `title`,`text` FROM notes WHERE `date`='$data'";
	$res=mysql_query($sql);
	echo "<table border='1px'>";
	echo '<tr>';
	while ($array=mysql_fetch_array($result)) {
		if($array['name']=="7"){
			printf("<td id='pics%s'><b style='font-size:15px;'>%s</b> <div class='add'><input type='image' src='../images/pencil.png' width='25px' class='pic' height='25px' value='%s'></div><input type='image' class='ins' src='../images/eye.png' value='%s' style='width:35px; height:25px; float:right;'><span id='%s'></span></td></tr><tr>",$array['name'],$array['name'],$array['name'],$array['name'],$array['name']);
		}
		else{
			if($array['name']=="14"){
            printf("<td id='pics%s'><b style='font-size:15px;'>%s</b> <div class='add'><input type='image' src='../images/pencil.png' width='25px' class='pic' height='25px' value='%s'></div><input type='image' class='ins' src='../images/eye.png' value='%s' style='width:35px; height:25px; float:right;'><span id='%s'></span></td></tr><tr>",$array['name'],$array['name'],$array['name'],$array['name'],$array['name']);

			}else{
							if($array['name']=="21"){
		printf("<td id='pics%s'><b style='font-size:15px;'>%s</b> <div class='add'><input type='image' src='../images/pencil.png' width='25px' class='pic' height='25px' value='%s'></div><input type='image' class='ins' src='../images/eye.png' value='%s' style='width:35px; height:25px; float:right;'><span id='%s'></span></td></tr><tr>",$array['name'],$array['name'],$array['name'],$array['name'],$array['name']);
}else{			if($array['name']=="28"){
printf("<td id='pics%s'><b style='font-size:15px;'>%s</b> <div class='add'><input type='image' src='../images/pencil.png' width='25px' class='pic' height='25px' value='%s'></div><input type='image' class='ins' src='../images/eye.png' value='%s' style='width:35px; height:25px; float:right;'><span id='%s'></span></td></tr><tr>",$array['name'],$array['name'],$array['name'],$array['name'],$array['name']);
}
else{
printf("<td id='pics%s'><b style='font-size:15px;'>%s</b> <div class='add'><input type='image' src='../images/pencil.png' width='25px' class='pic' height='25px' value='%s'></div><input type='image' class='ins' src='../images/eye.png' value='%s' style='width:35px; height:25px; float:right;'><span id='%s'></span></td>",$array['name'],$array['name'],$array['name'],$array['name'],$array['name']);
	}}}
	}}
	echo "</tr></table>";

}
function addnotes($title,$text,$date){
mysqldannye();
$ata=date("d");
$sql="INSERT INTO `notes` (`title`, `text`, `date`) VALUES ('$title', '$text', '$date')";
$result=mysql_query($sql);
if($result==true){
	if($date==$ata){
	printf("<b>%s:</b> %s",$title,$text);
   	}
   	else
   	{
   		printf("%s were addedw",$date);
}}else{
	echo "Error with unknown debug";
}
}
function show_calend($id){
	mysqldannye();
	$sql="SELECT `title`,`text` FROM `notes` WHERE `date`='$id'";
	$result=mysql_query($sql);
	$quer1="SELECT * FROM `notes` WHERE `date`='$id'";
	$resu=mysql_query($quer1);
	$row=mysql_fetch_row($resu);
	if($row[2]==""){
		printf("<script>alert('empty day');</script>");
	}else{
	while($assoc1=mysql_fetch_assoc($result)){
		printf("<br> <b> %s:</b> %s",$assoc1['title'],$assoc1['text']);
	}
	echo "<input type='image' onclick='close_df($id);' style='width:45px;padding-left:5px; height:15px; font-size:12px;float:right; margin-top:8px' src='../images/close.png' value='$id' class='close'>";
}}
function registration($name,$sur,$password,$age,$gend,$mail){
	mysqldannye();
	$sql0="SELECT * FROM `users` WHERE `username`='$mail'";
	$res0=mysql_query($sql0);
	$row=mysql_fetch_row($res0);
	if($row[0]==true){
	print("This Username already is using");
}else{
	$sql="INSERT INTO `users` (`username`, `password`, `name`, `surname`, `gender`, `age`) VALUES ('$mail', '$password', '$name', '$sur', '$gend', '$age')";
	$result=mysql_query($sql);
	if($result==true){
		printf('Hello,%s %s, you were succesfully registrated',$sur,$name);
	}else{
		print("Unknown error");
	}
}}
function check_login($mail,$pass){
	mysqldannye();
	$sql="SELECT * FROM `users` WHERE `username`='$mail'";
	$result=mysql_query($sql);
	$row=mysql_fetch_row($result);
	if($row==true){
		if($pass==$row[2]){
			printf($row[1]);
			$_SESSION['login']=$mail;
			$_SESSION['id']=$row[0];
			$_SESSION['position']=$row[10];
					}
		else{
			printf(4);
			}
	}
	else{
		printf(4);
	}
}
function show_namesur($login){
mysqldannye();
$sql="SELECT * FROM `users` WHERE `username`='$login'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
echo $row[4];
echo " ";
echo $row[3];
}
function show_profile($login){
mysqldannye();
$sql="SELECT * FROM `users` WHERE `username`='$login'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
if($row[8]=="+"){}
else{
printf("<span style='color:rgb(64,167,65);'>Welcome </span>%s %s<br> <span id='full_info' style='font-size:25px; padding-left:100px; cursor:pointer;'>Please come in to full registration</span>",$row[4],$row[3]);
}}
function show_namesura($login){
mysqldannye();
$sql="SELECT * FROM `users` WHERE `username`='$login'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$GLOBALS['sur']=$row[4];
$GLOBALS['sex']=$row[5];
$GLOBALS['use']=$row[1];
$GLOBALS['dataw']=$row[7];
$GLOBALS['batya']=$row[8];
$GLOBALS['name']=$row[3];
$GLOBALS['photo']=$row[9];
}
function registrfull($id,$login,$ln,$cn,$fac,$pro,$batya,$dataw,$gro,$crs){
mysqldannye();
$sql="INSERT INTO `sduw` (`id2`, `fac`, `prof`, `cour`, `gro`) VALUES ('$id', '$fac', '$pro', '$crs', '$gro')";
$res=mysql_query($sql);
$sql1="INSERT INTO `clubs` (`id2`, `el`, `club`) VALUES ('$id', '$ln', '$cn')";
$res1=mysql_query($sql1);
$sql2="UPDATE `users` SET `dataw`='$dataw',`batya`='$batya',`position`='+' WHERE `int`='$id'";
$res2=mysql_query($sql2);
$_SESSION['position']="+";
}
function show_me($id){
mysqldannye();
$sql="SELECT * FROM `sduw` WHERE `id2`='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$GLOBALS['fac']=$row[2];
$GLOBALS['pro']=$row[3];
$GLOBALS['cour']=$row[4];
$GLOBALS['gro']=$row[5];
}
function photo_add($phot,$id){
mysqldannye();
$sql="UPDATE `users` SET `photo`='$phot' WHERE `int`='$id'";
$result=mysql_query($sql);
echo '<meta http-equiv="refresh" content="1;URL=index.php">';
}
?>