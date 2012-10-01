<?
	session_start();
	include("../lib/php/settings.php");
	include("../lib/php/conexion.php");
	$menu_selected=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techos Financieros</title>
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
	<p><a href="../admin/usuarios.php">Obras/Acciones</a> &gt; Captura Obra/Acción</p>
</div>
<div class="content centrar">
<!-- **********************************************  CÓDIGO ************************************************* -->     
   		<div class="marco20">
            <div class="marcoTitulo">
            <h3>Consulta de Obras y Acciones</h3>
            </div>
            <div class="clr"></div>
            <table id="tListadoObras" class="display" width="100%" cellpadding="0" cellspacing="0">
            	<thead>
                	<tr>
                        <th>&nbsp;</th>
                        <th>ID</th>
                        <th>Número de obra</th>
                        <th>Municipio</th>
                        <th>Fondo</th>
                        <th>Nombre de la Obra</th>
                        <th>Estructura financiera</th>
                        <th>Localidad</th>
                    </tr>
                <tbody>
                	<tr>
                    	<td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                    </tr>
                    <tr>
                    	<td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                        <td>x&nbsp;</td>
                    </tr>
                </tbody>
            </table>    
    </div>
    <!-- **********************************************  TERMINA CÓDIGO ************************************************* -->     
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/jquery.dataTables.js"></script>
<script src="listadoobras.js"></script>
</html>