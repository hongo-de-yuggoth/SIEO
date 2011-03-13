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

jQuery(document).ready(function()
{
	// Configuración inicial
	/*
	jQuery('#nombre').keypress(config_input);
	jQuery('#numero_documento').keypress(config_input);
	*/
	
	/*datePickerController.createDatePicker(
	{
		formElements:{"fecha_anio":"Y","fecha_mes":"n","fecha_dia":"j"},
		showWeeks:false,
		noTodayButton:true,
		noFadeEffect:true,
		statusFormat:"l-cc-sp-d-sp-F-sp-Y"
	});*/
	
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
						jQuery('#eps').html(jQuery('#eps_trabajador').val());
						jQuery('#arp').html(jQuery('#arp_trabajador').val());
						jQuery('#estado_civil').html(jQuery('#estado_civil_trabajador').val());
						jQuery('#cant_hijos').html(jQuery('#cant_hijos_trabajador').val());
						jQuery('#practica_religiosa').html(jQuery('#practica_religiosa_trabajador').val());
						
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
