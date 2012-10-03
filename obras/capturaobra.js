$(document).on("ready",function(){
	$("#panel2").hide();
	$("#panel3").hide();
	$("ul.subopciones li a:eq(0)").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$("#panel1").show();	
		$("#panel2").hide();	
		$("#panel3").hide();	
		$("ul.subopciones li:eq(0)").addClass("seleccionado");
		$("ul.subopciones li:eq(1)").removeClass("seleccionado");
		$("ul.subopciones li:eq(2)").removeClass("seleccionado");
	});
	$("ul.subopciones li a:eq(1)").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$("#panel1").hide();
		$("#panel2").show();
		$("#panel3").hide();
		$("ul.subopciones li:eq(0)").removeClass("seleccionado");
		$("ul.subopciones li:eq(1)").addClass("seleccionado");
		$("ul.subopciones li:eq(2)").removeClass("seleccionado");
	});
	$("ul.subopciones li a:eq(2)").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$("#panel1").hide();
		$("#panel2").hide();
		$("#panel3").show();	
		$("ul.subopciones li:eq(0)").removeClass("seleccionado");
		$("ul.subopciones li:eq(1)").removeClass("seleccionado");
		$("ul.subopciones li:eq(2)").addClass("seleccionado");
	});
	
});