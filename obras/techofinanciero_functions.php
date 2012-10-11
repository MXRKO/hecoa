<?
	switch($_POST["Accion"]){
		case 'BUSCAR':
			$sql="SELECT*FROM r_techofinanciero_adicional WHERE ANIO='".$_POST["anio"]."' AND CVE_APORTACION='".$_POST["caportacion"]."' AND CVE_FONDO='".$_POST["cfondo"]."' AND CVE_MUNI='".$_POST["cfondo"]."'"
			mysql_query($sql);
		break;
	}
?>