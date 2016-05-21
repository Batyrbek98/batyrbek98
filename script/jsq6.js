$(document).ready(
	function(){
		$("#fully").click(geor);
		$("#patro_tez").change(otew);
		$("#date_tez").change(datago);
		$("#main_pictr").click(new_ava);
		var ta=$("#fac option:selected").value="law";
		$("#fac_c").hide();
		$("#exam_foot").click(open_newpage);
		$("#fac_c").empty();
		$("#fac_c").fadeIn(500);
		$("#fac_c").append("<option val='is'>Law</option><option val='is'>History</option>");
		$("#fac").change(faculty);
		$(".leag").click(border_line);
		$("#barcl_id").click(show_barcl);
		$("#bbva_id").click(show_bbva);
		$("#italy_id").click(show_italy);
	$(".clubs").click(
		function(){
			var tr=$(this).val();
			$("#club_name").val(tr);
			$(this).css("outline","none");
			$(".clubs").css("border","0px");
			$(".clubs").css("padding","0px");
			$(this).css("border","3px inset rgb(45,154,34)");
			$(this).css("padding","2px 2px 2px 2px");
			$("#name_league").empty();
			$("#name_league").append(" <br> "+tr);
			$("#verti_line").css("margin-top","-425px");
			$("#udastak").css("margin-top","-320px");
		});
	$('#social_click').click(show_list);
	$('#dash_click').click(show_list2);
	$('#log_out').click(log_out);
	$('#full_info').click(info_all);
}
	);
function show_list(){
	$("#social_shit").slideToggle(300);
	$("#dash_shit").slideUp(300);
}
function show_list2(){
	$("#dash_shit").slideToggle(300);
	$("#social_shit").slideUp(300);
}
function log_out(){
	$.ajax({
		type:'get',
		url:'../ajax/ax5.php',
		data:{

		},
		response:'text',
		success: function(data){
document.location.href = "../index.php";
				}
	});
}
function info_all(){
	$("#main_s").remove();
	$("#full_reg").show();
}
function show_barcl(){
	$("#clubs_b").fadeIn(650);
	$("#clubs_s").fadeOut(0);
	$("#clubs_i").fadeOut(0);
	$("#club_name").val("");
	$("#leag_name").val("Barclays Premier League(England)");
	$(".clubs").css("border","0px");
	$(".clubs").css("padding","0px");
	$("#name_league1").empty();
	$("#name_league").empty();
	$("#name_league1").append("<br>Barclays Premier League(England)");
	$("#barcl_id").css("border","3px inset rgb(34,154,38)");
	$("#bbva_id").css("border","0px");
	$("#italy_id").css("border","0px");
}
function show_bbva(){
	$("#clubs_s").fadeIn(650);
	$("#clubs_b").fadeOut(0);
	$("#clubs_i").fadeOut(0);
	$("#club_name").val("");
	$("#leag_name").val("League BBVA(Spain)");
	$("#name_league1").empty();
	$("#name_league").empty();
	$("#name_league1").append("<br>League BBVA(Spain)");
	$("#bbva_id").css("border","3px inset rgb(34,154,38)");
	$("#barcl_id").css("border","0px");
	$("#italy_id").css("border","0px");

}
function show_italy(){
	$("#clubs_i").fadeIn(650);
	$("#clubs_b").fadeOut(0);
	$("#clubs_s").fadeOut(0);
	$("#club_name").val("");
	$("#leag_name").val("Seria A(Italian)");
	$("#name_league1").empty();
	$("#name_league").empty();
	$("#name_league1").append("<br>Seria A(Italian)");
	$("#italy_id").css("border","3px inset rgb(34,154,38)");
	$("#bbva_id").css("border","0px");
	$("#barcl_id").css("border","0px");
}
function border_line(){
	$(this).css("border","2px inset red");
}
function faculty(){
	var t=$("#fac option:selected").val();
	if(t=="Economics"){
		$("#fac_c").hide();
		$("#fac_c").empty();
		$("#fac_c").fadeIn(500);
		$("#fac_c").append("<option val='Economics'>Economics</option><option val='Finance'>Finance</option><option val='Management'>Management</option><option val='Marketing'>Marketing</option><option val='International Relations'>International Relations</option><option val='Accounting and Audit'>Accounting and Audit</option>");
	}	
	if(t=="Law"){
		$("#fac_c").hide();
		$("#fac_c").empty();
		$("#fac_c").fadeIn(500);
		$("#fac_c").append("<option val='Law'>Law</option><option val='History'>History</option>");
	}	
	if(t=="Engeenering"){
		$("#fac_c").hide();
		$("#fac_c").empty();
		$("#fac_c").fadeIn(500);
		$("#fac_c").append("<option val='Information Systems'>Information Systems</option><option val='Computer Systems and Hardware'>Computer Systems and Hardware</option><option val='Mathematical Sciences'>Mathematical Sciences</option><option val='Mathematics(pedagogical)'>Mathematics(pedagogical)</option>");
	}	
	if(t=="Philology"){
		$("#fac_c").hide();
		$("#fac_c").empty();
		$("#fac_c").fadeIn(500);
		$("#fac_c").append("<option val='Journalism'>Journalism</option><option val='Two Foreign Languages'>Two Foreign Languages</option><option val='Translation Studies'>Translation Studies</option><option val='Kazakh Language and Literature'>Kazakh Language and Literature</option><option val='Philology'>Philology</option><option val='Foreign Philology'>Foreign Philology</option>");
	}	
}
function close_foot(){	
	var stra=$('#club_name').val();
	var sstr=$('#leag_name').val();
	if(stra=="" || sstr==""){
		alert("Empty Space");
	}
	else{
		$("#all").fadeOut(300);
		$("#new_page").hide();
	}
}
function open_newpage(){
	$("#new_page").fadeIn(400);
	$("#all").show();
}
function otew(){
	var ote=$(this).val();
	$("#otsew").empty();
	$("#otsew").append(ote);
}
function datago(){
	var ote1=$(this).val();
	$("#datago").empty();
	$("#datago").append(ote1);
}
function new_ava(){
	alert("You can add your picture after full registration");

}
function turndow(){
var sip=$("#fast_ch2").val();
if(sip=="nopego"){
$("#fast_ch1").css("float","right");
$("#fast_ch2").val("yeap");
}
else{
$("#fast_ch1").css("float","left");
$("#fast_ch2").val("nopego");
}
var taspa=$("#fast_ch2").val();
if(taspa=="nopego"){
	$("#udastak").fadeOut(400);
}
else{
	$("#udastak").fadeIn(400);
}

}
function save_all(){
var flname=$("#leag_name").val();
var fcname=$("#club_name").val();
var facn=$("#fac option:selected").val();
var pron=$("#fac_c option:selected").val();
var batya=$("#patro_tez").val();
var dataw=$("#date_tez").val();
var gro=$("#grouppa option:selected").val();
var crs=$(":radio[name=cour]").filter(":checked").val();
if(flname=="" || fcname=="" || facn=="" || pron=="" || batya=="" || dataw=="" || gro=="" || crs==""){
	alert("Some places are empty");
}
if(batya.length < 5){
	alert("Fathers name must be great than 5");
}
else{
	$.ajax({
		type:'get',
		url:'../ajax/ax6.php',
		data:{
			flname:flname,
			fcname:fcname,
			facn:facn,
			pron:pron,
			batya:batya,
			dataw:dataw,
			gro:gro,
			crs:crs
		},
		response:'text',
		success:function(data){
			$("#all").show(200);
			$("#request").fadeIn(500);
		}
	});
}
}
function geor(){
$("#full_in").slideToggle(400);
}