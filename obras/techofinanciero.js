$(document).ready(function(){
	$("#panel2").hide();
	$("input[type=text]").each(function(){
		$(this).val("0.00");
		$(this).css({"text-align":"right"});
		$(this).autoNumeric({wEmpty: 'zero'});
	});	
	
	$("#slMunicipio, #slAnio").change(function(){
		if($.trim($("#slMunicipio").val())!="0" && $.trim($("#slAnio").val())!="0"){
			$.post("techofinanciero_functions.php",{anio:$("#slAnio").val(),CVE_MUNI:$("#slMunicipio").val()},function(data){
				alert("valor: "+data);				
			});	
		}								 
	});
	
	$("#btGuardarFISM").click(function(){								   
	});
	
	$("a#alink1").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$("#panel1").show();
		$("#panel2").hide();
		$("ul.subopciones li:eq(0)").addClass("seleccionado");
		$("ul.subopciones li:eq(1)").removeClass("seleccionado");
	});
	$("a#alink2").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$("#panel1").hide();
		$("#panel2").show();								
		$("ul.subopciones li:eq(0)").removeClass("seleccionado");
		$("ul.subopciones li:eq(1)").addClass("seleccionado");
	});
});