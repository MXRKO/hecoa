$(document).ready(function(){
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
});