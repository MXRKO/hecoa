<?
	session_start();
	include("../lib/php/settings.php");
	include("../lib/php/conexion.php");
	$menu_selected=2;
    $titulo_pagina="Catálogo de Conceptos";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$titulo_pagina?></title>
<link rel="stylesheet" type="text/css" href="../lib/css/reset.css" />
<link rel="stylesheet" type="text/css" href="../lib/css/hecoa.css" />
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
	<p><a href="#">Catálogos</a> &gt; <?=$titulo_pagina?></p>
</div>
<div class="content centrar">
<!-- **********************************************  CÓDIGO ************************************************* -->     
   		<div class="marco20">
            <div class="marcoTitulo">
            <h3>Catálogo de Conceptos</h3>
            </div>
            <div class="clr"></div>
            <table width="100%" cellspacing="0" cellpadding="0">
            	<tr>
                	<td width="18%">Clave Concepto</td>
                    <td width="82%"><input type="text" id="txtClaveConcepto" /> </td>
                </tr>
                <tr>
                	<td>Descripción</td>
                    <td><input type="text" id="txtDescripcion" /> </td>
                </tr>
                <tr>
                	<td>Rubro</td>
                    <td><input type="text" id="txtRubro" /> </td>
                </tr>
                <tr>
                	<td>&nbsp;</td>
                    <td><input type="button" id="btGuardar" value="Guardar" /> </td>
                </tr>
            </table>
	</div>
    <!-- **********************************************  TERMINA CÓDIGO ************************************************* -->     
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/jquery.dataTables.js"></script>
<script src="concepto.js"></script>
</html>