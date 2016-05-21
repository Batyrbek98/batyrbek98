<?php
session_start();
$login=$_SESSION['login'];
$id=$_SESSION['id'];
include_once '../functions.php';
show_namesura($login);
$surname=$GLOBALS['sur'];
$sex=$GLOBALS['sex'];
$name=$GLOBALS['name'];
?>
<style type="text/css">
#leagues{
	margin-left: 320px;	

	}
	#leagues li{
		list-style: none;
		float: left;
		padding-left: 6px;
		height: 93px;
		width: 105px;
		padding-top: 6px;
		text-align: center;
		margin-bottom: 0px;
		margin-left: 5px;
	}
	#foot_id{
		margin-left:32%; 
		height: 20px;
		padding-left: 10px;
		padding-right: 10px;
		padding-bottom: 5px;
		margin-top: 20px;
		font-family: Levenim MT;
		background-color:rgba(0,0,0,0.4); 
		font-size:30px; 
		color:white;
	}
	#name_league{
		font-size: 20px;
		font-family: Levenim MT;
		color:rgb(23,24,23);
		margin-left: 10px;
	}
	#facul_choice{
		margin-left: 3%;
		font-size: 30px;
		color:rgb(59,58,88);
		font-weight: bolder;
		font-family: Comfortaa;
		padding-top: 100px;
	}
	#facul_choice #fac{
		background-color: rgba(0,0,0,0.5);
		width: 265px;
		height: 30px;
		text-align: center;
		font-size: 20px;
		font-family: Levenim MT;
		color: white;

	}
	#facul_choice #fac_c{
		background-color: rgba(0,0,0,0.5);
		width: 265px;
		height: 30px;
		text-align: center;
		font-size: 20px;
		font-family: Levenim MT;
		color: white;

	}

	#name_league1{
		font-size: 20px;
		font-family: Levenim MT;
		color:rgb(23,24,23);
		margin-left: 10px;
		margin-top: 10px;

	}
	table tr td{
		padding-left: 10px;
	}
	#new_page{
		margin-left: 30px;
		width: 1100px;
		border-radius: 15px;
		height: 290px;
		display: none;
		margin-top: 100px;
		position: fixed;
		background-color: rgb(221,222,220);
		padding-bottom: 20px;
	}
	#all{
	margin:0px;
	width:77%;
	height:100%;
	position: absolute;
	background-color: rgba(26,26,26,0.8);
	display:none;
}
	#page_close{
		float: right;
		font-family: Levenim MT;
		font-size: 24px;
		color: white;
		margin-left:900px; 
		position: fixed;
		margin-top: 250px;
		margin-right: 40px;
		width: 150px;
		border-radius: 5px;
		height: 40px;
		background-color: rgba(0,0,0,0.4);
	}
	#exam_foot{
		width: 200px;
		height: 40px;
		cursor: pointer;
		padding: 3px;
		border-radius: 4px;
		margin-left: 0px;
		color: red;
	}
	#udastak{
		border-radius: 10px;
		width: 500px;
		height: 250px;
		display: none;
		float: right;
		margin-right: 50px;
		background-color: rgba(11,201,194,0.4);
		margin-top: -260px;
		padding-left: 20px;
		padding-top: 10px;
	}
	.name_sure{
		font-family: Levenim MT;
		font-size: 13px;
		color: black;
	}
	.sure_name{
		font-family: Levenim MT;
		font-size: 16px;
		font-weight: bolder;
		color:black;
	}
	#info_lines{
		margin-left: 130px;
		margin-top: -110px;
	}
	#info_line2{
		margin-left: 130px;
		margin-top: -122.5px;
	}
	#patro_tez{
		background-color: rgba(0,0,0,0.5);
		width: 260px;
		padding-left: 4px;
		height: 27px;
		font-size: 20px;
		font-family: Levenim MT;
		color: white;
	}
	#date_tez{
		background-color: rgba(0,0,0,0.5);
		width: 263px;
		margin-left: 0px;
		height: 27px;
		font-size: 20px;
		font-family: Levenim MT;
		color: white;		
	}
	#main_pictr{
		margin-left: -5px;
		margin-top: 45px;
		width: 100px;
		height: 110px;
		border:1px ridge black;

	}
	#grouppa{
		background-color: rgba(0,0,0,0.5);
		width: 265px;
		height: 30px;
		text-align: center;
		font-size: 20px;
		font-family: Levenim MT;
		color: white;
	}
	input[type="radio"]{
		width: 20px;
		height: 20px;
		color: white;
		background-color: black;
	}
	#verti_line{
		margin-top: -355px;
		float: right;
		width: 2px;
		height: 484px;
		margin-right: 54%;
		background-color: black;
	}
	#hori_line{
		width: 100%;
		height: 2px;
		background-color: black;
		float: right;
		margin-top: -410px;
	}
	#turn_on{
		float:right;
		margin-top: -460px;
		font-family: Comfortaa;
		font-size: 30px;
		margin-right: 35px;
	}
	#fast_ch{
		margin-top: -30px;
		margin-left: 460px;
		width: 65px;
		height: 30px;
		background-color: rgb(145,144,146);
		border-radius: 30px;
		border:1px outset black;
	}
	#fast_ch1{
		border-radius: 40px;
		width: 34px;
		height: 31px;
		background-color: rgb(245,245,246);
		cursor: pointer;
	}
	#fast_ch1:focus{
		outline: none;
	}
	#saved_all{
    float: left;
    margin-left: 30%;
    margin-top: -50px;
    width: 154px;
    padding: 10px;
    background-color: rgba(0,0,0,0.5);
    color: white;
    font-family: comfortaa;
    cursor: pointer;
    font-size: 25px;
	}
	#request{
		background-color: rgba(234,233,235,0.5);
		width: 350px;
		display: none;
		text-align: center;
		height: 100px;
		float: right;
        position:fixed;
		color:black;
		font-family: comfortaa;
		font-size: 25px;
		padding:10px;
		margin-right: 40%;
		margin-top: -400px;
	}
	#request input[type="button"]{
		width: 130px;
		margin-top: 20px;
		height: 35px;
		padding:4px;
		color:white;
		background-color: black;
		font-size: 20px;
	}
</style><div id="all"></div><div id='new_page'>
<button id="page_close" onclick="close_foot();">Okay</button>
<span id="foot_id">The football club:</span> <ul id='leagues'><li id="barcl_id" class="leag"><img src="../images/fifa/1.png" width="85px" height="85px"></li><li id="bbva_id" class="leag"><img src="../images/fifa/2.png" width="100px" height="85px"></li><li id="italy_id" class="leag"><img src="../images/fifa/3.png" width="85px" height="80px"></li></ul><br><br><br>
<div id='clubs_b' style='margin-left:50px;	 margin-top:60px;'><input type='image' value='Arsenal' class='clubs' src='../images/fifa/1_arse.png' width="50px" height="50px"><input type='image' value='Aston Villa' class='clubs' src='../images/fifa/1_ast.png' width="50px" height="50px"><input class='clubs' type="image" value='Burnley' src='../images/fifa/1_burn.png' width="50px" height="50px"><input type="image" class='clubs ' value='Chelsea' src='../images/fifa/1_chel.png' width="50px" height="50px"><input type="image" class='clubs' value='Crystal Palace' src='../images/fifa/1_crys.png' width="50px" height="50px"><input class='clubs' type="image" value='Everton' src='../images/fifa/1_ever.png' width="50px" height="50px"><input class='clubs' type="image" value='Hull City' src='../images/fifa/1_hull.png' width="50px" height="50px"><input type="image" class='clubs' value='Leicester City' src='../images/fifa/1_leic.png' width="50px" height="50px"><input type="image" class='clubs' value='Liverpool' src='../images/fifa/1_liver.png' width="50px" height="50px"><input type="image" class='clubs' value='Manchester United' src='../images/fifa/1_man.png' width="50px" height="50px"><input type="image" class='clubs' value='Manchester City' src='../images/fifa/1_manc.png' width="50px" height="50px"><input class='clubs' type="image" value='Newcastle United' src='../images/fifa/1_newc.png' width="50px" height="50px"><input class='clubs' type="image" value='Queens Park Rangeers ' src='../images/fifa/1_quen.png' width="50px" height="50px"><input class='clubs' type="image" value='Southampton' src='../images/fifa/1_sout.png' width="50px" height="50px"><input class='clubs' type="image" value='Stoke city' src='../images/fifa/1_stoke.png' width="50px" height="50px"><input class='clubs' type="image" value='Sunderland' src='../images/fifa/1_sund.png' width="50px" height="50px"><input class='clubs' type="image" value='Swansea city' src='../images/fifa/1_swan.png' width="50px" height="50px"><input class='clubs' type="image" value='Tottenham' src='../images/fifa/1_tott.png' width="50px" height="50px"><input class='clubs' type="image" value='West Bromich Albion' src='../images/fifa/1_wba.png' width="50px" height="50px"><input class='clubs' type="image" value='West Ham United' src='../images/fifa/1_whu.png' width="50px" height="50px"></div>
<div id='clubs_s' style='margin-left:50px;	 margin-top:60px;'><input type='image' value='Almeria' class='clubs'  src='../images/fifa/2_alme.png' width="50px" height="50px"><input type='image' value='Atletico Bilbao' class='clubs' src='../images/fifa/2_acb.png' width="50px" height="50px"><input class='clubs' type="image" value='Atletico Madrid' src='../images/fifa/2_atm.png' width="50px" height="50px"><input type="image" class='clubs ' value='Barcelona FC' src='../images/fifa/2_barc.png' width="50px" height="50px"><input type="image" class='clubs' value='Celta Vigo' src='../images/fifa/2_celta.png' width="50px" height="50px"><input class='clubs' type="image" value='Cordoba CF' src='../images/fifa/2_cord.png' width="50px" height="50px"><input class='clubs' type="image" value='Depotivo La Coruna' src='../images/fifa/2_depo.png' width="50px" height="50px"><input type="image" class='clubs' value='Eibar SD' src='../images/fifa/2_eib.png' width="50px" height="50px"><input type="image" class='clubs' value='Elche CF' src='../images/fifa/2_elch.png' width="50px" height="50px"><input type="image" class='clubs' value='Espanyol' src='../images/fifa/2_espa.png' width="50px" height="50px"><input type="image" class='clubs' value='Getafe' src='../images/fifa/2_get.png' width="50px" height="50px"><input class='clubs' type="image" value='Granada CF' src='../images/fifa/2_gra.png' width="50px" height="50px"><input class='clubs' type="image" value='Levante UD' src='../images/fifa/2_leva.png' width="50px" height="50px"><input class='clubs' type="image" value='Malaga' src='../images/fifa/2_mala.png' width="50px" height="50px"><input class='clubs' type="image" value='Rayo Vallecano' src='../images/fifa/2_rayo.png' width="50px" height="50px"><input class='clubs' type="image" value='Real Madrid' src='../images/fifa/2_real.png' width="50px" height="50px"><input class='clubs' type="image" value='Real Sociedad' src='../images/fifa/2_reals.png' width="50px" height="50px"><input class='clubs' type="image" value='Sevilla' src='../images/fifa/2_sev.png' width="50px" height="50px"><input class='clubs' type="image" value='Valencia' src='../images/fifa/2_vale.png' width="50px" height="50px"><input class='clubs' type="image" value='Vilarreal' src='../images/fifa/2_vill.png' width="50px" height="50px"></div>
<div id='clubs_i' style='margin-left:50px;	 margin-top:60px;'><input type='image' value='Atalanta' class='clubs'  src='../images/fifa/3_ata.png' width="50px" height="50px"><input type='image' value='Cagliari' class='clubs' src='../images/fifa/3_cag.png' width="50px" height="50px"><input class='clubs' type="image" value='Cesena' src='../images/fifa/3_ces.png' width="50px" height="50px"><input type="image" class='clubs ' value='Chievo Verone' src='../images/fifa/3_chi.png' width="50px" height="50px"><input type="image" class='clubs' value='Empoli' src='../images/fifa/3_emp.png' width="50px" height="50px"><input class='clubs' type="image" value='Fiorentina' src='../images/fifa/3_fio.png' width="50px" height="50px"><input class='clubs' type="image" value='Genoa' src='../images/fifa/3_gen.png' width="50px" height="50px"><input type="image" class='clubs' value='Hallas Verona' src='../images/fifa/3_hell.png' width="50px" height="50px"><input type="image" class='clubs' value='Inter' src='../images/fifa/3_inter.png' width="50px" height="50px"><input type="image" class='clubs' value='Juventus' src='../images/fifa/3_jyu.png' width="50px" height="50px"><input type="image" class='clubs' value='Lazio' src='../images/fifa/3_laz.png' width="50px" height="50px"><input class='clubs' type="image" value='AC Milan' src='../images/fifa/3_mil.png' width="50px" height="50px"><input class='clubs' type="image" value='Napoli' src='../images/fifa/3_nap.png' width="50px" height="50px"><input class='clubs' type="image" value='Palermo' src='../images/fifa/3_pal.png' width="50px" height="50px"><input class='clubs' type="image" value='Parma' src='../images/fifa/3_par.png' width="50px" height="50px"><input class='clubs' type="image" value='Roma' src='../images/fifa/3_roma.png' width="50px" height="50px"><input class='clubs' type="image" value='Sampdoria' src='../images/fifa/3_samp.png' width="50px" height="50px"><input class='clubs' type="image" value='Sassualo' src='../images/fifa/3_sass.png' width="50px" height="50px"><input class='clubs' type="image" value='Torino' src='../images/fifa/3_tor.png' width="50px" height="50px"><input class='clubs' type="image" value='Udinese' src='../images/fifa/3_udi.png' width="50px" height="50px"></div>
<input type="hidden" value="" id="leag_name">
<input type="hidden" value="" id="club_name">
</div>
<div id='facul_choice'>
<span style="margin-left:12px;">Football Club(<span id="exam_foot">All clubs</span>)</span> 
<span id="name_league1"></span>
<span id="name_league"></span><br>
<table><tr><td>Faculty</td> <td><select id="fac">
	<option class="facul" value='Law'>Faculty of Law</option>
	<option class="facul" value='Engeenering'>Faculty of Engeenering</option>
	<option class="facul" value='Economics'>Faculty of Economics</option>
	<option class="facul" value='Philology'>Faculty of Philology</option>
</select></td></tr><tr>
<td>Profession </td><td><select id="fac_c"></select></td></tr><tr>
<td>Patronymic </td><td> <input type="text" id="patro_tez" placeholder="Fathers name"/></td></tr><tr>
<td>Date Of Birth </td><td> <input type="date" id="date_tez" /></td></tr><tr>
<td>Group </td><td><select id="grouppa" name="grouppa">
	<option value="A"> Group A </option>
	<option value="B"> Group B </option>
	<option value="C"> Group C </option>
	<option value="D"> Group D </option>
	<option value="E"> Group E </option>
	<option value="F"> Group F </option>
	<option value="G"> Group G </option>
</select></td></tr>
<tr><td>Course</td><td><input type="radio" name="cour" value="1">-1<input type="radio" name="cour" value="2">-2<input type="radio" name="cour" value="3">-3<input type="radio" name="cour" value="4">-4</td></tr>
</table>
<div id='udastak'>
<div id='national' style="font-family:Arial; font-size:18px;margin-top:10px; margin-left:90px;">Suleyman Demirel University</div>
<div id="main_pictr"><img src="../images/main_pict.png" width="90px" height="110px"></div>
<div id="info_lines"><div class='name_sure'>Surname:<br><span class='sure_name'><?php echo $surname;?></span></div>
<div class='name_sure'>Name:<br><span class='sure_name'><?php echo $name;?></span></div>
<div class='name_sure'>Patronymic:<br><span class='sure_name' id="otsew">---------</span></div>
<div id="info_line2">
<div class='name_sure'>Sex:<br><span class='sure_name'><?php if($sex=="M"){echo "Male";} else{echo "Female";}?></span></div>
<div class='name_sure'>Date OF Birth:<br><span class='sure_name' id="datago">---------</span></div>
</div>
</div></div>
</div>
<div id="verti_line"></div>
<div id="hori_line"></div>
<div id="turn_on">
	Turn <span id="udas_key">on</span> the fast view
	<div id="fast_ch">
		<input type="button" id="fast_ch1" onclick="turndow();">
		<input type="hidden" id="fast_ch2" value="nopego">
		</div>
	</div>
<input type="button" value="Save All" id="saved_all" onclick="save_all();">
<div id="request">
Add your photo
<br><form action="" method="post" enctype="multipart/form-data"><input type="file" id="avaw" name="photo2">
<input type="submit" name="cki" value="Keep going" id="okay_sav">
</form>
<?php
if($_POST['cki']==true){
$uploadfile = "../images/profiles/".$_FILES['photo2']['name'];
move_uploaded_file($_FILES['photo2']['tmp_name'], $uploadfile);
include_once "../functions.php";
photo_add($uploadfile,$id);
}
?>
</div>