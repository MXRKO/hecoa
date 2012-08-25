<?
	session_start();
	include("../lib/php/settings.php");
	include("../lib/php/conexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techos Financieros</title>
<link href="../lib/css/reset.css" rel="stylesheet" type="text/css" />
<link href="../lib/css/template.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form id="Datos" name="Datos">
<input type="hidden" name="respuesta" id="respuesta"  />
<div class="superior anchoBase centrar" >
	<img src="../image/header.png" height="192" width="800" />
</div>
<div class="centro anchoBase centrar">
	<div class="opciones">
    	<ul class="menu">
            <li><a href="#">Techos Financieros</a></li>
            <li><a href="#">Techos Financieros</a></li>
            <li><a href="#">Techos Financieros</a></li>
            <li><a href="#">Techos Financieros</a></li>
        </ul>
        <div class="limpiar"></div>
    </div>
	<div class="contenedor">
   		<div class="marco_encabezado">
   		  <h3>Techos Financieros</h3></div>
        <div class="marco40">
        <table width="100%" border="0">
          <tr>
            <td width="20%"><p class="der">Municipio</p></td>
            <td width="80%">
            <?
            switch($_SESSION["ROL"]){
				case "ADMIN":
				?>
				<input name="txtMunicipio" type="text" id="txtMunicipio" readonly="readonly" value="<?=$_SESSION["CVE_MUNI"]?>"/>
				<?
				break;
				case "ROOT":
				?>
				<select id="slMunicipio" name="slMunicipio"> 
                	<option value="0">--</option>	
                	<?
                    $sqlMpios=@mysql_query("SELECT LPAD(CVE_MUNI,3,'0') AS CVE_MUNI, NOMBRE FROM c_municipios");
					while($mpios=@mysql_fetch_array($sqlMpios)){
						?>
						<option value="<?=$mpios["CVE_MUNI"]?>"><?=$mpios["CVE_MUNI"].".- ".$mpios["NOMBRE"]?></option>	
						<?	
					}
					?>
                </select>
				<?
				break;
			}
			?>
            </td>
          </tr>
          <tr>
            <td><p class="der">Año</p></td>
            <td><label>
              <select name="slAnio" id="slAnio">
              	<option value="0">--</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
           	  <fieldset>
               	<legend>Techo Financiero F.I.S.M.:</legend>
               	<table width="100%" border="0">
                  <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                      </tr>
                      <tr>
                        <td width="19%"><p class="der">F.I.S.M.</p></td>
                        <td width="22%"><label>
                          <input type="text" name="txtFISM_00" id="txtFISM_00" />
                        </label></td>
                        <td width="22%"><input type="text" name="txtFISM_01" id="txtFISM_01" /></td>
                        <td width="37%"><input type="text" name="txtFISM_02" id="txtFISM_02" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">MUNICIPAL</p></td>
                        <td><input type="text" name="txtFISM_10" id="txtFISM_10" /></td>
                        <td><input type="text" name="txtFISM_11" id="txtFISM_11" /></td>
                        <td><input type="text" name="txtFISM_12" id="txtFISM_12" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">PARTICIPANTES</p></td>
                        <td><input type="text" name="txtFISM_20" id="txtFISM_20" /></td>
                        <td><input type="text" name="txtFISM_21" id="txtFISM_21" /></td>
                        <td><input type="text" name="txtFISM_22" id="txtFISM_22" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">OTROS</p></td>
                        <td><input type="text" name="txtFISM_30" id="txtFISM_30" /></td>
                        <td><input type="text" name="txtFISM_31" id="txtFISM_31" /></td>
                        <td><input type="text" name="txtFISM_32" id="txtFISM_32" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input name="btGuardarFISM" type="button" id="btGuardarFISM" value="Guardar" /></td>
                      </tr>
                </table>
            	</fieldset>
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
            <fieldset>
               	<legend>Techo Financiero F.A.F.M.:</legend>
               	<table width="100%" border="0">
                  <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                      </tr>
                      <tr>
                        <td width="19%"><p class="der">F.A.F.M.</p></td>
                        <td width="22%"><label>
                          <input type="text" name="textfield2" id="textfield2" />
                        </label></td>
                        <td width="22%"><input type="text" name="textfield6" id="textfield6" /></td>
                        <td width="37%"><input type="text" name="textfield13" id="textfield13" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">MUNICIPAL</p></td>
                        <td><input type="text" name="textfield3" id="textfield3" /></td>
                        <td><input type="text" name="textfield7" id="textfield7" /></td>
                        <td><input type="text" name="textfield12" id="textfield12" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">PARTICIPANTES</p></td>
                        <td><input type="text" name="textfield4" id="textfield4" /></td>
                        <td><input type="text" name="textfield8" id="textfield8" /></td>
                        <td><input type="text" name="textfield11" id="textfield11" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">OTROS</p></td>
                        <td><input type="text" name="textfield5" id="textfield5" /></td>
                        <td><input type="text" name="textfield9" id="textfield9" /></td>
                        <td><input type="text" name="textfield10" id="textfield10" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input name="btGuardarFAFM" type="button" class="btGuardar" id="btGuardarFAFM" value="Guardar" /></td>
                      </tr>
                </table>
            	</fieldset>
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
            <fieldset>
               	<legend>Techo Financiero F.I.S.M.R.:</legend>
               	<table width="100%" border="0">
                  <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                      </tr>
                      <tr>
                        <td width="19%"><p class="der">F.I.S.M.R.</p></td>
                        <td width="22%"><label>
                          <input type="text" name="textfield2" id="textfield2" />
                        </label></td>
                        <td width="22%"><input type="text" name="textfield6" id="textfield6" /></td>
                        <td width="37%"><input type="text" name="textfield13" id="textfield13" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">MUNICIPAL</p></td>
                        <td><input type="text" name="textfield3" id="textfield3" /></td>
                        <td><input type="text" name="textfield7" id="textfield7" /></td>
                        <td><input type="text" name="textfield12" id="textfield12" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">PARTICIPANTES</p></td>
                        <td><input type="text" name="textfield4" id="textfield4" /></td>
                        <td><input type="text" name="textfield8" id="textfield8" /></td>
                        <td><input type="text" name="textfield11" id="textfield11" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">OTROS</p></td>
                        <td><input type="text" name="textfield5" id="textfield5" /></td>
                        <td><input type="text" name="textfield9" id="textfield9" /></td>
                        <td><input type="text" name="textfield10" id="textfield10" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input name="btGuardarFISMR" type="button" class="btGuardar" id="btGuardarFISMR" value="Guardar" /></td>
                      </tr>
                </table>
            	</fieldset>
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
            <fieldset>
               	<legend>Techo Financiero F.A.F.M.R.:</legend>
               	<table width="100%" border="0">
                  <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                      </tr>
                      <tr>
                        <td width="19%"><p class="der">F.A.F.M.R.</p></td>
                        <td width="22%"><label>
                          <input type="text" name="textfield2" id="textfield2" />
                        </label></td>
                        <td width="22%"><input type="text" name="textfield6" id="textfield6" /></td>
                        <td width="37%"><input type="text" name="textfield13" id="textfield13" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">MUNICIPAL</p></td>
                        <td><input type="text" name="textfield3" id="textfield3" /></td>
                        <td><input type="text" name="textfield7" id="textfield7" /></td>
                        <td><input type="text" name="textfield12" id="textfield12" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">PARTICIPANTES</p></td>
                        <td><input type="text" name="textfield4" id="textfield4" /></td>
                        <td><input type="text" name="textfield8" id="textfield8" /></td>
                        <td><input type="text" name="textfield11" id="textfield11" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">OTROS</p></td>
                        <td><input type="text" name="textfield5" id="textfield5" /></td>
                        <td><input type="text" name="textfield9" id="textfield9" /></td>
                        <td><input type="text" name="textfield10" id="textfield10" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <input name="btGuardarFAFMR" type="button" class="btGuardar" id="btGuardarFAFMR" value="Guardar" />
                        </label></td>
                      </tr>
                </table>
            	</fieldset>
            </td>
          </tr>
        </table>
        </div>
        <div class="marco_fondo">
       	  <div class="leyenda"><p>Gracias por confiar en el gobierno de Morelos</p></div>
        </div>
    </div>
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script src="techofinanciero.js"></script>
</html>