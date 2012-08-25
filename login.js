// JavaScript Document
$(document).ready(function(){
	$("#txtUsuario").keyup(function(){
		$("#txtUsuario").val($("#txtUsuario").val().toUpperCase());
	});
	
	$("#Datos").validate({
		rules: {
			txtUsuario: { required: true},
			txtContrasena: { required:true},
		},
		debug:true,
		messages: {
			txtUsuario: "El campo Usuario es obligatorio.",
			txtContrasena : "El campo Contraseña es obligatorio.",
		},
		submitHandler:function(form){
			$("#btIngresar").attr("disabled",true);
			$("#Datos").attr("action","autenticar.php");
			form.submit();
		}
	});
	
	/*$("#btIngresar").click(function(){
		if($.trim($("#txtUsuario").val())!="" && $.trim($("#txtContrasena").val())!=""){
			$("#Datos").attr("action","autenticar.php");
			$("#Datos").submit();
		}
		else{
			alert("Debe escribir su usario y contraseña");	
		}
	});*/
	
	if($.trim($("#respuesta").val())!=""){
		switch($("#respuesta").val()){
			case "DESCONOCIDO":
				$(".mensaje").html("Usuario y/o password incorrectos");
			break;
		}
	}
});

