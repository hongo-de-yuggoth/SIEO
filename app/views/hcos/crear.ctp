<?php
echo $this->Html->css(array
(
	'datepicker',
	'conf_dp',
	'hco/crear'
));
echo $this->Html->script(array
(
	'validaciones',
	'datepicker/lang/es',
	'datepicker/datepicker',
	'departamentos.municipios.localidades',
	'hco/crear'
));
?>
<h1>Crear una Historia Clinica Ocupacional nueva</h1>

<!-- PARA LUEGO IMPLEMENTARLO -->
<div id="cuadro_notificaciones" class="<?php //echo $clase_notificacion; ?>" style="display: <?php //echo $display_notificacion; ?>;">
	<?php //echo $mensaje_notificacion; ?>
</div>
<!-- -------- -->

<form name="crear_hco" id="crear_hco" action="#" method="post" enctype="multipart/form-data">
	<div id="escondidos">
		<input id="encontro" type="hidden" value='' />
	</div>

	<!-- SECCION: BUSQUEDA TRABAJADOR -->
	<div id="buscar_documento">
		<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
			<tr><td width="100%" height="20" colspan="3"></td></tr>
			<tr align="left">
				<td width="100" class="subtitulo">Tipo de documento:</td>
				<td width="*" colspan="2">
					<select  id="tipo_documento" style="width:145px;">
						<option value="cc">C&eacute;dula de Ciudadan&iacute;a</option>
						<option value="ce">C&eacute;dula de Extranjer&iacute;a</option>
						<option value="ti">Tarjeta de Identidad</option>
					</select>
				</td>
			</tr>
			<tr align="left">
				<td width="100" class="subtitulo">Número del documento:</td>
				<td width="90"><input size="9" maxlength="15" id="numero_documento_buscar"></td>
				<td width="*" style="padding-left: 5px;"><input type="button" value="Buscar trabajador" id="boton_buscar_trabajador"></td>
			</tr>
		</tbody></table>
		
		<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
			<tr align="left">
				<td width="100%">
					<div style="display: none; padding-left:195px;" id="error_numero_documento" class="texto-error"></div>
				</td>
			</tr>
			<tr>
				<td width="100%">
					<div id='reloj_arena' align='center' style='display:none;'><img class="no-border" alt="" src="/img/ajaxload.gif" /></div>
				</td>
			</tr>
		</tbody></table>
	</div>
	
	<!-- SECCION: FORMULARIO HISTORIA CLINICA -->
	<div id="hco" style="display:block;">
		<div id="historico_hco" style="display:block;">
			<h2>Hist&oacute;rico de HCOs</h2>
			<ul>
				<li><a href="">2009 - Abril 27 (Alturas, Superficie)</a></li>
				<li><a href="">2009 - Enero 20 (Alturas, Superficie)</a></li>
			</ul>
		</div>

		<!-- DATOS DE IDENTIFICACIÓN -->
		<fieldset>
			<legend><b>&nbsp;Datos de identificaci&oacute;n&nbsp;</b></legend>
			<div>
				<table width="100%"><tbody>
					<tr align="right">
						<td colspan="2"><span class="subtitulo">Fecha:</span> <span id="fecha">28/Enero/2011 - 11:00AM</span></td>
					</tr>
				</tbody></table>
			</div>
			<div>
				<fieldset>
					<legend><b>&nbsp;Empresa Contratante&nbsp;</b></legend>
					<table width="100%"><tbody>
						<tr align="left">
							<td width="*" colspan="5"><div id="empresa" style="font-size:13px;"></div></td>
						</tr>
						<tr valign="top" align="left">
							<td width="100" class="subtitulo">Departamento:</td>
							<td width="125"><div id="departamento"></div></td>
							<td width="30"></td>
							<td id="etiqueta_ciudad_localidad_empresa" width="75" class="subtitulo">Municipio:</td>
							<td width="*"><div id="ciudad"></div></td>
						</tr>
					</tbody></table>
				</fieldset>
			</div>
			
			<fieldset>
				<legend><b>&nbsp;Datos del Trabajador&nbsp;</b></legend>
				<table width="100%"><tbody>
					<tr align="left">
						<td width="132" class="subtitulo">Nombre:</td>
						<td width="*"><div id="nombre"></div></td>
					</tr>
				</tbody></table>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="50" class="subtitulo">Documento:</td>
						<td width="133"><div id="documento"></div></td>
						<td width="45" class="subtitulo">Sexo:</td>
						<td width="*"><div id="sexo"></div></td>
					</tr>
				</tbody></table>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="72" class="subtitulo">Direcci&oacute;n:</td>
						<td width="*"><div id="direccion"></div></td>
					</tr>
				</tbody></table>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="100" class="subtitulo">Departamento:</td>
						<td width="155">
							<select id="sel_departamento_trabajador" name="data[Trabajador][id_depto]" style="width:155px;">
							<?php echo $departamentos; ?>
							</select>
						</td>
						<td width="10"></td>
						<td id="etiqueta_ciudad_localidad" width="70" class="subtitulo">Localidad:</td>
						<td width="*">
							<div id="ciudades" style="display:none;"><select id="sel_ciudad_trabajador" name="data[Trabajador][id_ciudad]" style="width:235px;"></select></div>
							<div id="localidades" style="display:block;"><select id="sel_localidad_trabajador" name="data[Trabajador][id_localidad]" style="width:144px;">
							<?php echo $localidades; ?>
							</select></div>
						</td>
					</tr>
				</tbody></table>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="120" class="subtitulo">Tel&eacute;fono familiar:</td>
						<td width="100"><div id="telefono_familiar"></div></td>
						<td width="15"></td>
						<td width="124" class="subtitulo">Tel&eacute;fono personal:</td>
						<td width="*"><div id="telefono_personal"></div></td>
					</tr>
				</tbody></table>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="140" class="subtitulo">Fecha de nacimiento:</td>
						<td width="250"><div id="fecha_nacimiento"></</td>
						<td width="15"></td>
						<td width="45" class="subtitulo">Edad:</td>
						<td width="*"><div id="edad"></div></td>
					</tr>
				</tbody></table>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="140" class="subtitulo">Cargo a desempeñar:</td>
						<td width="210"><input id="cargo_desempenar" name="data[Hco][cargo_desempenar]" size="27" maxlength="50" /></td>
						<td width="15"></td>
						<td width="120" class="subtitulo">Nivel de estudios:</td>
						<td width="*"><div id="nivel_estudio"></div></td>
					</tr>
				</tbody></table>
			</fieldset>
			
			<fieldset>
				<legend><b>&nbsp;Seguridad social&nbsp;</b></legend>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="40" class="subtitulo">EPS:</td>
						<td width="210"><input id="eps" name="data[Trabajador][eps]" style="width:210px;" maxlength="50" /></td>
						<td width="15"></td>
						<td width="40" class="subtitulo">ARP:</td>
						<td width="*"><input id="arp" name="data[Hco][arp]" style="width:210px;" maxlength="50" /></td>
					</tr>
				</tbody></table>
			</fieldset>
			<fieldset>
				<legend><b>&nbsp;Datos socio-demogr&aacute;ficos&nbsp;</b></legend>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="120" class="subtitulo">Estado civil:</td>
						<td width="210">
							<select id="estado_civil" name="data[Trabajador][id_estado_civil]" style="width:215px;">
							<?php echo $estados_civiles; ?>
							</select>
						</td>
						<td width="10"></td>
						<td width="100" class="subtitulo">Cant. de hijos:</td>
						<td width="*"><div id="cant_hijos"></div></td>
					</tr>
					<tr valign="top" align="left">
						<td width="120" class="subtitulo">Pr&aacute;ctica religiosa:</td>
						<td width="*" colspan="4">
							<select id="practica_religiosa" name="data[Trabajador][id_religion]" style="width:124px;">
							<?php echo $religiones; ?>
							</select>
						</td>
					</tr>
				</tbody></table>
			</fieldset>
			
			<table width="100%"><tbody>
				<tr valign="top" align="left">
					<td width="122" class="subtitulo">Tipo de examen:</td>
					<td width="100">
						<input id="ing" type="checkbox" name="tipo_examen" value="ing" style="vertical-align:bottom;" />
						<label for="ing" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Ingreso</label>
					</td>
					<td width="15"></td>
					<td width="100">
						<input id="per" type="checkbox" name="tipo_examen" value="per" style="vertical-align:bottom;" />
						<label for="per" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Periodico</label>
					</td>
					<td width="15"></td>
					<td width="*">
						<input id="egr" type="checkbox" name="tipo_examen" value="egr" style="vertical-align:bottom;" />
						<label for="egr" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Egreso</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="122"></td>
					<td width="100">
						<input id="esp" type="checkbox" name="tipo_examen" value="esp" style="vertical-align:bottom;" />
						<label for="esp" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Especial</label>
					</td>
					<td width="15"></td>
					<td width="*" colspan="3">
						<input id="alt" type="checkbox" name="tipo_examen" value="alt" style="vertical-align:bottom;" />
						<label for="alt" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Alturas</label>
					</td>
				</tr>
				<tr>
					<td></td>
					<td width="*" colspan="5" class="texto-error" valign="top"><div id="error_tipo_examen" style="display:none;" /></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<table width="100%"><tbody>
			<tr align="left">
				<td width="132" class="subtitulo">Motivo de consulta:</td>
				<td width="*"><input type="text" id="motivo_consulta" name="data[Hco][motivo_consulta]" size="60" maxlength="200" /></td>
			</tr>
		</tbody></table>
		
		<table width="100%"><tbody>
			<tr align="left">
				<td width="150" class="subtitulo">Revisi&oacute;n por sistemas:</td>
				<td width="*"><input type="text" id="revision_sistemas" name="data[Hco][revision_sistemas]" size="58" maxlength="200" /></td>
			</tr>
		</tbody></table>
		
		<!-- ANTECEDENTES -->
		<fieldset>
			<legend><b>&nbsp;Antecedentes&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="130" class="subtitulo">Patol&oacute;gico:</td>
					<td width="*" colspan="5"><input type="text" id="ant_patologico" name="data[Antecedente][patologico]" style="width:433px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Quir&uacute;rgico:</td>
					<td width="*" colspan="5"><input type="text" id="ant_quirurgico" name="data[Antecedente][quirurgico]" style="width:433px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Traum&aacute;ticos:</td>
					<td width="*" colspan="5"><input type="text" id="ant_traumaticos" name="data[Antecedente][traumaticos]" style="width:433px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Farmacol&oacute;gico:</td>
					<td width="*" colspan="5"><input type="text" id="ant_farmacologico" name="data[Antecedente][farmacologico]" style="width:433px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Al&eacute;rgicos:</td>
					<td width="*" colspan="5"><input type="text" id="ant_alergicos" name="data[Antecedente][alergicos]" style="width:433px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td width="130" class="subtitulo">Toxicol&oacute;gicos:</td>
					<td width="138">Consumo alcohol(Mes):</td>
					<td width="35"><input type="text" id="frec_mes_alcohol" name="data[Antecedente][frec_mes_alcohol]" size="1" maxlength="2" /></td>
					<td width="51">Tabaquismo:</td>
					<td width="113">
						<select id="tabaquismo" name="data[Antecedente][tabaquismo]" style="width:94px;">
							<option value="S">SI</option>
							<option value="N">NO</option>
							<option value="O">OCASIONAL</option>
						</select>
					</td>
					<td width="*">#xD&iacute;a:<input type="text" id="cant_cigarrillos" name="data[Antecedente][cant_cigarrillos]" maxlength="3" style="width:25px;" /></td>
				</tr>
				<tr align="left">
					<td width="130"></td>
					<td width="*" colspan="5">Otros: <input type="text" id="tox_otros" name="data[Antecedente][tox_otros]" maxlength="50" style="width:393px;" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Familiar:</td>
					<td colspan="5"><input type="text" id="ant_familiar" name="data[Antecedente][familiar]" style="width:433px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Inmunol&oacute;gicos:</td>
					<td width="*" colspan="5"><input type="text" id="ant_inmunologico" name="data[Antecedente][inmunologico]" style="width:433px;" maxlength="200" /></td>
				</tr>
			</tbody></table>
			<div id="ginecoobstetrico" style="display:block;">
				<table width="100%"><tbody>
					<tr align="left">
						<td width="130" class="subtitulo">Gineco-Obst&eacute;trico:</td>
						<td width="*">
							G:<input type="text" id="gin_g" name="data[Antecedente][gin_g]" size="2" maxlength="3" />&nbsp;&nbsp;&nbsp;
							P:<input type="text" id="gin_p" name="data[Antecedente][gin_p]" size="2" maxlength="3" />&nbsp;&nbsp;&nbsp;
							A:<input type="text" id="gin_a" name="data[Antecedente][gin_a]" size="2" maxlength="3" />&nbsp;&nbsp;&nbsp;
							M:<input type="text" id="gin_m" name="data[Antecedente][gin_m]" size="2" maxlength="3" />&nbsp;&nbsp;&nbsp;
							GEM:<input type="text" id="gin_gem" name="data[Antecedente][gin_gem]" size="2" maxlength="3" />&nbsp;&nbsp;&nbsp;
							C:<input type="text" id="gin_c" name="data[Antecedente][gin_c]" size="2" maxlength="3" />
						</td>
					</tr>
					<tr align="left">
						<td width="130"></td>
						<td width="*">
							FUM: <input id="gin_fum" name='data[Antecedente][gin_fum]' type='hidden' value='' />
							<select id="fum_dia" name="fum_dia" class="fecha_dia">
								<option value="day">D&iacute;a</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							 </select>
							<select id="fum_mes" name="fum_mes" class="fecha_mes">
							  <option value="-1">Mes</option>
							  <option value="1">Enero</option>
							  <option value="2">Febrero</option>
							  <option value="3">Marzo</option>
							  <option value="4">Abril</option>
							  <option value="5">Mayo</option>
							  <option value="6">Junio</option>
							  <option value="7">Julio</option>
							  <option value="8">Agosto</option>
							  <option value="9">Septiembre</option>
							  <option value="10">Octubre</option>
							  <option value="11">Noviembre</option>
							  <option value="12">Diciembre</option>
							</select>
				 
							<input type="text" class="w3em" id="fum_anio" name="fum_anio" size="3" maxlength="4" />
						</td>
					</tr>
				</tbody></table>
			</div>
		</fieldset>
		
		<!-- ANTECEDENTES LABORALES -->
		<fieldset id="antecedentes_laborales">
			<legend><b>&nbsp;Antecedentes laborales&nbsp;</b></legend>
			<input id="antecedentes_counter" type="hidden" value="1" />
			<div style="vertical-align:middle; width:60px; text-align:center;" >
				<a id="boton_agregar_antecedente" href="" style="text-decoration:none; color:#666666; font-weight:bold; font-size:9px;" title="Agregar otro antecedente">
					<table><tbody>
						<tr>
							<td><img class="no-border" src="/img/agregar.png" align="center" /></td>
							<td>AGREGAR</td>
						</tr>
					</tbody></table>
				</a>
			</div>
			<div id="divs_ant_lab">
				<div id="ant_lab-1" class="caja_fondo">
					<table width="100%"><tbody>
						<tr valign="top">
							<td width="100%" height="32" colspan="5" class="subtitulo">Antecedente Laboral #1</td>
						</tr>
						<tr valign="top" align="left">
							<td width="115" class="subtitulo">Empresa/Sector:</td>
							<td width="190"><input type="text" id="a1_empresa_sector" name="data[1][Antecedentelaboral][empresa_sector]" maxlength="50" style="width:190px;" /></td>
							<td width="20"></td>
							<td width="48" class="subtitulo">Cargo:</td>
							<td width="*"><input type="text" id="a1_cargo" name="data[1][Antecedentelaboral][cargo]" maxlength="50" style="width:158px;" /></td>
						</tr>
					</tbody></table>
					<table width="100%"><tbody>
						<tr valign="top" align="left">
							<td width="70" class="subtitulo">Riesgos:</td>
							<td width="100">
								<input id="r1_fis" type="checkbox" checked="checked" name="riesgos_1" value="r_fis" style="vertical-align:bottom;" />
								<label for="r1_fis" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">F&iacute;sico</label>
							</td>
							<td width="15"></td>
							<td width="100">
								<input id="r1_qui" type="checkbox" checked="checked" name="riesgos_1" value="r_qui" style="vertical-align:bottom;" />
								<label for="r1_qui" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Qu&iacute;mico</label>
							</td>
							<td width="15"></td>
							<td width="100">
								<input id="r1_mec" type="checkbox" checked="checked" name="riesgos_1" value="r_mec" style="vertical-align:bottom;" />
								<label for="r1_mec" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Mec&aacute;nico</label>
							</td>
							<td width="15"></td>
							<td width="*">
								<input id="r1_erg" type="checkbox" checked="checked" name="riesgos_1" value="r_erg" style="vertical-align:bottom;" />
								<label for="r1_erg" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Ergon&oacute;mico</label>
							</td>
						</tr>
						<tr valign="top" align="left">
							<td></td>
							<td width="100">
								<input id="r1_psi" type="checkbox" checked="checked" name="riesgos_1" value="r_psi" style="vertical-align:bottom;" />
								<label for="r1_psi" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Psicosocial</label>
							</td>
							<td width="15"></td>
							<td width="*" colspan="5">
								<input id="r1_alt" type="checkbox" checked="checked" name="riesgos_1" value="r_alt" style="vertical-align:bottom;" />
								<label for="r1_alt" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Seguridad:&nbsp;Alturas locativo</label>
							</td>
						</tr>
					</tbody></table>
					<table width="100%"><tbody>
						<tr valign="top" align="left">
							<td width="150" class="subtitulo">Tiempo de exposici&oacute;n:</td>
							<td width="*"><input type="text" id="a1_tiempo_exposicion" name="data[1][Antecedentelaboral][tiempo_exposicion]" maxlength="4" style="width:27px;" /> años.</td>
						</tr>
					</tbody></table>
				</div>
			</div>
		</fieldset>
		
		<!-- ACCIDENTES DE TRABAJO -->
		<fieldset>
			<legend><b>&nbsp;Accidentes de Trabajo&nbsp;</b></legend>
			<input id="accidentes_counter" type="hidden" value="1" />
			<div style="vertical-align:middle; width:60px; text-align:center;" >
				<a id="boton_agregar_accidente" href="" style="text-decoration:none; color:#666666; font-weight:bold; font-size:9px;" title="Agregar otra accidente">
					<table><tbody>
						<tr>
							<td><img class="no-border" src="/img/agregar.png" align="center" /></td>
							<td>AGREGAR</td>
						</tr>
					</tbody></table>
				</a>
			</div>
			<div id="div_accidentes">
				<div id="accidente-1" class="caja_fondo">
					<table width="100%"><tbody>
						<tr valign="top">
							<td width="*" height="32" class="subtitulo">Accidente de Trabajo #1</td>
							<td width="33px"></td>
						</tr>
					</tbody></table>
					<table width="100%"><tbody>
						<tr valign="top" align="left">
							<td width="65" class="subtitulo">Empresa:</td>
							<td width="220"><input id="ac_empresa-1" type="text" name="accidentes[0][Accidentetrabajo][empresa]" maxlength="50" style="width:180px;" /></td>
							<td width="48" class="subtitulo">Fecha:</td>
							<td width="*">
								<input id="fecha_accidente-1" name='accidentes[0][Accidentetrabajo][fecha]' type='hidden' value='' />
								<select id="ac_dia-1" name="ac_dia-1" class="fecha_dia">
									<option value="day">D&iacute;a</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								 </select>
								<select id="ac_mes-1" name="ac_mes-1" class="fecha_mes">
								  <option value="-1">Mes</option>
								  <option value="1">Enero</option>
								  <option value="2">Febrero</option>
								  <option value="3">Marzo</option>
								  <option value="4">Abril</option>
								  <option value="5">Mayo</option>
								  <option value="6">Junio</option>
								  <option value="7">Julio</option>
								  <option value="8">Agosto</option>
								  <option value="9">Septiembre</option>
								  <option value="10">Octubre</option>
								  <option value="11">Noviembre</option>
								  <option value="12">Diciembre</option>
								</select>
					 
								<input id="ac_anio-1" name="ac_anio-1" type="text" class="w3em" size="3" maxlength="4" />
							</td>
						</tr>
					</tbody></table>
					<table width="100%"><tbody>
						<tr valign="top" align="left">
							<td width="65" class="subtitulo">Lesi&oacute;n:</td>
							<td width="*"><input type="text" id="ac_lesion-1" name="accidentes[0][Accidentetrabajo][lesion]" maxlength="200" style="width:485px;" /></td>
						</tr>
						<tr valign="top" align="left">
							<td class="subtitulo">Secuelas:</td>
							<td width="*"><input type="text" id="ac_secuelas-1" name="accidentes[0][Accidentetrabajo][secuelas]" maxlength="200" style="width:485px;" /></td>
						</tr>
					</tbody></table>
				</div>
			</div>
		</fieldset>
		
		<!-- ENFERMEDADES PROFESIONALES -->
		<fieldset>
			<legend><b>&nbsp;Enfermedades Profesionales&nbsp;</b></legend>
			<div style="vertical-align:middle; width:60px; height:50px; text-align:center; margin-bottom:5px;" >
				<a id="boton_agregar_enfermedad" href="#" style="text-decoration:none; color:#666666; font-weight:bold; font-size:9px;" title="Agregar otra enfermedad">
					<table><tbody>
						<tr><td><img class="no-border" src="/img/agregar.png" align="center" /></td></tr>
						<tr><td>AGREGAR</td></tr>
					</tbody></table>
				</a>
			</div>
			<div id="enfermedad_1" class="caja_fondo">
				<table width="100%"><tbody>
					<tr valign="top">
						<td id="titulo_enf_1" width="100%" height="32" colspan="2" class="subtitulo">Enfermedad Profesional #1</td>
					</tr>
					<tr valign="top" align="left">
						<td width="102" class="subtitulo">Empresa:</td>
						<td width="*"><input type="text" id="en1_empresa" name="enfermedades[0][Enfermedadprofesional][empresa]" maxlength="50" style="width:280px;" /></td>
					</tr>
					<tr valign="top" align="left">
						<td class="subtitulo">Diagn&oacute;stico:</td>
						<td width="*"><input type="text" id="en1_diagnostico" name="enfermedades[0][Enfermedadprofesional][diagnostico]" maxlength="200" style="width:440px;" /></td>
					</tr>
					<tr valign="top" align="left">
						<td class="subtitulo">Calificaci&oacute;n:</td>
						<td width="*"><input type="text" id="en1_calificacion" name="enfermedades[0][Enfermedadprofesional][calificacion]" maxlength="200" style="width:440px;" /></td>
					</tr>
					<tr valign="top" align="left">
						<td class="subtitulo">Indemnizaci&oacute;n:</td>
						<td width="*"><input type="text" id="en1_indemnizacion" name="enfermedades[0][Enfermedadprofesional][indemnizacion]" maxlength="200" style="width:440px;" /></td>
					</tr>
				</tbody></table>
			</div>
		</fieldset>
	
		<!-- RIESGOS CARGO A DESEMPEÑAR -->
		<fieldset id="riesgos_cargo_desempenar">
			<legend><b>&nbsp;Riesgos en el Cargo Actual o a Desempeñar&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">F&iacute;sico:</td>
					<td width="155">
						<input id="rad" type="checkbox" checked="checked" name="riesgos_fisico" value="rad" style="vertical-align:bottom;" />
						<label for="rad" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Radiaci&oacute;n no ionizante</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="rui" type="checkbox" checked="checked" name="riesgos_fisico" value="rui" style="vertical-align:bottom;" />
						<label for="rui" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Ruido</label>
					</td>
					<td width="5"></td>
					<td width="*">
						<input id="vib" type="checkbox" checked="checked" name="riesgos_fisico" value="vib" style="vertical-align:bottom;" />
						<label for="vib" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Vibraci&oacute;n</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">Qu&iacute;mico:</td>
					<td width="155">
						<input id="pol" type="checkbox" checked="checked" name="riesgos_quimico" value="pol" style="vertical-align:bottom;" />
						<label for="pol" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Polvos</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="liq" type="checkbox" checked="checked" name="riesgos_quimico" value="liq" style="vertical-align:bottom;" />
						<label for="liq" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">L&iacute;quidos</label>
					</td>
					<td width="*" colspan="2"></td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">Mec&aacute;nico:</td>
					<td width="155">
						<input id="mem" type="checkbox" checked="checked" name="riesgos_mecanico" value="mem" style="vertical-align:bottom;" />
						<label for="mem" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Mecanismos en movimiento</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="maq" type="checkbox" checked="checked" name="riesgos_mecanico" value="maq" style="vertical-align:bottom;" />
						<label for="maq" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Maquinaria & Herramienta</label>
					</td>
					<td width="5"></td>
					<td width="*">
						<input id="her" type="checkbox" checked="checked" name="riesgos_mecanico" value="her" style="vertical-align:bottom;" />
						<label for="her" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Herramientas manuales</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85"></td>
					<td width="*" colspan="5">
						<input id="equ" type="checkbox" checked="checked" name="riesgos_mecanico" value="equ" style="vertical-align:bottom;" />
						<label for="equ" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Equipos a presi&oacute;n</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">Ergon&oacute;mico:</td>
					<td width="155">
						<input id="cae" type="checkbox" checked="checked" name="riesgos_ergonomico" value="cae" style="vertical-align:bottom;" />
						<label for="cae" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Carga est&aacute;tica</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="cad" type="checkbox" checked="checked" name="riesgos_ergonomico" value="cad" style="vertical-align:bottom;" />
						<label for="cad" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Carga din&aacute;mica</label>
					</td>
					<td width="*" colspan="2"></td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">Psicosocial:</td>
					<td width="155">
						<input id="aca" type="checkbox" checked="checked" name="riesgos_psicosocial" value="aca" style="vertical-align:bottom;" />
						<label for="aca" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Acatamiento de ordenes</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="con" type="checkbox" checked="checked" name="riesgos_psicosocial" value="con" style="vertical-align:bottom;" />
						<label for="con" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Conflictos de autoridad</label>
					</td>
					<td width="5"></td>
					<td width="*">
						<input id="cum" type="checkbox" checked="checked" name="riesgos_psicosocial" value="cum" style="vertical-align:bottom;" />
						<label for="cum" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Cumplimiento de horarios</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85"></td>
					<td width="*" colspan="5">
						<input id="hor" type="checkbox" checked="checked" name="riesgos_psicosocial" value="hor" style="vertical-align:bottom;" />
						<label for="hor" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Horas extras</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">Biol&oacute;gico:</td>
					<td width="155">
						<input id="vir" type="checkbox" checked="checked" name="riesgos_biologico" value="vir" style="vertical-align:bottom;" />
						<label for="vir" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Virus</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="bac" type="checkbox" checked="checked" name="riesgos_biologico" value="bac" style="vertical-align:bottom;" />
						<label for="bac" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Bacterias</label>
					</td>
					<td width="5"></td>
					<td width="*">
						<input id="hon" type="checkbox" checked="checked" name="riesgos_biologico" value="hon" style="vertical-align:bottom;" />
						<label for="hon" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Hongos</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85"></td>
					<td width="*" colspan="5">
						<input id="otr" type="checkbox" checked="checked" name="riesgos_biologico" value="otr" style="vertical-align:bottom;" />
						<label for="otr" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Otros</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">Seguridad:</td>
					<td width="155">
						<input id="alt" type="checkbox" checked="checked" name="riesgos_seguridad" value="alt" style="vertical-align:bottom;" />
						<label for="alt" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Alturas</label>
					</td>
					<td width="5"></td>
					<td width="155">
						<input id="cor" type="checkbox" checked="checked" name="riesgos_seguridad" value="cor" style="vertical-align:bottom;" />
						<label for="cor" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Corte</label>
					</td>
					<td width="5"></td>
					<td width="*">
						<input id="ele" type="checkbox" checked="checked" name="riesgos_seguridad" value="ele" style="vertical-align:bottom;" />
						<label for="ele" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">El&eacute;ctrico</label>
					</td>
				</tr>
				<tr valign="top" align="left">
					<td width="85" class="subtitulo">P&uacute;blico:</td>
					<td width="*" colspan="5">
						<input id="vio" type="checkbox" checked="checked" name="riesgos_publico" value="vio" style="vertical-align:bottom;" />
						<label for="vio" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Violencia com&uacute;n</label>
					</td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<!-- EXAMEN FÍSICO -->
		<fieldset>
			<legend><b>&nbsp;Examen F&iacute;sico&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="110" class="subtitulo">Frec. Card&iacute;aca:</td>
					<td width="110"><input type="text" id="frec_cardiaca" name="data[Examenfisico][frec_cardiaca]" maxlength="3" style="width:25px;" />por minuto.</td>
					<td width="10"></td>
					<td width="123" class="subtitulo">Frec. Respiratoria:</td>
					<td width="*"><input type="text" id="frec_respiratoria" name="data[Examenfisico][frec_respiratoria]" maxlength="3" style="width:25px;" />por minuto.</td>
				</tr>
			</tbody></table>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="110" class="subtitulo">Tensi&oacute;n arterial:</td>
					<td width="130">
						<input type="text" id="tension_arterial_a" name="data[Examenfisico][tension_arterial_a]" maxlength="3" style="width:25px;" />
						<input type="text" id="tension_arterial_b" name="data[Examenfisico][tension_arterial_b]" maxlength="3" style="width:25px;" />mm de Hg
					</td>
					<td width="10"></td>
					<td width="40" class="subtitulo">Peso:</td>
					<td width="50"><input type="text" id="peso" name="data[Examenfisico][peso]" maxlength="3" style="width:25px;" />Kg</td>
					<td width="10"></td>
					<td width="40" class="subtitulo">Talla:</td>
					<td width="*"><input type="text" id="talla" name="data[Examenfisico][talla]" maxlength="3" style="width:25px;" />Mts</td>
				</tr>
			</tbody></table>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="165" class="subtitulo">Indice de masa corporal:</td>
					<td width="130">
						<input id="imc" name="data[Examenfisico][imc]" type="hidden" />
						<div id="indice_masa_corporal">26,14 Deficit de peso</div>
					</td>
					<td width="10"></td>
					<td width="40" class="subtitulo">Lateralidad:</td>
					<td width="*">
						<select id="lateralidad" name="data[Examenfisico][lateralidad]" style="width:93px;">
							<option value="D">DIESTRO</option>
							<option value="Z">ZURDO</option>
							<option value="A">AMBIDIESTRO</option>
						</select>
					</td>
				</tr>
			</tbody></table>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="125" class="subtitulo">Pr&aacute;ctica deportiva:</td>
					<td width="100"><input type="text" id="practica_deportiva" name="data[Examenfisico][practica_deportiva]" maxlength="100" style="width:100px;" /></td>
					<td width="10"></td>
					<td width="125" class="subtitulo">Veces por semana:</td>
					<td width="*"><input type="text" id="cant_semanal" name="data[Examenfisico][cant_semanal]" maxlength="2" style="width:20px;" /></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<!-- ÓRGANOS Y SISTEMAS -->
		<fieldset>
			<legend><b>&nbsp;Órganos y Sistemas&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="115" class="subtitulo">Cabeza y cuello:</td>
					<td width="90">Configuraci&oacute;n:</td>
					<td width="*"><input type="text" id="cc_configuracion" name="data[Organosistema][cc_configuracion]" style="width:333px;" maxlength="50" /></td>
				</tr>
				<tr align="left">
					<td></td>
					<td width="90" valign="top">Odontol&oacute;gico:</td>
					<td width="*"><textarea id="cc_odontologico" name="data[Organosistema][cc_odontologico]" wrap="virtual" style="width:333px;"></textarea></td>
				</tr>
				<tr align="left">
					<td width="115" class="subtitulo" valign="top">Oftalmol&oacute;gico:</td>
					<td width="90" valign="top">Externo:</td>
					<td width="*"><textarea id="oft_externo" name="data[Organosistema][oft_externo]" wrap="virtual" style="width:333px;"></textarea></td>
				</tr>
				<tr align="left">
					<td></td>
					<td width="90" valign="top">Fundoscopia:</td>
					<td width="*"><textarea id="oft_fundoscopia" name="data[Organosistema][oft_fundoscopia]" wrap="virtual" style="width:333px;"></textarea></td>
				</tr>
			</tbody></table>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="110" class="subtitulo">Auditivo:</td>
					<td width="*"><input type="text" id="auditivo" name="data[Organosistema][auditivo]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Respiratorio:</td>
					<td width="*"><input type="text" id="respiratorio" name="data[Organosistema][respiratorio]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Card&iacute;aco:</td>
					<td width="*"><input type="text" id="cardiaco" name="data[Organosistema][cardiaco]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Gastrointestinal:</td>
					<td width="*"><input type="text" id="gastrointestinal" name="data[Organosistema][gastrointestinal]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Genital:</td>
					<td width="*"><input type="text" id="genital" name="data[Organosistema][genital]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Circulatorio:</td>
					<td width="*"><input type="text" id="circulatorio" name="data[Organosistema][circulatorio]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Extremidades:</td>
					<td width="*"><input type="text" id="extremidades" name="data[Organosistema][extremidades]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Neurol&oacute;gico:</td>
					<td width="*"><input type="text" id="neurologico" name="data[Organosistema][neurologico]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Mental:</td>
					<td width="*"><input type="text" id="mental" name="data[Organosistema][mental]" style="width:430px;" maxlength="200" /></td>
				</tr>
				<tr align="left">
					<td class="subtitulo">Ampliaci&oacute;n:</td>
					<td width="*"><input type="text" id="ampliacion" name="data[Organosistema][ampliacion]" style="width:430px;" maxlength="200" /></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<!-- PRUEBAS CLÍNICAS PARA DETECCIÓN DE ENFERMEDAD PROFESIONAL -->
		<fieldset>
			<legend><b>&nbsp;Pruebas Cl&iacute;nicas para Detecci&oacute;n de Enfermedad Profesional&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Thinnel:</td>
					<td width="*">
						<select id="thinnel" name="data[Pruebaenfermedadprofesional][thinnel]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Phalen:</td>
					<td width="*">
						<select id="phalen" name="data[Pruebaenfermedadprofesional][phalen]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Flinkestein:</td>
					<td width="*">
						<select id="flinkestein" name="data[Pruebaenfermedadprofesional][flinkestein]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Wells:</td>
					<td width="*">
						<select id="wells" name="data[Pruebaenfermedadprofesional][wells]" style="width:75px;">
							<option value="1">I - ANORMAL</option>
							<option value="2">II - ANORMAL</option>
							<option value="3">III - NORMAL</option>
							<option value="4">IV - NORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Movilidad Columna:</td>
					<td width="*">
						<select id="movilidad_columna" name="data[Pruebaenfermedadprofesional][movilidad_columna]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Laessegue:</td>
					<td width="*">
						<select id="laessegue" name="data[Pruebaenfermedadprofesional][laessegue]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba Rombert:</td>
					<td width="*">
						<select id="rombert" name="data[Pruebaenfermedadprofesional][rombert]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Prueba V&eacute;rtigo:</td>
					<td width="*">
						<select id="vertigo" name="data[Pruebaenfermedadprofesional][vertigo]" style="width:75px;">
							<option value="N">NORMAL</option>
							<option value="A">ANORMAL</option>
						</select>
					</td>
				</tr>
				<tr align="left">
					<td width="180" class="subtitulo">Hallazgos:</td>
					<td width="*"><input type="text" id="hallazgos" name="data[Pruebaenfermedadprofesional][hallazgos]" style="width:360px;" /></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<!-- PARACLÍNICOS -->
		<fieldset>
			<legend><b>&nbsp;Paracl&iacute;nicos&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr align="left">
					<td width="210" class="subtitulo">Audiometr&iacute;a (escala Larsen):</td>
					<td width="*" colspan="5"><input type="text" id="audiometria" name="data[Paraclinico][audiometria]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Espirometr&iacute;a (escala Knudson):</td>
					<td width="*" colspan="5"><input type="text" id="espirometria" name="data[Paraclinico][espirometria]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Visiometr&iacute;a (Optec 2000):</td>
					<td width="*" colspan="5"><input type="text" id="visiometria" name="data[Paraclinico][visiometria]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Test vestibular:</td>
					<td width="*" colspan="5"><input type="text" id="test_vestibular" name="data[Paraclinico][test_vestibular]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Hem&aacute;tico:</td>
					<td width="*" colspan="5"><input type="text" id="cuadro_hematico" name="data[Paraclinico][cuadro_hematico]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Glucosa en suero:</td>
					<td width="*" colspan="5"><input type="text" id="glucosa_suero" name="data[Paraclinico][glucosa_suero]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Perfil lip&iacute;dico:</td>
					<td width="95">Colesterol total:</td>
					<td width="80"><input type="text" id="pl_colesterol_total" name="data[Paraclinico][pl_colesterol_total]" style="width:25px;" maxlength="3" />mg/dl</td>
					<td width="10"></td>
					<td width="35">HDL:</td>
					<td width="*"><input type="text" id="pl_hdl" name="data[Paraclinico][pl_hdl]" style="width:25px;" maxlength="3" /></td>
				</tr>
				<tr align="left">
					<td width="210"></td>
					<td >Triglic&eacute;ridos:</td>
					<td ><input type="text" id="pl_trigliceridos" name="data[Paraclinico][pl_trigliceridos]" style="width:25px;" maxlength="3" />mg/dl</td>
					<td ></td>
					<td >LDL:</td>
					<td width="*"><input type="text" id="pl_ldl" name="data[Paraclinico][pl_ldl]" style="width:25px;" maxlength="3" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Parcial de orina:</td>
					<td width="*" colspan="5"><input type="text" id="parcial_orina" name="data[Paraclinico][parcial_orina]" style="width:360px;" /></td>
				</tr>
				<tr align="left">
					<td width="210" class="subtitulo">Otros:</td>
					<td width="*" colspan="5"><input type="text" id="otros" name="data[Paraclinico][otros]" style="width:360px;" /></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<!-- IMPRESIÓN DIAGNÓSTICA -->
		<fieldset>
			<legend><b>&nbsp;Impresi&oacute;n Diagn&oacute;stica&nbsp;</b></legend>
			<div style="vertical-align:middle; width:60px; height:50px; text-align:center; margin-bottom:5px;" >
				<a id="boton_agregar_enfermedad" href="#" style="text-decoration:none; color:#666666; font-weight:bold; font-size:9px;" title="Agregar otra enfermedad">
					<table><tbody>
						<tr><td><img class="no-border" src="/img/agregar.png" align="center" /></td></tr>
						<tr><td>AGREGAR</td></tr>
					</tbody></table>
				</a>
			</div>
			<div id="diagnostico_clinico_1" class="caja_fondo">
				<table width="100%"><tbody>
					<tr valign="top">
						<td id="titulo_diag_1" width="100%" height="22" colspan="2" class="subtitulo">#1</td>
					</tr>
					<tr valign="top" align="left">
						<td width="110" class="subtitulo">Diagn&oacute;stico clinico:</td>
						<td width="*"><textarea id="cie10_descripcion" wrap="virtual" style="width:333px;"></textarea></td>
					</tr>
					<tr valign="top" align="left">
						<td class="subtitulo">CIE-10:</td>
						<td width="*"><input type="text" id="cie_10_codigo" name="data[Impresiondiagnostica][codigo]" maxlength="4" style="width:40px;" /></td>
					</tr>
				</tbody></table>
			</div>
		</fieldset>
		
		<!-- RECOMENDACIONES -->
		<fieldset>
			<legend><b>&nbsp;Recomendaciones&nbsp;</b></legend>
			<div style="vertical-align:middle; width:60px; text-align:center; margin-bottom:5px;" >
				<a id="boton_agregar_recomendacion" href="#" style="text-decoration:none; color:#666666; font-weight:bold; font-size:9px;" title="Agregar otra recomendación">
					<table><tbody>
						<tr>
							<td><img class="no-border" src="/img/agregar.png" align="center" /></td>
							<td>AGREGAR</td>
						</tr>
					</tbody></table>
				</a>
			</div>
			<table id="recomendaciones" cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
				<tr id="rec_1">
					<td width="10" class="num-rec subtitulo">1.&nbsp;</td>
					<td width="510"><input id="recomendacion_1" type="text" maxlength="100" style="width:500px;" /></td>
					<td width="*"><img id="boton_borrar_recomendacion_1" alt="Borrar recomendación" title="Borrar recomendación" class="no-border" src="/img/borrar.png" /></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<!-- CONCEPTO MÉDICO OCUPACIONAL -->
		<fieldset id="concepto_medico_ocupacional">
			<legend><b>&nbsp;Concepto M&eacute;dico Ocupacional&nbsp;</b></legend>
			<table width="100%"><tbody>
				<tr align="left" height="15">
					<td width="10"><input id="cmo_1" name="data[Hco][concepto_medico_ocupacional]" type="radio" value="1" checked="checked"></td>
					<td width="*" valign="top"><label for="cmo_1" style="display: inline; font-weight: normal; margin: 0px; vertical-align: bottom;">Sin restricciones</label></td>
				</tr>
				<tr align="left">
					<td><input id="cmo_2" name="data[Hco][concepto_medico_ocupacional]" type="radio" value="2"></td>
					<td width="*" valign="top"><label for="cmo_2" style="display: inline; font-weight: normal; margin: 0px; vertical-align: bottom;">Condicionales (alteraciones que no interfieren con el trabajo)</label></td>
				</tr>
				<tr align="left">
					<td><input id="cmo_3" name="data[Hco][concepto_medico_ocupacional]" type="radio" value="3"></td>
					<td width="*" valign="top"><label for="cmo_3" style="display: inline; font-weight: normal; margin: 0px; vertical-align: bottom;">Restringido (alteraciones que interfieren con el trabajo)</label></td>
				</tr>
				<tr align="left">
					<td><input id="cmo_4" name="data[Hco][concepto_medico_ocupacional]" type="radio" value="4"></td>
					<td width="*" valign="top"><label for="cmo_4" style="display: inline; font-weight: normal; margin: 0px; vertical-align: bottom;">Aplazado</label></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
			<tr><td height="10" colspan="4"></td></tr>
			<tr align="left">
				<td align="center" width="100%" valign="top" colspan="4"><input type="submit" value="Ingresar Historia Cl&iacute;nica"></td>
			</tr>
			<tr><td height="30" colspan="4"></td></tr>
		</tbody></table>
	</div>
</form>