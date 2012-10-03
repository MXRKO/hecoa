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
<input type="hidden" name="cve" id="cve"  />
<input type="hidden" name="Accion" id="Accion"  />
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
            <div class="opciones">
            	    <input type="button" id="btNuevo" value="Nuevo" />
                    <input type="button" id="btEliminar" value="Eliminar" />
            </div>
            <table id="tConceptos" class="display datos" width="100%" cellpadding="0" cellspacing="0">
            	<thead>
                	<tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Clave Concepto</th>
                        <th>Descripción</th>
                        <th>Rubro</th>
                    </tr>
                <tbody>
                	<?
                    $sql="SELECT*FROM c_conceptos";
                    $exsql=mysql_query($sql) or die("ERROR");
                    while($datos=mysql_fetch_array($exsql)){
                    ?>
                    <tr>
                    	<td><label><input type="checkbox" name="checkbox" id="checkbox" /></label></td>
                        <td><input data-cve="<?=$datos["CVE_CONCEPTO"]?>" type="button" class="btEditar" value="Editar"/></td>
                        <td><?=$datos["CVE_CONCEPTO"]?></td>
                        <td><?=$datos["DESCRIPCION_CONCEPTO"]?></td>
                        <td><?
                           $sql_rubro="SELECT*FROM c_rubros WHERE CVE_RUBRO='".$datos["RUBRO"]."'"; 
                           $exsql_rubro=mysql_query($sql_rubro);
                           $rubro=mysql_fetch_array($exsql_rubro);
                           echo $rubro["DESCRIPCION"];
                           ?>
                        </td>
                    </tr>
                    <?
                    }
                    ?>
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
<script src="conceptos.js"></script>
</html>