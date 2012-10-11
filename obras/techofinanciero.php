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
	<p><a href="../admin/usuarios.php">Obras/Acciones</a> &gt; Techos Financieros</p>
</div>
<div class="content centrar">
<!-- **********************************************  CÓDIGO ************************************************* -->     
    <div class="marco20">
        <div class="marcoTitulo">
        <h3>Techos Financieros</h3>
        </div>
        <table width="100%" cellpadding="0" cellspacing="0" class="mb20p">
        	<tr>
        	  <td width="8%"><p class="der">Municipio</p></td>
        	  <td width="92%"><?
            switch($_SESSION["ROL"]){
				case "ADMIN":
				?>
        	    <input name="txtMunicipio2" type="text" id="txtMunicipio2" readonly="readonly" value="<?=$_SESSION["CVE_MUNI"]?>"/>
        	    <?
				break;
				case "ROOT":
				?>
        	    <select id="slMunicipio2" name="slMunicipio2">
        	      <option value="0">--</option>
        	      <?
                    $sqlMpios=@mysql_query("SELECT LPAD(CVE_MUNI,3,'0') AS CVE_MUNI, NOMBRE FROM c_municipios");
					while($mpios=@mysql_fetch_array($sqlMpios)){
						?>
        	      <option value="<?=$mpios["CVE_MUNI"]?>">
        	        <?=$mpios["CVE_MUNI"].".- ".$mpios["NOMBRE"]?>
       	          </option>
        	      <?	
					}
					?>
      	      </select>
        	    <?
				break;
			}
			?></td>
      	  </tr>
        	<tr>
        	  <td><p class="der">Año</p></td>
        	  <td><label>
        	    <select name="slAnio2" id="slAnio2">
        	      <option value="0">--</option>
        	      <option value="2012">2012</option>
        	      <option value="2011">2011</option>
      	      </select>
      	    </label></td>
      	  </tr>
        </table>
        <ul class="subopciones">
          <li class="seleccionado"><a id="alink1" href="#">General</a></li>
            <li><a id="alink2" href="#">Otros programas</a></li>	
      </ul>
        <div class="clr"></div>
        <div id="panel1" class="pt20p">
        <table width="100%" border="0">
          <tr>
            <td width="20%">&nbsp;</td>
            <td width="80%">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
           	  <fieldset>
               	<legend>Techo Financiero F.I.S.M.</legend>
               	<table width="100%" border="0">
              <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                        <td><p>No de Periodico</p></td>
                        <td><p>Fecha del Periodico</p></td>
                      </tr>
                      <tr>
                        <?
                        	
						?>
                        <td width="12%"><p class="der">F.I.S.M.</p></td>
                        <td width="15%"><label>
                          <input type="text" name="txtFISMTechoFinanciero" id="txtFISMTechoFinanciero" />
                        </label></td>
                        <td width="15%"><input type="text" name="txtFISMAprovado" id="txtFISMAprovado" /></td>
                        <td width="15%"><input type="text" name="txtFISMSaldo" id="txtFISMSaldo" /></td>
                        <td width="25%"><input name="txtFISMNoPeriodico" type="text" id="txtFISMNoPeriodico" size="7" /></td>
                        <td width="18%"><input name="txtFISMFechaPeriodico" type="text" id="txtFISMFechaPeriodico" size="12" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">MUNICIPAL</p></td>
                        <td><input type="text" name="txtFISM_10" id="txtFISM_10" /></td>
                        <td><input type="text" name="txtFISM_11" id="txtFISM_11" /></td>
                        <td><input type="text" name="txtFISM_12" id="txtFISM_12" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><p class="der">PARTICIPANTES</p></td>
                        <td><input type="text" name="txtFISM_20" id="txtFISM_20" /></td>
                        <td><input type="text" name="txtFISM_21" id="txtFISM_21" /></td>
                        <td><input type="text" name="txtFISM_22" id="txtFISM_22" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><p class="der">OTROS</p></td>
                        <td><input type="text" name="txtFISM_30" id="txtFISM_30" /></td>
                        <td><input type="text" name="txtFISM_31" id="txtFISM_31" /></td>
                        <td><input type="text" name="txtFISM_32" id="txtFISM_32" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name="btGuardarFISM" type="button" id="btGuardarFISM" value="Guardar" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
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
               	<legend>Techo Financiero FORTAMUN-DF</legend>
               	<table width="100%" border="0">
              <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                        <td><p>No de Periodico</p></td>
                        <td><p>Fecha del Periodico</p></td>
                      </tr>
                      <tr>
                        <td width="11%"><p class="der">FORTAMUN-DF</p></td>
                        <td width="13%"><label>
                          <input type="text" name="textfield2" id="textfield2" />
                        </label></td>
                        <td width="13%"><input type="text" name="textfield6" id="textfield6" /></td>
                        <td width="20%"><input type="text" name="textfield13" id="textfield13" /></td>
                        <td width="25%"><input name="textfield" type="text" id="textfield" size="7" /></td>
                        <td width="18%"><input name="textfield17" type="text" id="textfield17" size="12" /></td>
                      </tr>
                      <tr>
                        <td><p class="der">MUNICIPAL</p></td>
                        <td><input type="text" name="textfield3" id="textfield3" /></td>
                        <td><input type="text" name="textfield7" id="textfield7" /></td>
                        <td><input type="text" name="textfield12" id="textfield12" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><p class="der">PARTICIPANTES</p></td>
                        <td><input type="text" name="textfield4" id="textfield4" /></td>
                        <td><input type="text" name="textfield8" id="textfield8" /></td>
                        <td><input type="text" name="textfield11" id="textfield11" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><p class="der">OTROS</p></td>
                        <td><input type="text" name="textfield5" id="textfield5" /></td>
                        <td><input type="text" name="textfield9" id="textfield9" /></td>
                        <td><input type="text" name="textfield10" id="textfield10" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name="btGuardarFAFM" type="button" class="btGuardar" id="btGuardarFAFM" value="Guardar" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
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
               	<legend>Techo Financiero F.I.S.M.R.</legend>
               	<table width="100%" border="0">
              <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                      </tr>
                      <tr>
                        <td width="12%"><p class="der">F.I.S.M.R.</p></td>
                        <td width="18%"><label>
                          <input type="text" name="textfield2" id="textfield2" />
                        </label></td>
                        <td width="16%"><input type="text" name="textfield6" id="textfield6" /></td>
                        <td width="54%"><input type="text" name="textfield13" id="textfield13" /></td>
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
                        <td><input name="btGuardarFISMR" type="button" class="btGuardar" id="btGuardarFISMR" value="Guardar" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
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
               	<legend>Techo Financiero FORTAMNU-DF R</legend>
               	<table width="100%" border="0">
              <tr>
                        <td>&nbsp;</td>
                        <td><p>Techo Financiero</p></td>
                        <td><p>Aprobado</p></td>
                        <td><p>Saldo</p></td>
                      </tr>
                      <tr>
                        <td width="14%"><p class="der">FORTAMUN-DF R</p></td>
                        <td width="27%"><label>
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
                        <td><input name="btGuardarFAFMR" type="button" class="btGuardar" id="btGuardarFAFMR" value="Guardar" /></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                </table>
            </fieldset>
            </td>
          </tr>
        </table>
        </div>
      <div id="panel2" class="pt20p">
        <fieldset>
          <legend>Estructura Financiera</legend>
          <table width="100%" border="0">
            <tr>
              <td><p>DEPENDENCIA</p></td>
              <td><select name="select" id="select">
                <option value="0">--</option>
                <option value="1">Dependencia de prueba 1</option>
                <option value="2">Dependencia de prueba 2</option>
              </select></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><p>PROGRAMA</p></td>
              <td><select name="select2" id="select2">
                <option value="0">--</option>
                <option value="1">Programa de la dependencia seleccionada</option>
              </select></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p>Techo Financiero</p></td>
              <td><p>Aprobado</p></td>
              <td><p>Saldo</p></td>
            </tr>
            <tr>
              <td width="15%"><p class="der">F.I.S.M.</p></td>
              <td width="30%"><label>
                <input type="text" name="txtFISM_" id="txtFISM_" />
              </label></td>
              <td width="21%"><input type="text" name="txtFISM_" id="txtFISM_2" /></td>
              <td width="34%"><input type="text" name="txtFISM_" id="txtFISM_3" /></td>
            </tr>
            <tr>
              <td><p class="der">FORTAMUN-DF</p></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_4" /></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_5" /></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_6" /></td>
            </tr>
            <tr>
              <td><p class="der">MUNICIPAL</p></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_7" /></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_8" /></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_9" /></td>
            </tr>
            <tr>
              <td><p class="der">PARTICIPANTES</p></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_13" /></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_14" /></td>
              <td><input type="text" name="txtFISM_" id="txtFISM_15" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btGuardarFISM2" type="button" id="btGuardarFISM2" value="Guardar" /></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </fieldset>	
        </div>
    </div>
<!-- **********************************************  TERMINA CÓDIGO ************************************************* -->     
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/jquery.dataTables.js"></script>
<script src="techofinanciero.js"></script>
</html>