$(document).on("ready",function(){
	$("#panel2").hide();
	$("#panel3").hide();
	$("ul.subopciones li a:eq(0)").click(function(event){
		event.preventDefault();
		$("#panel1").show();	
		$("#panel2").hide();	
		$("#panel3").hide();	
	});
	$("ul.subopciones li a:eq(1)").click(function(){
		event.preventDefault();
		$("#panel1").hide();
		$("#panel2").show();
		$("#panel3").hide();
	});
	$("ul.subopciones li a:eq(2)").click(function(){
		event.preventDefault();
		$("#panel1").hide();
		$("#panel2").hide();
		$("#panel3").show();	
	});
	
});