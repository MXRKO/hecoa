<?php
class Usuario{
	public $idUsuario;
	public $nombre;
	public $login;
	public $password;
	public $estatus;
	public $rol;
	public $fechaAlta;
	public $cveMuni;
	
	public function __construct(){
			
	}
	
	public function getUsuario($pIdUsuario){
		$result=@mysql_query("SELECT*FROM c_usuarios WHERE ID_USUARIO='".$pIdUsuario."'");	
		if(@mysql_num_rows($result)>0){
			$row=@mysql_fetch_array($result);
			$this->idUsuario=$pIdUsuario;
			$this->nombre=$row["NOMBRE"];
			$this->login=$row["LOGIN"];
			$this->password=$row["PASSWORD"];
			$this->estatus=$row["ESTATUS"];
			$this->rol=$row["ROL"];
			$this->fechaAlta=$row["FECHA_ALTA"];
			$this->cveMuni=$row["CVE_MUNI"];
		}else{
			return false;	
		}
	}/* TERMINA METODO CONTRUCTOR */
	
	public function getAll($sql){
		$ex=mysql_query($sql);
		if(mysql_num_rows($ex)>0){
			$i=0;
			while($row=mysql_fetch_array($ex)){
				$usuarios[$i]["ID_USUARIO"]=$row["ID_USUARIO"];
				$usuarios[$i]["LOGIN"]=$row["LOGIN"];
				$usuarios[$i]["NOMBRE"]=$row["NOMBRE"];
				$usuarios[$i]["ROL"]=$row["ROL"];
				$usuarios[$i]["ESTATUS"]=$row["ESTATUS"];
				$usuarios[$i]["CVE_MUNI"]=$row["CVE_MUNI"];
				$usuarios[$i]["FECHA_ALTA"]=$row["FECHA_ALTA"];
				$i++;
			}
			return $usuarios;
		}
		else{
			return false;	
		}
	}
	
	public function update($pIdUsuario, $pPassword, $pNombre){
		return $result=@mysql_query("UPDATE c_usuarios SET PASSWORD='".$pPassword."', NOMBRE='".$pNombre."' WHERE ID_USUARIO='".$pIdUsuario."'");
	}
}/* TERMINA CLASE USUARIO */
?>