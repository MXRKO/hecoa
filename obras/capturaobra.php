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
            <div id="panelDatos">
                <table class="normal" width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="2%">*</td>
                        <td width="23%"><p>Número de obra o acción</p></td>
                        <td width="75%"><label>
                          <input type="text" name="textfield" id="textfield" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><p>Descripción</p></td>
                        <td><label>
                          <select name="select" id="select">
                          </select>
                        </label></td>
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
                          <fieldset>
                            <legend>Ubicación</legend>
                            <table width="100%" border="0">
                                <tr>
                                  <td width="4%">*</td>
                                    <td width="32%"><p>Municipio</p></td>
                                    <td width="64%"><label>
                                      <input type="text" name="textfield2" id="textfield2" />
                                    </label></td>
                              </tr>
                                  <tr>
                                    <td>*</td>
                                    <td><p>Region</p></td>
                                    <td><input type="text" name="textfield3" id="textfield3" /></td>
                                  </tr>
                                  <tr>
                                    <td>*</td>
                                    <td><p>Localidad</p></td>
                                    <td><input type="text" name="textfield4" id="textfield4" /></td>
                                  </tr>
                                  <tr>
                                    <td>*</td>
                                    <td><p>Asentamiento</p></td>
                                    <td><select name="select4" id="select4">
                                    </select></td>
                                  </tr>
                            </table>
                            </fieldset>
                        </td>
                        <td width="2%"></td>
                        <td width="48%">
                        <fieldset>
                       	  <legend>Financiamiento</legend>
                       	  <table width="100%" border="0">
                              <tr>
                                <td width="4%">*</td>
                                <td width="29%"><p>Financiamiento</p></td>
                                <td width="67%"><label>
                                  <select name="select2" id="select2">
                                  </select>
                                </label></td>
                              </tr>
                              <tr>
                                <td>*</td>
                                <td><p>Fondo</p></td>
                                <td><select name="select3" id="select3">
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
                            <td width="14%"><p>Programa</p></td>
                            <td width="84%"><select name="select5" id="select5">
                            </select></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><p>Subprograma</p></td>
                            <td><select name="select6" id="select6">
                            </select></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><p>Tipo</p></td>
                            <td><select name="select7" id="select7">
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
                        <td width="14%"><p>Tipo de gasto</p></td>
                        <td width="86%"><select name="select8" id="select8">
                        </select></td>
                      </tr>
                      <tr>
                        <td><p>Rubro gasto</p></td>
                        <td><select name="select8" id="select9">
                        </select></td>
                      </tr>
                      <tr>
                        <td><p>Destino gasto</p></td>
                        <td><select name="select8" id="select10">
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
                            lkñlk
                            <table width="100%" border="0">
                              <tr>
                                <td width="4%">*</td>
                                <td width="27%"><p>Situación</p></td>
                                <td width="69%"><select name="select9" id="select11">
                                </select></td>
                              </tr>
                              <tr>
                                <td>*</td>
                                <td><p>Ejecución</p></td>
                                <td><select name="select10" id="select12">
                                </select></td>
                              </tr>
                              <tr>
                                <td>*</td>
                                <td><p>Obra/Acción</p></td>
                                <td><select name="select11" id="select13">
                                </select></td>
                              </tr>
                            </table>
                        </fieldset></td>
                        <td width="2%">&nbsp;</td>
                        <td width="46%"><fieldset>
                        	<legend>Anexo de aprobación</legend>
                            ñlkñkñl
                        </fieldset></td>
                      </tr>
                    </table></td>
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
<script src="../admin/usuarios.js"></script>
</html>