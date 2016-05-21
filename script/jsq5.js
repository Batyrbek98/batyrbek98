$(document).ready(
	function(){
		$("button").click(calc);
		});
	
function calc(){
	var a=$(this).val();
	var b=$("#calc_text").val(a);
	if(b=""){
	var c=$("#calc_text").val(a);
}else{
	alert(a+b);
}
}
	