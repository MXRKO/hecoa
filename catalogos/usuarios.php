<?
	session_start();
	include("../lib/php/settings.php");
	include("../lib/php/conexion.php");
	include("../lib/php/class/classUsuario.php");
	if(trim($_GET["t"])!=""){
		$tipo=$_GET["t"];
	}else{
		$respuesta="redirecciona";	
	}
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
<div class="menu centrar">
	<ul class="principal">
    	<li><a href="#">Obras/Acciones</a>
        	<ul>
            	<li><a href="#">Techos Financieros</a></li>
                <li><a href="#">Captura Obra/Acción</a></li>
                <li><a href="#">Lista Obras/Acciones</a></li>
            </ul>
        </li>
        <li><a href="#">Reportes</a>
        	<ul>
            	<li><a href="#">Aprobaciones y Modificaciones Presupuestales</a></li>
                <li><a href="#">Reportes trimestrales y cierres de ejercicio</a></li>
                <li><a href="#">Reportes para el formato único del portal aplicativo (SHCP)</a></li>
                <li><a href="#">Resumen ejecutivo</a></li>
            </ul>
        </li>
        <li><a href="#">Catálogos</a>
        	<ul>
            	<li><a href="#">Conceptos</a></li>
                <li><a href="#">Consejos</a></li>
                <li><a href="#">Contratistas</a></li>
                <li><a href="#">Dependencias</a></li>
                <li><a href="#">Descripciones</a></li>
                <li><a href="#">Proveedores</a></li>
                <li><a href="#">Rubros</a></li>
                <li><a href="#">Unidades de medida</a></li>
                <li><a href="#">Usuarios</a></li>
            </ul>
        </li>
        <li><a href="#">Apertura Programatica</a>
        	<ul>
            	<li><a href="#">Programas</a></li>
                <li><a href="#">Orden programas</a></li>
                <li><a href="#">Subprogramas</a></li>
                <li><a href="#">Tipos</a></li>
                <li><a href="#">Rubro gasto</a></li>
                <li><a href="#">Destino gasto</a></li>                                
            </ul>
        </li>
        <li><a href="#">Salir</a>
        </li>
    </ul>	
    <div class="clr"></div>
</div>
<div class="nav centrar">
	<p><a href="usuarios.php">Inicio</a> &gt; Usuarios</p>
</div>
<div class="content centrar">
<!-- **********************************************  CÓDIGO ************************************************* -->
  <table id="tUsuarios" width="100%" border="0">
    <thead>
    <tr>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>Id</th>
      <th>Login</th>
      <th>Nombre</th>
      <th>Estatus</th>
      <th>Rol</th>
      <th>Fecha de alta</th>
      <th>Municipio</th>
    </tr>
    </thead>
    <?
	$nuevo=new Usuario();
	$todos=$nuevo->getAll("SELECT*FROM c_usuarios WHERE CVE_MUNI='".$_SESSION["CVE_MUNI"]."'");
	if($todos!=false){	
		foreach($todos as $user){
			?>
			<tr>
			  <td><input type="checkbox" /></td>
              <td><input type="button" class="btEditar" data-id-user="<?=$user["ID_USUARIO"]?>" value="Editar" /></td>
              <td><?=$user["ID_USUARIO"]?></td>
			  <td><?=$user["LOGIN"]?></td>
			  <td><?=$user["NOMBRE"]?></td>
			  <td><?=$user["ESTATUS"]?></td>
			  <td><?=$user["ROL"]?></td>
			  <td><?=$user["FECHA_ALTA"]?></td>
			  <td><?=$user["CVE_MUNI"]?></td>
			</tr>
			<?
		}
	}
	?>
  </table>
<!-- **********************************************  CÓDIGO ************************************************* -->     
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/jquery.dataTables.js"></script>
<script src="usuarios.js"></script>
</html>