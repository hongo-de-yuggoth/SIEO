//--------------------------------------------------------------------------

function limpiar_buscar_trabajador()
{
	jQuery('#numero_documento_buscar').val('');
	jQuery('#error_numero_documento').html('').hide();
}

//--------------------------------------------------------------------------

function limpiar_hco()
{
	jQuery('#fecha').html('');
	jQuery('#empresa').html('');
	jQuery('#ciudad').html('');
	jQuery('#departamento').html('');
	jQuery('#nombre_trabajador').html('');
	jQuery('#documento').html('');
	jQuery('#sexo').html('');
	jQuery('#direccion').html('');
	jQuery('#localidad').html('');
	jQuery('#telefono_familiar').html('');
	jQuery('#telefono_personal').html('');
	jQuery('#fecha_nacimiento').html('');
	jQuery('#edad').html('');
	jQuery('#cargo_desempenar').html('');
	jQuery('#nivel_estudio').html('');
	jQuery('#eps').html('');
	jQuery('#arp').html('');
	jQuery('#estado_civil').html('');
	jQuery('#practica_religiosa').html('');
	jQuery('#cant_hijos').html('');
	jQuery('input:checkbox[name="tipo_examen"]:checked').removeAttr('checked');
	jQuery('#antecedentes_laborales input:checkbox:not(:checked)').attr('checked', 'checked');
	jQuery('#riesgos_cargo_desempenar input:checkbox:not(:checked)').attr('checked', 'checked');
	jQuery('#hco input[type="text"]').val('');
	jQuery('#hco textarea').val('');
	jQuery('#recomendaciones').html('');
	jQuery('#cmo_1').attr('checked', 'checked');
	jQuery('#hco select > option:first').attr('selected', 'selected');
	
	jQuery('#hco').hide();
}

//--------------------------------------------------------------------------

function borrar_div_ant_lab()
{
	ac = parseInt(jQuery('#antecedentes_counter').val());
	
	// Se identifica el DIV padre (contenedor) y el indice del DIV a borrar.
	id_div_padre = '#'+jQuery(this).closest('div').attr('id');
	splitaso = id_div_padre.split('-');
	indice_div = parseInt(splitaso[1]);
	
	// En caso de que sea el último DIV simplemente lo eliminamos.
	if ( indice_div === ac )
	{
		jQuery(id_div_padre).remove();
		jQuery('#antecedentes_counter').val(--ac);
	}
	else
	{
		// Cambiamos el id del DIV padre
		id_div_borrar = 'div_para_borrar';
		jQuery(id_div_padre).attr('id', id_div_borrar);
		id_div_borrar = '#'+id_div_borrar;
	
		// Reseteamos los ids de dicho nodo.
		jQuery
		(
			'#a'+indice_div+'_indice_titulo, '+
			'#boton_borrar_antecedente-'+indice_div+', '+
			id_div_borrar+' input[type="text"], '+
			id_div_borrar+' input[type="checkbox"]'
		).removeAttr('id');
		
		while ( indice_div <= ac )
		{
			// Se renombran los id con el indice nuevo, nodo a nodo DIV.
			indice = indice_div + 1;
			jQuery('#ant_lab-'+indice).attr('id', 'ant_lab-'+indice_div);
			jQuery('#a'+indice+'_indice_titulo').html(indice_div).attr('id', 'a'+indice_div+'_indice_titulo');
			jQuery('#boton_borrar_antecedente-'+indice).attr('id', 'boton_borrar_antecedente-'+indice_div);
			jQuery('#a'+indice+'_empresa_sector').attr('id', 'a'+indice_div+'_empresa_sector');
			jQuery('#a'+indice+'_cargo').attr('id', 'a'+indice_div+'_cargo');
			jQuery('#r'+indice+'_fis').attr('name', 'riesgos_'+indice_div).attr('id', 'r'+indice_div+'_fis');
			jQuery('#r'+indice+'_qui').attr('name', 'riesgos_'+indice_div).attr('id', 'r'+indice_div+'_qui');
			jQuery('#r'+indice+'_mec').attr('name', 'riesgos_'+indice_div).attr('id', 'r'+indice_div+'_mec');
			jQuery('#r'+indice+'_erg').attr('name', 'riesgos_'+indice_div).attr('id', 'r'+indice_div+'_erg');
			jQuery('#r'+indice+'_psi').attr('name', 'riesgos_'+indice_div).attr('id', 'r'+indice_div+'_psi');
			jQuery('#r'+indice+'_alt').attr('name', 'riesgos_'+indice_div).attr('id', 'r'+indice_div+'_alt');
			jQuery('#a'+indice+'_tiempo_exposicion').attr('name', 'riesgos_'+indice_div).attr('id', 'a'+indice_div+'_tiempo_exposicion');
			indice_div++;
		}
		
		jQuery('#antecedentes_counter').val(--ac);
		jQuery(id_div_borrar).remove();
	}
	return false;
}
	
//-----------------------------------------------------------------------------

function borrar_div_accidente()
{
	ac = parseInt(jQuery('#accidentes_counter').val());
	
	// Se identifica el DIV padre (contenedor) y el indice del DIV a borrar.
	id_div_padre = '#'+jQuery(this).closest('div').attr('id');
	splitaso = id_div_padre.split('-');
	indice_div = parseInt(splitaso[1]);
	
	// En caso de que sea el último DIV simplemente lo eliminamos.
	if ( indice_div === ac )
	{
		
		jQuery(id_div_padre).remove();
		jQuery('#accidentes_counter').val(--ac);
	}
	else
	{
		// Cambiamos el id del DIV padre
		id_div_borrar = 'div_para_borrar';
		jQuery(id_div_padre).attr('id', id_div_borrar);
		id_div_borrar = '#'+id_div_borrar;
		
		// Reseteamos los ids de dicho nodo.
		jQuery
		(
			'#ac_indice_titulo-'+indice_div+', '+
			'#boton_borrar_accidente-'+indice_div+', '+
			id_div_borrar+' input[type="text"], '+
			id_div_borrar+' input[type="hidden"], '+
			id_div_borrar+' select'
		).removeAttr('id');
		
		while ( indice_div < ac )
		{
			// Se renombran los id con el indice nuevo, nodo a nodo DIV.
			indice = indice_div + 1;
			datePickerController.destroyDatePicker('ac_anio-'+indice_div);
			jQuery('#accidente-'+indice).attr('id', 'accidente-'+indice_div);
			jQuery('#ac_indice_titulo-'+indice).html(indice_div).attr('id', 'ac_indice_titulo-'+indice_div);
			jQuery('#boton_borrar_accidente-'+indice).attr('id', 'boton_borrar_accidente-'+indice_div);
			jQuery('#ac_empresa-'+indice).attr('id', 'ac_empresa-'+indice_div);
			jQuery('#fecha_accidente-'+indice).attr('id', 'fecha_accidente-'+indice_div);
			jQuery('#ac_dia-'+indice).attr('id', 'ac_dia-'+indice_div);
			jQuery('#ac_mes-'+indice).attr('id', 'ac_mes-'+indice_div);
			jQuery('#ac_anio-'+indice).attr('id', 'ac_anio-'+indice_div);
			jQuery('#ac_lesion-'+indice).attr('id', 'ac_lesion-'+indice_div);
			jQuery('#ac_secuelas-'+indice).attr('id', 'ac_secuelas-'+indice_div);
			
			anio = '"ac_anio-'+indice_div+'"';
			mes = '"ac_mes-'+indice_div+'"';
			dia = '"ac_dia-'+indice_div+'"';
			eval('var dp_conf = {formElements:{'+anio+':"Y",'+mes+':"n",'+dia+':"j"},showWeeks:false,noTodayButton:true,noFadeEffect:true,statusFormat:"l-cc-sp-d-sp-F-sp-Y"}');
			datePickerController.createDatePicker(dp_conf);
			
			indice_div++;
		}
		
		datePickerController.destroyDatePicker('ac_anio-'+indice_div);
		jQuery('#accidentes_counter').val(--ac);
		jQuery(id_div_borrar).remove();
	}
	return false;
}

//-----------------------------------------------------------------------------

jQuery(document).ready(function()
{
	// Configuración inicial
	/*
	jQuery('#nombre').keypress(config_input);
	jQuery('#numero_documento').keypress(config_input);
	*/
	jQuery('#antecedentes_counter').val('1');
	jQuery('#accidentes_counter').val('1');
	
	datePickerController.createDatePicker(
	{
		formElements:{"fum_anio":"Y", "fum_mes":"n", "fum_dia":"j"},
		showWeeks:false,
		noTodayButton:true,
		noFadeEffect:true,
		statusFormat:"l-cc-sp-d-sp-F-sp-Y"
	});
	
	datePickerController.createDatePicker(
	{
		formElements:{"ac_anio-1":"Y", "ac_mes-1":"n", "ac_dia-1":"j"},
		showWeeks:false,
		noTodayButton:true,
		noFadeEffect:true,
		statusFormat:"l-cc-sp-d-sp-F-sp-Y"
	});
	
	if ( jQuery('#cuadro_notificaciones').not(':hidden') )
	{
		jQuery('#cuadro_notificaciones').hide().slideDown('slow');
		jQuery('#cuadro_notificaciones').fadeTo(10000, 0.9).fadeOut(7000);
	}

	//--------------------------------------------------------------------------
	// Programamos los diferentes EVENTOS.
	
	jQuery('#sel_departamento_trabajador').change(function()
	{
		depto_seleccionado = jQuery('#sel_departamento_trabajador').val();
		if ( depto_seleccionado == '33' )
		{
			jQuery('#etiqueta_ciudad_localidad').html('Localidad:');
			cargar_localidades('ciudades', 'localidades');
		}
		else
		{
			jQuery('#etiqueta_ciudad_localidad').html('Municipio:');
			cargar_ciudades(depto_seleccionado, 'sel_ciudad_trabajador', 'ciudades', 'localidades');
		}
	});

	//--------------------------------------------------------------------------
	
	// Configuramos el botón para buscar trabajadores.
	jQuery('#boton_buscar_trabajador').click(function()
	{
		jQuery('#error_numero_documento').hide();
		jQuery('#reloj_arena').show();
		
		// Validamos el campo de Número de Documento
		if ( jQuery('#numero_documento_buscar').val() == '' )
		{
			jQuery('#reloj_arena').hide();
			jQuery('#error_ingresar_trabajador').html('').hide();
			jQuery('#error_numero_documento').html('Escribe el n&uacute;mero de documento por favor.').show();
		}
		else
		{
			jQuery('#numero_documento_buscar').val(jQuery.trim(jQuery('#numero_documento_buscar').val()));
			jQuery('#escondidos').load
			(
				'/trabajadores/buscar_info_completa/'+jQuery('#tipo_documento').val()+'/'+jQuery('#numero_documento_buscar').val(),
				function()
				{
					jQuery('#reloj_arena').hide();
					// Si encontró el Trabajador
					if ( jQuery('#encontro').val() == 'true' )
					{
						limpiar_buscar_trabajador();
						
						// Leemos datos de inputs hidden y ponemos info en el cuadro de
						// info del trabajador.
						jQuery('#empresa').html(jQuery('#empresa_trabajador').val());
						
						jQuery('#departamento').html(jQuery('#departamento_empresa').val());
						if ( jQuery('#id_departamento_empresa').val() == "33" )
						{
							jQuery('#etiqueta_ciudad_localidad_empresa').html('Localidad:');
							jQuery('#ciudad').html(jQuery('#localidad_empresa').val());
						}
						else
						{
							jQuery('#etiqueta_ciudad_localidad_empresa').html('Municipio:');
							jQuery('#ciudad').html(jQuery('#ciudad_empresa').val());
						}
						
						jQuery('#nombre').html(jQuery('#nombre_trabajador').val());
						jQuery('#documento').html(jQuery('#tipo_documento_trabajador').val()+' '+jQuery('#numero_documento_trabajador').val());
						jQuery('#sexo').html(jQuery('#sexo_trabajador').val());
						jQuery('#direccion').html(jQuery('#direccion_trabajador').val());
						jQuery('#telefono_familiar').html(jQuery('#telefono_familiar_trabajador').val());
						jQuery('#telefono_personal').html(jQuery('#telefono_personal_trabajador').val());
						jQuery('#fecha_nacimiento').html(jQuery('#fecha_nacimiento_trabajador').val());
						jQuery('#nivel_estudio').html(jQuery('#nivel_estudio_trabajador').val());
						jQuery('#eps').val(jQuery('#eps_trabajador').val());
						jQuery('#arp').val(jQuery('#arp_trabajador').val());
						jQuery('#estado_civil [value='+jQuery('#id_estado_civil_trabajador').val()+']').attr('selected', 'selected');
						jQuery('#cant_hijos').html(jQuery('#cant_hijos_trabajador').val());
						jQuery('#practica_religiosa [value='+jQuery('#id_practica_religiosa_trabajador').val()+']').attr('selected', 'selected');
						
						depto_seleccionado = jQuery('#departamento_trabajador').val();
						jQuery('#sel_departamento_trabajador [value='+depto_seleccionado+']').attr('selected', 'selected');
						if ( depto_seleccionado == '33' )
						{
							jQuery('#etiqueta_ciudad_localidad').html('Localidad:');
							jQuery('#sel_localidad_trabajador [value='+jQuery('#localidad_trabajador').val()+']').attr('selected', 'selected');
							cargar_localidades('ciudades', 'localidades');
						}
						else
						{
							jQuery('#etiqueta_ciudad_localidad').html('Municipio:');
							cargar_ciudades(depto_seleccionado, 'sel_ciudad_trabajador', 'ciudades', 'localidades');
							jQuery('#sel_ciudad_trabajador [value='+jQuery('#ciudad_trabajador').val()+']').attr('selected', 'selected');
						}
						
						if ( jQuery('#sexo_id').val() == 'F' )
						{
							jQuery('#ginecoobstetrico').show();
						}
						else
						{
							jQuery('#ginecoobstetrico').hide();
						}

						jQuery('#error_ingresar_trabajador').html('').hide();
						jQuery('#error_numero_documento').html('Trabajador encontrado.').show();
						jQuery('#hco').show();
					}
					else if ( jQuery('#encontro').val() == 'false' )
					{
						limpiar_buscar_trabajador();
						limpiar_hco();
						jQuery('#error_ingresar_trabajador').html('').hide();
						jQuery('#error_numero_documento').html('No se encontró un trabajador con ese n&uacute;mero de documento.').show();
					}
				}
			);
		}
	});

	//--------------------------------------------------------------------------
	
	jQuery('#boton_agregar_antecedente').click(function ()
	{
		// Antecedentes Counter.
		ac = parseInt(jQuery('#antecedentes_counter').val());
		if ( ac < 3 )
		{
			++ac;
			div_ant_lab =
			'<div id="ant_lab-'+ac+'" class="caja_fondo">'+
				'<table width="100%"><tbody>'+
					'<tr valign="top">'+
						'<td width="*" class="subtitulo">Antecedente Laboral #<span id="a'+ac+'_indice_titulo">'+ac+'</span></td>'+
						'<td width="33px">'+
							'<a id="boton_borrar_antecedente-'+ac+'" class="borrar-ant-lab" href="" style="text-decoration:none; color:#666666; font-weight:bold; font-size:9px;" title="Borrar este antecedente">'+
								'<img class="no-border" src="/img/borrar.png" align="right" />'+
							'</a>'+
						'</td>'+
					'</tr>'+
				'</tbody></table>'+
				'<table width="100%"><tbody>'+
					'<tr valign="top" align="left">'+
						'<td width="115" class="subtitulo">Empresa/Sector:</td>'+
						'<td width="190"><input type="text" id="a'+ac+'_empresa_sector" name="data['+ac+'][Antecedentelaboral][empresa_sector]" maxlength="50" style="width:190px;" /></td>'+
						'<td width="20"></td>'+
						'<td width="48" class="subtitulo">Cargo:</td>'+
						'<td width="*"><input type="text" id="a'+ac+'_cargo" name="data['+ac+'][Antecedentelaboral][cargo]" maxlength="50" style="width:158px;" /></td>'+
					'</tr>'+
				'</tbody></table>'+
				'<table width="100%"><tbody>'+
					'<tr valign="top" align="left">'+
						'<td width="70" class="subtitulo">Riesgos:</td>'+
						'<td width="100">'+
							'<input id="r'+ac+'_fis" type="checkbox" checked="checked" name="riesgos_'+ac+'" value="r_fis" style="vertical-align:bottom;" />'+
							'<label for="r'+ac+'_fis" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">F&iacute;sico</label>'+
						'</td>'+
						'<td width="15"></td>'+
						'<td width="100">'+
							'<input id="r'+ac+'_qui" type="checkbox" checked="checked" name="riesgos_'+ac+'" value="r_qui" style="vertical-align:bottom;" />'+
							'<label for="r'+ac+'_qui" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Qu&iacute;mico</label>'+
						'</td>'+
						'<td width="15"></td>'+
						'<td width="100">'+
							'<input id="r'+ac+'_mec" type="checkbox" checked="checked" name="riesgos_'+ac+'" value="r_mec" style="vertical-align:bottom;" />'+
							'<label for="r'+ac+'_mec" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Mec&aacute;nico</label>'+
						'</td>'+
						'<td width="15"></td>'+
						'<td width="*">'+
							'<input id="r'+ac+'_erg" type="checkbox" checked="checked" name="riesgos_'+ac+'" value="r_erg" style="vertical-align:bottom;" />'+
							'<label for="r'+ac+'_erg" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Ergon&oacute;mico</label>'+
						'</td>'+
					'</tr>'+
					'<tr valign="top" align="left">'+
						'<td></td>'+
						'<td width="100">'+
							'<input id="r'+ac+'_psi" type="checkbox" checked="checked" name="riesgos_'+ac+'" value="r_psi" style="vertical-align:bottom;" />'+
							'<label for="r'+ac+'_psi" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Psicosocial</label>'+
						'</td>'+
						'<td width="15"></td>'+
						'<td width="*" colspan="5">'+
							'<input id="r'+ac+'_alt" type="checkbox" checked="checked" name="riesgos_'+ac+'" value="r_alt" style="vertical-align:bottom;" />'+
							'<label for="r'+ac+'_alt" style="display:inline; font-weight:normal;margin:0px; vertical-align:bottom;">Seguridad:&nbsp;Alturas locativo</label>'+
						'</td>'+
					'</tr>'+
				'</tbody></table>'+
				'<table width="100%"><tbody>'+
					'<tr valign="top" align="left">'+
						'<td width="150" class="subtitulo">Tiempo de exposici&oacute;n:</td>'+
						'<td width="*"><input type="text" id="a'+ac+'_tiempo_exposicion" name="data['+ac+'][Antecedentelaboral][tiempo_exposicion]" maxlength="4" style="width:27px;" /> años.</td>'+
					'</tr>'+
				'</tbody></table>'+
			'</div>';
			jQuery('#divs_ant_lab').append(div_ant_lab);		// Creamos el DIV de Ant Lab
			jQuery('#boton_borrar_antecedente-'+ac).click(borrar_div_ant_lab);
			jQuery('#antecedentes_counter').val(ac);
		}
		return false;
	});
	
	//--------------------------------------------------------------------------
	
	jQuery('#boton_agregar_accidente').click(function ()
	{
		// Accidentes Counter.
		ac = parseInt(jQuery('#accidentes_counter').val());
		if ( ac < 15 )
		{
			++ac;
			div_accidente =
			'<div id="accidente-'+ac+'" class="caja_fondo">'+
				'<table width="100%"><tbody>'+
					'<tr valign="top">'+
						'<td width="*" class="subtitulo">Accidente de Trabajo #<span id="ac_indice_titulo-'+ac+'">'+ac+'</span></td>'+
						'<td width="33px"><a id="boton_borrar_accidente-'+ac+'" title="Borrar esta accidente" style="text-decoration: none; color: rgb(102, 102, 102); font-weight: bold; font-size: 9px;" href=""><img align="right" src="/img/borrar.png" class="no-border"></a></td>'+
					'</tr>'+
				'</tbody></table>'+
				'<table width="100%"><tbody>'+
					'<tr valign="top" align="left">'+
						'<td width="65" class="subtitulo">Empresa:</td>'+
						'<td width="220"><input id="ac_empresa-'+ac+'" type="text" name="accidentes[0][Accidentetrabajo][empresa]" maxlength="50" style="width:180px;" /></td>'+
						'<td width="48" class="subtitulo">Fecha:</td>'+
						'<td width="*">'+
							'<input id="fecha_accidente-'+ac+'" name="accidentes[0][Accidentetrabajo][fecha]" type="hidden" value="" />'+
							'<select id="ac_dia-'+ac+'" name="ac_dia-'+ac+'" class="fecha_dia">'+
								'<option value="day">D&iacute;a</option>'+
								'<option value="1">1</option>'+
								'<option value="2">2</option>'+
								'<option value="3">3</option>'+
								'<option value="4">4</option>'+
								'<option value="5">5</option>'+
								'<option value="6">6</option>'+
								'<option value="7">7</option>'+
								'<option value="8">8</option>'+
								'<option value="9">9</option>'+
								'<option value="10">10</option>'+
								'<option value="11">11</option>'+
								'<option value="12">12</option>'+
								'<option value="13">13</option>'+
								'<option value="14">14</option>'+
								'<option value="15">15</option>'+
								'<option value="16">16</option>'+
								'<option value="17">17</option>'+
								'<option value="18">18</option>'+
								'<option value="19">19</option>'+
								'<option value="20">20</option>'+
								'<option value="21">21</option>'+
								'<option value="22">22</option>'+
								'<option value="23">23</option>'+
								'<option value="24">24</option>'+
								'<option value="25">25</option>'+
								'<option value="26">26</option>'+
								'<option value="27">27</option>'+
								'<option value="28">28</option>'+
								'<option value="29">29</option>'+
								'<option value="30">30</option>'+
								'<option value="31">31</option>'+
							'</select>'+
							'<select id="ac_mes-'+ac+'" name="ac_mes-'+ac+'" class="fecha_mes">'+
							  '<option value="-1">Mes</option>'+
							  '<option value="1">Enero</option>'+
							  '<option value="2">Febrero</option>'+
							  '<option value="3">Marzo</option>'+
							  '<option value="4">Abril</option>'+
							  '<option value="5">Mayo</option>'+
							  '<option value="6">Junio</option>'+
							  '<option value="7">Julio</option>'+
							  '<option value="8">Agosto</option>'+
							  '<option value="9">Septiembre</option>'+
							  '<option value="10">Octubre</option>'+
							  '<option value="11">Noviembre</option>'+
							  '<option value="12">Diciembre</option>'+
							'</select>'+
							'<input id="ac_anio-'+ac+'" name="ac_anio-'+ac+'" type="text" class="w3em" size="3" maxlength="4" />'+
						'</td>'+
					'</tr>'+
				'</tbody></table>'+
				'<table width="100%"><tbody>'+
					'<tr valign="top" align="left">'+
						'<td width="65" class="subtitulo">Lesi&oacute;n:</td>'+
						'<td width="*"><input type="text" id="ac_lesion-'+ac+'" name="accidentes[0][Accidentetrabajo][lesion]" maxlength="200" style="width:485px;" /></td>'+
					'</tr>'+
					'<tr valign="top" align="left">'+
						'<td class="subtitulo">Secuelas:</td>'+
						'<td width="*"><input type="text" id="ac_secuelas-'+ac+'" name="accidentes[0][Accidentetrabajo][secuelas]" maxlength="200" style="width:485px;" /></td>'+
					'</tr>'+
				'</tbody></table>'+
			'</div>';
			jQuery('#div_accidentes').append(div_accidente);	// Creamos el DIV de Accidente
			
			// Configuramos y activamos el DatePicker de esta accidente;
			anio = '"ac_anio-'+ac+'"';
			mes = '"ac_mes-'+ac+'"';
			dia = '"ac_dia-'+ac+'"';
			eval('var dp_conf = {formElements:{'+anio+':"Y",'+mes+':"n",'+dia+':"j"},showWeeks:false,noTodayButton:true,noFadeEffect:true,statusFormat:"l-cc-sp-d-sp-F-sp-Y"}');
			datePickerController.createDatePicker(dp_conf);
			
			jQuery('#boton_borrar_accidente-'+ac).click(borrar_div_accidente);
			jQuery('#accidentes_counter').val(ac);
		}
		return false;
	});
	
	//--------------------------------------------------------------------------
	
	jQuery('#crear_hco').submit(function()
	{
		// Verificamos que el trabajador este confirmado.
		if ( jQuery('#encontro').val() == 'true' )
		{
			// Intentamos anexar el trabajador a la Lista de Llegada.
			jQuery.ajax(
			{
				type: "POST",
				url: '/listallegadas/add/'+jQuery('#id_trabajador').val(),
				dataType: 'json',
				cache: false,
				async: false,
				success: function(json)
				{
					limpiar_buscar_trabajador();
					limpiar_info_trabajador();
					if ( json.resultado == true )
					{
						// Se añade el trabajador al listado de llegada (GUI)
						var lista_count = document.getElementById('lista_llegada');
						jQuery('#lista_llegada').addOption(json.id, (lista_count.length+1)+'. '+json.nombre+' - '+json.hora);
						jQuery('#error_ingresar_trabajador').html('Trabajador ingresado con &eacute;xito.').show();
					}
					else if ( json.existe )
					{
						jQuery('#error_ingresar_trabajador').html('Este trabajador ya se encuentra en el listado.').show();
					}
					else
					{
						jQuery('#error_ingresar_trabajador').html('Ocurri&oacute; al intentar anexar este trabajador al listado.').show();
					}
				}
			});
		}
		return false;
	});
	//--------------------------------------------------------------------------
	
	jQuery('#numero_documento_buscar').keypress(function(kp)
	{
		if ( kp.which == 13 )
		{
			if ( jQuery(this).val() != '' )
			{
				jQuery('#boton_buscar_trabajador').click();
			}
			return false;
		}
		return true;
	});
});
