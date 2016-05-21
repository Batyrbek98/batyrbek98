$(document).ready(
	function(){
		$("#menu_2").click(show_reg);
		$("#reg_link").click(s_page_open);
		$("#log_link").click(l_page_open);
		$("#left_key").click(left_pic);
		$(".close_id").click(closeit);
		$("#right_key").click(right_pic);
		$(".ins").click(function(){
		var r=$(this).val();
		$.ajax({
			type:'get',
			url:'../ajax/ax2.php',
			data:{ids:r},
			response:'text',
			success:function(data){	
			$("#"+r).append(data);			
			}
		});
		$(this).click(function(){
		$("#"+r).empty();}	);			
		});
		$(".pictu").mouseenter(zoom);
		$("li").mouseenter(zoom);
		$(".pictu").mouseleave(zoommin);
		$("li").mouseleave(zoommin);
		$(".pictu").click(function(){
		var t=$(this).val();
		$("#for_pic").hide();
		document.getElementById("changing_pic").src=t;
		$("#for_pic").fadeIn(200);
		});
		$(".music90").click(function(){
			var g=$(this).val();

			$("#music_name").val(g);
		});
		$("#menu_1").mouseenter(show_menu);
		$("#audio").click(show_music);
		$("#close").click(closes);
		$("#button_id").click(addinfo);
		$(".pic").click(function(){
		var a=$(this).val();
		$("#add_card").show(340);
		$("#hide_id").val(a);
		});
	});
function show_menu(){
	$("#links").slideToggle(350);
}
function show_music(){
	$("#music").fadeToggle(230);
}
function closes(){
	$("#add_card").hide(340);
	$("#hide_id").val("");
	}
function addinfo(){
	var g=$("#title_id").val();
	var c=$("#text_id").val();
	var t=$("#hide_id").val();
	if(g==""){
		alert("Write your title");
	}else{
		if(c==""){
			alert("Write the text");
		}else{
			$.ajax({
				type:'get',
				url:'../ajax/ax1.php',
				data:{
					title:g,
					text:c,
					date:t
				},
				response:'text',
				success:function(data){	
					$("#note_nup").append(data);
					$("#title_id").val("");
					$("#text_id").val("");

				}
				
				});
		}
		
	}
	
}
function configas(id){
document.getElementById("music_id").src=id;
}
function zoom(){
	$(this).css("width","+=15px");
	$(this).css("height","+=15px");
}
function zoommin(){
	$(this).css("width","-=15px");
	$(this).css("height","-=15px");
}
function colse(){
	$("#for_pic").fadeOut(250);
}
function close_df(as){
	$("#"+as).empty();
}
function left_pic(){
var tur=document.getElementById("left_key").value;	
var topou=tur-1;
if(topou=="199"){
	$("#left_key").val(211);
	$("#right_key").val(211);
document.getElementById("changing_pic").src="../images/211.jpg";	
}
	else{
var troy=("../images/" + topou + ".jpg");
$("#left_key").val(topou);
$("#right_key").val(topou);
document.getElementById("changing_pic").src=troy;
}}
function right_pic(){
var tus=document.getElementById("right_key").value;	
var topos=tus-1+2;
if(topos=="212"){
	$("#right_key").val(200);
	$("#left_key").val(200);
document.getElementById("changing_pic").src="../images/200.jpg";	
}
	else{
var tros=("../images/" + topos + ".jpg");
$("#right_key").val(topos);
$("#left_key").val(topos);
document.getElementById("changing_pic").src=tros;
}}
function pictur_turn(tr){
$("#left_key").val(tr);
$("#right_key").val(tr);
}
function day_color(y){
	var opp="pics"+y;
	$("#"+opp).css("background-color","rgb(201,194,77)");
	$("#"+opp).css("color","rgb(151,52,61)");
}
function sendo(){
var mail=document.getElementById('mail').value;
var name=document.getElementById('name').value;
var age=document.getElementById('age').value;
var surname=document.getElementById('surname').value;
var password=document.getElementById('password').value;
var gend=document.getElementById('chech').value;
if(mail.indexOf("@") != -1){
alert('Successfull');
if(gend=='toptop'){
	gender="M";
}
else{gender="F";}
$.ajax({
	type:'get',
	url: 'ajax/ax3.php',
	data:{
		name:name,
		sur:surname,
		password:password,
		gender:gender,
		mail:mail,
		age:age
	},
	response:'text',
	success:function(data){
		$("#message_b").show();
		$("#message_b").append(data);
		location.reload();
	}
});
}else{
alert('Write correct email address');
}

}
function age_func(){
var age=document.getElementById('age').value;
if(isNaN(age) || age==""){
$("#age_error").empty();
$("#age_error").fadeIn(500);
$("#age_error").append("Error");
$("#age_error").css("color","rgb(243,54,34)");
}
else{
$("#age_error").empty();
$("#age_error").append("Success");
$("#age_error").fadeIn(1800);
$("#age_error").css("color","rgb(33,184,44)");
$("#age_error").fadeOut(1800);
}

}
function hels(){
var tip=$("#chech").val();
if(tip=="toptop"){
$("#round").css("float","right");
$("#che").css("background-color","rgb(140,47,41)");
$("#round").css("margin-right","3px");
$("#sex_line").css("text-shadow","none");
$("#fem").css("text-shadow","-1px 1px 5px black");
$("#chech").val("opop");
}
else{
$("#round").css("float","left");
$("#che").css("background-color","rgb(29,113,41)");
$("#round").css("margin-left","3px");
$("#fem").css("text-shadow","none");
$("#sex_line").css("text-shadow","-1px 1px 5px black");
$("#chech").val("toptop");
}}

function name_c(){
var show=document.getElementById('name').value;
if(show==""){
	alert("Write your surname");
}else{
if(isNaN(show)){
	$("#name").css("border","2.3px outset #61cf10");
}else{
	alert("Do not use the numbers");
	document.getElementById('surname').value="";
	$("#name").css("border","2.3px outset red");
}
}}
function name_ce(){
var show=document.getElementById('surname').value;
if(show==""){
	alert("Write your surname");
}else{
if(isNaN(show)){
	$("#surname").css("border","2.3px outset #61cf10");
}else{
	alert("Do not use the numbers");
	document.getElementById('surname').value="";
	$("#surname").css("border","2.3px outset red");
}
}}
function closeit(){
	$("#sign_line").fadeOut(609);
	$("#all").hide(50);
	document.getElementById('name').value="";
	document.getElementById('surname').value="";
	document.getElementById('age').value="";
	$("#surname").css("border","0px");
	document.getElementById('username').value="";
	document.getElementById('password').value="";
	document.getElementById('password2').value="";
	$("#age_error").empty();
	$("#name").css("border","0px");
	document.getElementById('mail').value="";
	$("#log_line").fadeOut(609);
}
function show_reg(){
	$("#log_line").fadeIn(708);
	$("#all").show(50);

}
function login(){
	var g=$("#username").val();
	var gs=$("#password2").val();
	$.ajax({
	type:'get',
	url:'ajax/ax4.php',
	data:{
		mail:g,
		check_pass:gs
	},
	response:'text',
	success:function(data){
		if(data==4){
		alert('Incorrect');
		}
        else{
        alert('Welcome '+ g);
		document.location.href = "social/index.php";
	}}
});	

}
function name_cs(){

}
function s_page_open(){
$("#log_line").hide();
$("#sign_line").fadeIn(200);
$("#all").show(50);
}
function l_page_open(){
$("#sign_line").hide();
$("#log_line").fadeIn(200);
$("#all").show(50);
}