<?
	session_start();
	include("lib/php/settings.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$NOMBRE_SITIO?></title>
<link href="lib/css/reset.css" rel="stylesheet" type="text/css" />
<link href="lib/css/template.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form id="Datos" name="Datos" method="post">
<input type="hidden" name="respuesta" id="respuesta" value="<?=$_GET["respuesta"]?>" />
<div class="superior anchoBase centrar" >
	<img src="image/header.png" height="192" width="800" />
</div>
<div class="centro anchoBase centrar">
	<div class="contenedor">
   		<div class="marco_encabezado"><h3>Acceso de usuarios registrados</h3></div>
        <div class="mensaje"></div>
        <table class="tabla_formulario" width="100%" border="0">
          <tr>
            <td width="42%"><p>Usuario</p></td>
            <td width="58%">
              <input name="txtUsuario" type="text" id="txtUsuario" class="required mayusculas" size="28" />
            </td>
          </tr>
          <tr>
            <td><p>Contraseña</p></td>
            <td><input name="txtContrasena" type="password" id="txtContrasena" class="required" size="28" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="btIngresar" id="btIngresar" value="Ingresar" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="marco_fondo">
        	<div class="leyenda"><p>Gracias por confiar en el gobierno de Morelos</p></div>
        </div>
    </div>
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="lib/js/jquery.validate.js"></script>
<script type="text/javascript" language="javascript" src="login.js"></script>
</html>