<?
	session_start();
	include("../lib/php/settings.php");
	include("../lib/php/conexion.php");
	include("../lib/php/class/classUsuario.php");
	$menu_selected=2;
	if(trim($_GET["idu"])!=""){
		$idu=$_GET["idu"];
	}else{
		$respuesta="redirecciona";	
	}
	$temp=new Usuario();
	$temp->getUsuario($idu);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techos Financieros</title>
<link rel="stylesheet" type="text/css" href="../lib/css/reset.css" />
<link rel="stylesheet" type="text/css" href="../lib/css/hecoa.css?3" />
<link rel="stylesheet" type="text/css" href="../lib/css/themes/smoothness/jquery-ui-1.8.4.custom.css"/>
<link rel="stylesheet" type="text/css" href="../lib/css/demo_table_jui.css"/>
</head>
<body>
<form id="Datos" name="Datos">
<input type="hidden" name="respuesta" id="respuesta"  />
<div class="header">
</div>
<?
	include("../view/menu.php");
?>
<div class="nav centrar">
	<p><a href="usuarios.php">Inicio</a> &gt; <a href="usuarios.php">Usuarios</a> &gt; Modificar</p>
</div>
<div class="content centrar">
<!-- **********************************************  CÓDIGO ************************************************* -->     
<table width="100%" border="0">
  <tr>
    <td width="13%"><p>Usuario</p></td>
    <td width="87%"><input type="text" value="<?=$temp->login?>" readonly="readonly" /></td>
    </tr>
  <tr>
    <td><p>Contraseña</p></td>
    <td><input type="text" value="<?=$temp->password?>" /></td>
    </tr>
  <tr>
    <td><p>Nombre</p></td>
    <td><input type="text" value="<?=$temp->nombre?>" /></td>
  </tr>
  <tr>
    <td><p>Municipio</p></td>
    <td><input type="text" value="<?=$temp->cveMuni?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="button" name="btGuardar" id="btGuardar" value="Guardar" />
    </td>
  </tr>
</table>
<!-- **********************************************  TERMINA CÓDIGO ************************************************* -->     
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/jquery.dataTables.js"></script>
<script src="usuarios.js"></script>
</html>