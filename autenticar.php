<?
session_start();
include("lib/php/conexion.php");
function quitar($mensaje)
{
	$mensaje = str_replace("<","<",$mensaje);
	$mensaje = str_replace(">",">",$mensaje);
	$mensaje = str_replace("\'","'",$mensaje);
	$mensaje = str_replace('\"',"'",$mensaje);
	$mensaje = str_replace('\\\\','"\"',$mensaje);
	return $mensaje;
}

if(trim($_POST["txtUsuario"]) != "" && trim($_POST["txtContrasena"]) != "")
{
	$nickN = quitar($_POST["txtUsuario"]);
	$passN = quitar($_POST["txtContrasena"]);

    $consulta="SELECT ID_USUARIO, NOMBRE, ROL, CVE_MUNI FROM c_usuarios WHERE LOGIN='$nickN' AND PASSWORD = '$passN' AND ESTATUS = 'AC' LIMIT 1";
	$result = mysql_query($consulta);
	if($row = mysql_fetch_array($result))
	{
		if($row["ROL"]=="ADMIN"){
			$liga="obras/capturaobra.php";
		}
		else{
			$liga="manage/clientes.php";	
		}
		$_SESSION["IDU"]=$row["id"];
		$_SESSION["NOMBRE"]=$row["NOMBRE"];
		$_SESSION["ROL"]=$row["ROL"];
		$_SESSION["CVE_MUNI"]=$row["CVE_MUNI"];
		?>
        Cargando...
        <script type="text/javascript" languaje="javascript">
        window.location.href="<?=$liga?>";
        </script>
		<?
	}
	else
	{
		session_unset();
		session_destroy();
		?>
		<script>
        	window.location.href="login.php?respuesta=DESCONOCIDO";
        </script>
		<?
	}
	mysql_free_result($result);
	}
else
{
	?>
    <script>
	window.location.href='login.php?respuesta=DESCONOCIDO';
    </script>
    <?
}
mysql_close();
?>