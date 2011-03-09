<?php
echo $this->Html->css(array
(
	'datepicker',
	'conf_dp'
));
echo $this->Html->script(array
(
	'jquery.selectboxes.min',
	'validaciones',
	'datepicker/lang/es',
	'datepicker/datepicker',
	'trabajadores/registrar'
));
?>
<h1>Ingresar un nuevo trabajador</h1>

<!-- PARA LUEGO IMPLEMENTARLO -->
<div id="cuadro_notificaciones" class="<?php //echo $clase_notificacion; ?>" style="display: <?php //echo $display_notificacion; ?>;">
	<?php //echo $mensaje_notificacion; ?>
</div>
<!-- -------- -->

<form name="ingresar_trabajador" id="ingresar_trabajador" action="#" method="post" enctype="multipart/form-data">
	<div class="ajax_loading_image"></div>
	<div id="escondidos">
		<input id="encontro" type="hidden" value='' />
	</div>

	<div id="info_trabajador" >
		<fieldset>
			<legend><b>&nbsp;Datos personales&nbsp;</b></legend>
			<div>
				<table width="100%">
					<tbody><tr align="left">
						<td width="80" class="subtitulo">Nombre:</td>
						<td width="210" colspan="5"><input id="nombre" name="data[Trabajador][nombre]" size="53" maxlength="100" /></td>
					</tr>
					<tr>
						<td width='80'></td>
						<td width="*" colspan="5" class="texto-error" valign="top"><div id="error_nombre" style="display:none;" /></td>
					</tr>
					
					<tr><td height="10" colspan="6"></td></tr>
					
					<tr valign="top" align="left">
						<td width="80" class="subtitulo">Documento:</td>
						<td width="100">
							<select  id="tipo_documento" name="data[Trabajador][tipo_doc]" style="width:145px;">
								<option value="CC">C&eacute;dula de Ciudadan&iacute;a</option>
								<option value="CE">C&eacute;dula de Extranjer&iacute;a</option>
								<option value="TI">Tarjeta de Identidad</option>
							</select>
						</td>
						<td width="90"><input size="9" maxlength="20" id="numero_documento" name="data[Trabajador][numero_doc]"></td>
						<td width="30"></td>
						<td width="40" class="subtitulo">Sexo:</td>
						<td width="*">
							<select  id="sexo" name="data[Trabajador][sexo]" style="width:83px;">
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width='80'></td>
						<td width="*" colspan="5" class="texto-error" valign="top"><div id="error_numero_documento" style="display:none;" /></td>
					</tr>
					
					<tr><td height="10" colspan="6"></td></tr>
					
					<tr align="left">
						<td class='subtitulo' width='90'>Foto:</td>
						<td width="*" colspan="5"><input id="archivo_foto" name='data[File][archivo_foto]' type='file' /></td>
					</tr>
					<tr><td height="10" colspan="6"></td></tr>
					<tr><td height="1" colspan="6" class="linea"></td></tr>
					<tr><td height="10" colspan="6"></td></tr>
				</tbody></table>
			</div>
			
			<div>
				<table width="100%">
					<tbody><tr align="left">
						<td width="143" class="subtitulo">Empresa contratante:</td>
						<td width="210" colspan="4">
							<select  id="empresa" name="data[Trabajador][id_empresa]" style="width:400px;">
								<?php echo $empresas; ?>
							</select>
						</td>
					</tr>
					
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
			
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="54" class="subtitulo">Ciudad:</td>
						<td width="100"><div id="ciudad"></div></td>
						<td width="30"></td>
						<td width="100" class="subtitulo">Departamento:</td>
						<td width="*"><div id="departamento"></div></td>
					</tr>
					<tr><td height="10" colspan="5"></td></tr>
					<tr><td height="1" colspan="5" class="linea"></td></tr>
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
			
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="72" class="subtitulo">Direcci&oacute;n:</td>
						<td width="100"><input id="direccion" name="data[Trabajador][direccion]" size="33" maxlength="100" /></td>
						<td width="15"></td>
						<td width="71" class="subtitulo">Localidad:</td>
						<td width="*">
							<select id="localidad" name="data[Trabajador][id_localidad]" style="width:140px;">
								<?php echo $localidades; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td width='72'></td>
						<td width="*" colspan="4" class="texto-error" valign="top"><div id="error_direccion" style="display:none;" /></td>
					</tr>
					
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
			
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="120" class="subtitulo">Tel&eacute;fono familiar:</td>
						<td width="100"><input id="telefono_familiar" name="data[Trabajador][telefono_familiar]" size="15" maxlength="15" /></td>
						<td width="15"></td>
						<td width="124" class="subtitulo">Tel&eacute;fono personal:</td>
						<td width="*"><input id="telefono_personal" name="data[Trabajador][telefono_personal]" size="15" maxlength="15" /></td>
					</tr>
					<tr>
						<td width='120'></td>
						<td width="*" colspan="4" class="texto-error" valign="top"><div id="error_telefonos" style="display:none;" /></td>
					</tr>
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
			
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="140" class="subtitulo">Fecha de nacimiento:</td>
						<td width="250">
							<input id="fecha_nacimiento" name='data[Trabajador][fecha_nacimiento]' type='hidden' value='' />
							<select id="fecha_dia" name="fecha_dia">
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
							<select id="fecha_mes" name="fecha_mes">
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
				 
							<input type="text" class="w3em" id="fecha_anio" name="fecha_anio" size="3" maxlength="4" />
						</td>
						<td width="15"></td>
						<td width="45" class="subtitulo">Edad:</td>
						<td width="*"><div id="edad"></div></td>
					</tr>
					
					<tr>
						<td width='140'></td>
						<td width="*" colspan="4" class="texto-error" valign="top"><div id="error_fecha_nacimiento" style="display:none;" /></td>
					</tr>
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
			
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="140" class="subtitulo">Cargo a desempeñar:</td>
						<td width="210"><input id="cargo_desempenar" name="data[Trabajador][cargo_desempenar]" size="27" maxlength="50" /></td>
						<td width="15"></td>
						<td width="120" class="subtitulo">Nivel de estudios:</td>
						<td width="*">
							<select id="nivel_estudio" name="data[Trabajador][nivel_estudio]" style="width:47px;">
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
								<option value="TI">TI</option>
								<option value="TC">TC</option>
								<option value="UI">UI</option>
								<option value="UC">UC</option>
								<option value="PG">PG</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="140"></td>
						<td width="210" class="texto-error" valign="top"><div id="error_cargo_desempenar" style="display:none;" /></td>
						<td width="*" colspan="3"></td>
					</tr>
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
		</fieldset>
		
		<fieldset>
			<legend><b>&nbsp;Seguridad social&nbsp;</b></legend>
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="40" class="subtitulo">EPS:</td>
						<td width="210"><input id="eps" name="data[Trabajador][eps]" size="27" maxlength="50" /></td>
						<td width="15"></td>
						<td width="40" class="subtitulo">ARP:</td>
						<td width="*"><div id="arp"></div></td>
					</tr>
					<tr valign="top" align="left">
						<td width="40"></td>
						<td width="210" class="texto-error" valign="top"><div id="error_eps" style="display:none;" /></td>
						<td width="15"></td>
						<td width="40"></td>
						<td width="*" class="texto-error" valign="top"><div id="error_arp" style="display:none;" /></td>
					</tr>
					<tr><td height="10" colspan="5"></td></tr>
				</tbody></table>
			</div>
		</fieldset>
		
		<fieldset>
			<legend><b>&nbsp;Datos socio-demogr&aacute;ficos&nbsp;</b></legend>
			<div>
				<table width="100%"><tbody>
					<tr valign="top" align="left">
						<td width="100" class="subtitulo">Estado civil:</td>
						<td width="210"><input id="estado_civil" name="data[Trabajador][estado_civil]" size="27" maxlength="30" /></td>
						<td width="15"></td>
						<td width="120" class="subtitulo">Pr&aacute;ctica religiosa:</td>
						<td width="*">
							<select id="practica_religiosa" name="data[Trabajador][id_religion]">
								<? echo $religiones; ?>
							</select>
						</td>
					</tr>
					<tr valign="top" align="left">
						<td width="100"></td>
						<td width="*" colspan="4" class="texto-error" valign="top"><div id="error_estado_civil" style="display:none;" /></td>
					</tr>
					
					<tr><td height="10" colspan="5"></td></tr>
					<tr valign="top" align="left">
						<td width="100" class="subtitulo">Cant. de hijos:</td>
						<td width="*" colspan="4"><input id="cant_hijos" name="data[Trabajador][cant_hijos]" size="4" maxlength="2" /></td>
					</tr>
					<tr valign="top" align="left">
						<td width="100"></td>
						<td width="*" colspan="4" class="texto-error" valign="top"><div id="error_cantidad_hijos" style="display:none;" /></td>
					</tr>
				</tbody></table>
			</div>
		</fieldset>
		
		<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
			<tr><td height="10" colspan="4"></td></tr>
			<tr align="left">
				<td align="center" width="100%" valign="top" colspan="4"><input type="submit" value="Ingresar nuevo trabajador"></td>
			</tr>
			<tr><td height="30" colspan="4"></td></tr>
		</tbody></table>
	</div>
</form>