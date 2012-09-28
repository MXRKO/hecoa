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
            <h3>Datos Generales de Obras y Acciones</h3>
            </div>
            <ul class="subopciones">
                <li class="seleccionado"><a href="#">Paso 1 de 3</a></li>
                <li><a href="#">Paso 2 de 3</a></li>	
                <li><a href="#">Paso 3 de 3</a></li>	
            </ul>
            <div class="clr"></div>
            <div id="panel1" class="panelDatos">
                <table class="normal" width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="2%">*</td>
                        <td width="23%"><label>Número de obra o acción</label></td>
                        <td width="75%">
                          <input type="text" name="textfield" id="textfield" />
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label>Descripción</label></td>
                        <td>
                          <select name="select" id="select">
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0">
                      <tr>
                        <td width="50%">
                          <div class="marcoFS">
                            <fieldset>
                              <legend>Ubicación</legend>
                              <table width="100%" border="0">
                                  <tr>
                                    <td width="4%">*</td>
                                      <td width="32%"><label>Municipio</label></td>
                                      <td width="64%">
                                        <input type="text" name="txtMunicipio" id="txtMunicipio" />
                                      </td>
                                </tr>
                                    <tr>
                                      <td>*</td>
                                      <td><label>Region</label></td>
                                      <td><input type="text" name="txtRegion" id="txtRegion" /></td>
                                    </tr>
                                    <tr>
                                      <td>*</td>
                                      <td><label>Localidad</label></td>
                                      <td><input type="text" name="txtLocalidad" id="txtLocalidad" /></td>
                                    </tr>
                                    <tr>
                                      <td>*</td>
                                      <td><label>Asentamiento</label></td>
                                      <td><select name="slAsentamiento" id="slAsentamiento">
                                      </select></td>
                                    </tr>
                              </table>
                            </fieldset>
                          </div>
                        </td>
                        <td width="2%"></td>
                        <td width="48%">
                        <fieldset>
                       	  <legend>Financiamiento</legend>
                       	  <table width="100%" border="0">
                              <tr>
                                <td width="4%">*</td>
                                <td width="29%"><label>Financiamiento</label></td>
                                <td width="67%">
                                  <select name="slFinanciamiento" id="slFinanciamiento">
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>*</td>
                                <td><label>Fondo</label></td>
                                <td><select name="slFondo" id="slFondo">
                                </select></td>
                              </tr>
                            </table>
                        </fieldset>
                        </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><fieldset>
                    	<legend>Apertura Programatica</legend>
                    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="2%">*</td>
                            <td width="14%"><label>Programa</label></td>
                            <td width="84%">
                            <select name="slPrograma" id="slPrograma">
                            	<option value="0">--</option>
								<?
                            	$sql_programas=mysql_query("SELECT*FROM c_programas");
								while($programas=mysql_fetch_array($sql_programas)){
									?>
									<option value="<?=$programas["CVE_PROG"]?>"><?=$programas["DESCRIPCION"]?></option>
									<?
								}
								?>
                            </select></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><label>Subprograma</label></td>
                            <td><select name="slSubprograma" id="slSubprograma">
                            </select></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><label>Tipo</label></td>
                            <td><select name="slTipo" id="slTipo">
                            </select></td>
                          </tr>
                      </table>
                    </fieldset></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                    <fieldset>
                    <legend>Clasificación del destino del gasto (Pash)</legend>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="15%"><label>Tipo de gasto</label></td>
                        <td width="85%"><select name="slTipoGasto" id="slTipoGasto">
                        </select></td>
                      </tr>
                      <tr>
                        <td><label>Rubro gasto</label></td>
                        <td><select name="slRubroGasto" id="select9">
                        </select></td>
                      </tr>
                      <tr>
                        <td><label>Destino gasto</label></td>
                        <td><select name="slDestinoGasto" id="select10">
                        </select></td>
                      </tr>
                    </table>
                    </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0">
                      <tr>
                        <td width="52%"><fieldset>
                        	<legend>Situación y Ejecución</legend>
                        	<table width="100%" border="0">
                              <tr>
                                <td width="4%">*</td>
                                <td width="27%"><label>Situación</label></td>
                                <td width="69%"><select name="slSituacion" id="select11">
                                </select></td>
                              </tr>
                              <tr>
                                <td>*</td>
                                <td><label>Ejecución</label></td>
                                <td><select name="slEjecucion" id="select12">
                                </select></td>
                              </tr>
                              <tr>
                                <td>*</td>
                                <td><label>Obra/Acción</label></td>
                                <td><select name="slObraAccion" id="select13">
                                </select></td>
                              </tr>
                            </table>
                        </fieldset></td>
                        <td width="2%">&nbsp;</td>
                        <td width="46%"><fieldset>
                        	<legend>Anexo de aprobación</legend>
                        	<table width="100%" border="0">
                              <tr>
                                <td width="5%">*</td>
                                <td width="22%"><label>Anexo</label></td>
                                <td width="73%"><label>
                                  <input type="text" name="textfield2" id="textfield2" />
                                </label></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                          </table>
                        </fieldset></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
			</div>
            <div id="panel2" class="panelDatos">
              <table width="100%" border="0">
                <tr>
                  <td><table width="100%" border="0">
                        <tr>
                          <td width="23%"><label>Número de obra o acción</label></td>
                          <td width="77%">
                            <input name="textfield3" type="text" id="textfield3" size="65" />
                          </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                  </table></td>
                </tr>
                <tr>
                  <td><fieldset>
                   	<legend>Dependencias</legend>
                   	<table width="100%" border="0">
                   	  <tr>
                   	    <td width="12%"><label>Ejecutora</label></td>
                   	    <td width="88%">
                   	      <select name="select2" id="select2">
               	          </select>
               	          <input type="button" value="Ver Municipio - Dependencias" />
                   	    </td>
               	      </tr>
                   	  <tr>
                   	    <td><label>Normativa</label></td>
                   	    <td><select name="select3" id="select3">
               	        </select>
               	        <input type="button" value="Ver Programas - Dependencias" /></td>
               	      </tr>
                   	  <tr>
                   	    <td colspan="2">&nbsp;</td>
               	      </tr>
                   	  <tr>
                   	    <td colspan="2">
                        <fieldset>
                       	  <legend>Validación Dependencia Normativa</legend>
                            <table width="100%" cellpadding="0" cellspacing="0">
                            	<tr>
                                	<td width="10%"><label>Oficio</label></td>
                                    <td width="90%"><input type="text" /></td>
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
                        <table width="100%" cellspacing="0" cellpadding="0">
                        	<tr>
                            	<td width="49%">
                                	<fieldset>
                                    	<legend>Fechas</legend>
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            	<td width="3%"><label>*</label></td>
                                                <td width="34%"><label>Inicio estimado</label></td>
                                                <td width="63%"><input type="text" /></td>
                                            </tr>
                                            <tr>
                                            	<td><label>*</label></td>
                                                <td><label>Término estimado</label></td>
                                                <td><input type="text" /></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td><label>Inicio físico real</label></td>
                                              <td><input type="text" /></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td><label>Término físico real</label></td>
                                              <td><input type="text" /></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td><label>Inicio finan. real</label></td>
                                              <td><input type="text" /></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td><label>Término finan. real</label></td>
                                              <td><input type="text" /></td>
                                            </tr>
                                            <tr>
                                              <td><label>*</label></td>
                                              <td><label>Fecha de registro</label></td>
                                              <td><input type="text" /></td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </td>
                                <td width="2%">&nbsp;</td>
                                <td width="49%">
                                	<fieldset>
                                    	<legend>Beneficiarios y Jornales</legend>
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                        	<tr>
                                            	<td>
                                                	<table width="100%" cellspacing="0" cellpadding="0">
                                                		<tr>
                                                            <td width="1%"><label>*</label></td>
                                                            <td width="22%"><label>Beneficiarios</label></td>
                                                            <td width="32%"><input type="text" /></td>
                                                    	</tr>
                                                    	<tr>
                                                            <td><label>*</label></td>
                                                            <td><label>Jornaleros</label></td>
                                                            <td><input type="text" /></td>
                                                   		</tr>
                                                   	</table>
                                              </td>
                                              <td>
                                              		<table width="100%" cellpadding="0" cellspacing="0">
                                                    	<tr>
                                                        	<td>
                                                            	<textarea></textarea>	
                                                            </td>	
                                                        </tr>
                                                    </table>
                                              </td>
                                            </tr>
                                        </table>
                                  </fieldset>
                                </td>
                            </tr>
                        </table>
                        </td>
                      </tr>
               	    </table>
                  </fieldset></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </div>
    </div>
    <!-- **********************************************  TERMINA CÓDIGO ************************************************* -->     
</div>
</form>
</body>
<script type="text/javascript" language="javascript" src="../lib/js/jquery-1.7.min.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" language="javascript" src="../lib/js/jquery.dataTables.js"></script>
<script src="capturaobra.js"></script>
</html>