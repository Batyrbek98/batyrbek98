<?php 
session_start();
$login=$_SESSION['login'];
$id=$_SESSION['id'];
include_once '../functions.php';
show_namesura($login);
$name=$GLOBALS['name'];
$sur=$GLOBALS['sur'];
$dat=$GLOBALS['dataw'];
$use=$GLOBALS['use'];
$name=$GLOBALS['name'];
$photo=$GLOBALS['photo'];
show_me($id);
$fac=$GLOBALS['fac'];
$pro=$GLOBALS['pro'];
$cou=$GLOBALS['cour'];
$gro=$GLOBALS['gro'];
?>
<style type="text/css">
	#prof_line{
		color: rgb(234,234,233);
		font-size: 40px;
		font-family: comfortaa;
		width: 65%;
		height: 50px;
		padding-left: 35%;
		background-color: rgba(0,0,0,0.5);
	}
	#pho{
		width: 250px;
		height: 350px;
		margin-top: 10px;
		margin-left: 40px;
		float:left;
	}
	#in_line{
		padding-left: 30px;
		padding-right: 30px;
		margin-left: 60px;
		font-size: 40px;
		font-family: comfortaa;		
		float:left;
		color:rgba(33,33,34,0.7);
		margin-top: 40px;
	}
	#datawer{
		float:left;
		margin-left: 130px;
	}
	#full_in{
		text-align: center;
		font-family: Orator std;
		font-size: 23px;
		float:right;
		margin-right: 20px;
		margin-top: -10px;
		padding:10px;
		border-radius: 10px;
		color:black;
		display: none;
	}
	#fully{
		float:right;
		cursor: pointer;
		padding:5px;
		margin-right: 10px;
		border-radius: 10px;
		font-size: 20px;
		margin-top: 0px;
	}
	#fully:hover{
		text-decoration: underline;
		color: black;
	}
	#entries{
		float:left;
		margin-bottom: 115px;
		border-top: 3px dashed black;
		width: 96%;
		height: 400px;
		padding-top: 20px;
		padding-bottom: 50px;
		padding-left: 4%;
		background-color: ;
		margin-top: 30px;
	}
    .name_adams{
    margin-top:30px;
    font-family:comfortaa;
    font-size:25px;
    font-weight:bolder;
    color:rgba(44,221,40,1);
    float:left;
    margin-left:200px;
    }
</style>
<div id="prof_line">
Profile Page
</div>
<div id="main_infop">
<?php 
if($cou==1){$cou="First";}
elseif($cou==2){$cou="Second";}
elseif($cou==3){$cou="Third";}
elseif($cou==4){$cou="Fourth";}
printf("<img src='%s' id='pho'>",$photo);
printf("<div id='in_line'>%s %s %s <br> <span id='datawer'>%s</span>",$sur,$name,$batya,$dat);
printf("<br><span id='fully'>Information</span><br><div id='full_in'>University: SDU <br> Faculty of %s <br> Profession:%s <br> %s Course <br> Group:%s",$fac,$pro,$cou,$gro);
echo "</div>";
?>	
</div>
<div id="entries">
<div id='news_of <?php echo $id;?>'><img src='<?php echo $photo;?>' width='85px' height='85px' style="border:4px ridge rgb(100,233,120); margin-left:-300px;">
<span class="name_adams"><?php echo $sur; echo " "; echo $name;?></span><br>
<span class="date_today"><?php echo $dataw;?></span>
</div>
</div>