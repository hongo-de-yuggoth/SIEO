<?php
echo $this->Html->script(array
(
	'lista_llegada/lista_llegada',
	'jquery.selectboxes.min'
));
?>
<h1>Lista de Llegada de trabajadores</h1>

<!-- PARA LUEGO IMPLEMENTARLO -->
<div id="cuadro_notificaciones" class="<?php //echo $clase_notificacion; ?>" style="display: <?php //echo $display_notificacion; ?>;">
	<?php //echo $mensaje_notificacion; ?>
</div>
<!-- -------- -->

<form name="anexar_trabajador" id="anexar_trabajador" action="#" method="post" enctype="multipart/form-data">
	<div class="ajax_loading_image"></div>
	<div id="escondidos">
		<input id="encontro" type="hidden" value='' />
	</div>

	<div id="buscar_documento">
		<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
			<tr><td height="20" colspan="3"></td></tr>
			
			<tr align="left">
				<td width="160" class="subtitulo">Tipo de documento:</td>
				<td width="100" colspan="2">
					<select  id="tipo_documento" style="width:145px;">
						<option value="cc">C&eacute;dula de Ciudadan&iacute;a</option>
						<option value="ce">C&eacute;dula de Extranjer&iacute;a</option>
						<option value="ti">Tarjeta de Identidad</option>
					</select>
				</td>
			</tr>
			
			<tr align="left">
				<td width="160" class="subtitulo">Número del documento:</td>
				<td width="120"><input size="9" maxlength="10" id="numero_documento_buscar"></td>
				<td style="padding-left: 5px;"><input type="button" value="Buscar trabajador" id="boton_buscar_trabajador"></td>
			</tr>
			
			<tr align="left">
				<td width="120"></td>
				<td width="*" class="texto-error" colspan="3"><div style="display: none;" id="error_numero_documento"></div></td>
			</tr>
			
			<tr><td height="10" ></td></tr>
		</tbody></table>
	</div>
	
	<div id="info_trabajador" style="display:none;">
		<fieldset>
			<legend><b><div id="placa_equ">Información del trabajador</div></b></legend>
			<table width="100%">
				<tbody><tr align="left">
					<td width="50" class="subtitulo">Nombre:</td>
					<td width="210" colspan="3"><div id="nombre"></div></td>
				</tr>
				<tr><td height="10" colspan="4"></td></tr>
				<tr valign="top" align="left">
					<td width="50" class="subtitulo">Documento:</td>
					<td width="133"><div id="documento"></div></td>
					<td width="45" class="subtitulo">Empresa:</td>
					<td><div id="empresa"></div></td>
				</tr>
			</tbody></table>
		</fieldset>
		
		<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody>
			<tr><td height="10" colspan="4"></td></tr>
			<tr><td height="1" colspan="4" class="linea"></td></tr>
			<tr><td height="10" colspan="4"></td></tr>
			<tr align="left">
				<td align="center" width="100%" valign="top" colspan="4"><input type="submit" value="Ingresar a la lista"></td>
			</tr>
			<tr><td height="30" colspan="4"></td></tr>
		</tbody></table>
	</div>
	
	<div class="texto-error" align="center" style="display: none;" id="error_ingresar_trabajador"></div>
	
	<div id="lista">
		<div  class="float-left"  style="margin-top:30px; margin-left:128px; width:310px;">
			<select id="lista_llegada" style="width:300px;" multiple="multiple" size='10' >
				<?php
				$select_html = '';
				$orden = 1;
				foreach ( $listado as $trabajador )
				{
					$select_html .= '<option value="'.$trabajador['Listallegada']['id'].'">'.$orden++.'. '.$trabajador['Trabajador']['nombre'].' - '.$trabajador[0]['hora'].'</option>';
				}
				echo $select_html;
				?>
			</select>
		</div>
		
		<div class="float-left" align="left" style="margin-top:30px; width:50px;">
			<img id="boton_borrar_trabajador" alt="Borrar trabajador de la lista" title="Borrar trabajador de la lista" class="no-border" src="/img/borrar.png" />
			<img id="boton_limpiar_listado" alt="Limpiar todo el listado de llegada" title="Limpiar todo el listado de llegada" class="no-border" src="/img/borrar-lista.png" />
		</div>
	</div>
</form>