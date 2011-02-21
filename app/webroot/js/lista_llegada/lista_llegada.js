function limpiar_info_trabajador()
{
	jQuery('#nombre').html('');
	jQuery('#documento').html('');
	jQuery('#empresa').html('');
	jQuery('#info_trabajador').slideUp('slow');
}

//--------------------------------------------------------------------------

function limpiar_buscar_trabajador()
{
	jQuery('#numero_documento_buscar').val('');
	jQuery('#error_numero_documento').html('').hide();

}

//--------------------------------------------------------------------------

jQuery(document).ready(function()
{
	// Configuración inicial

	if ( jQuery('#cuadro_notificaciones').not(':hidden') )
	{
		jQuery('#cuadro_notificaciones').hide().slideDown('slow');
		jQuery('#cuadro_notificaciones').fadeTo(10000, 0.9).fadeOut(7000);
	}

	//--------------------------------------------------------------------------
	// Programamos los diferentes EVENTOS.

	// Configuramos el botón para buscar trabajadores.
	jQuery('#boton_buscar_trabajador').click(function()
	{
		// Validamos el campo de Número de Documento
		if ( jQuery('#numero_documento_buscar').val() == '' )
		{
			jQuery('#error_ingresar_trabajador').html('').hide();
			jQuery('#error_numero_documento').html('Escribe el n&uacute;mero de documento por favor.').show();
		}
		else
		{
			jQuery('#numero_documento_buscar').val(jQuery.trim(jQuery('#numero_documento_buscar').val()));
			jQuery('#escondidos').load
			(
				'/trabajadores/buscar/'+jQuery('#tipo_documento').val()+'/'+jQuery('#numero_documento_buscar').val(),
				function()
				{
					// Si encontró el Trabajador
					if ( jQuery('#encontro').val() == 'true' )
					{
						limpiar_buscar_trabajador()

						// Leemos datos de inputs hidden y ponemos info en el cuadro de
						// info del trabajador.
						jQuery('#nombre').html(jQuery('#nombre_trabajador').val());
						jQuery('#documento').html(jQuery('#tipo_documento_trabajador').val()+' '+jQuery('#numero_documento_trabajador').val());
						jQuery('#empresa').html(jQuery('#empresa_trabajador').val());
						
						jQuery('#error_ingresar_trabajador').html('').hide();
						jQuery('#error_numero_documento').html('Trabajador encontrado.').show();
						jQuery('#info_trabajador').slideDown('slow');
					}
					else if ( jQuery('#encontro').val() == 'false' )
					{
						limpiar_info_trabajador();
						limpiar_buscar_trabajador();
						jQuery('#error_ingresar_trabajador').html('').hide();
						jQuery('#error_numero_documento').html('No se encontró un trabajador con ese n&uacute;mero de documento.').show();
					}
				}
			);
		}
	});

	//--------------------------------------------------------------------------
	
	jQuery('#anexar_trabajador').submit(function()
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
	
	jQuery('#boton_borrar_trabajador').click(function()
	{
		var id_listallegada = null;
		id_listallegada = jQuery('#lista_llegada').selectedValues();
		if ( id_listallegada != '' )
		{
			jQuery.ajax(
			{
				type: "POST",
				url: '/listallegadas/delete/'+id_listallegada,
				dataType: 'json',
				cache: false,
				async: false,
				success: function(json)
				{
					limpiar_buscar_trabajador();
					limpiar_info_trabajador();
					jQuery('#error_ingresar_trabajador').html('').hide();
					
					if ( json.resultado == true )
					{
						// Vaciamos el listado y recargamos los items (trabajadores).
						jQuery('#lista_llegada').removeOption(/./);
						jQuery.ajax(
						{
							type: "POST",
							url: '/listallegadas/listar/',
							dataType: 'json',
							cache: false,
							async: false,
							success: function(json)
							{
								if ( json.resultado == true )
								{
									// Agregamos los trabajadores obtenidos.
									for( i=0, orden=1; i < json.lista.length; i++, orden++ )
									{
										jQuery('#lista_llegada').addOption(json.lista[i].Listallegada.id, orden+'. '+json.lista[i].Trabajador.nombre+' - '+json.lista[i][0].hora);
									}
								}
							}
						});
					}
					else
					{
						jQuery('#error_ingresar_trabajador').html('Ocurri&oacute; un error al intentar eliminar este trabajador de la lista.').show();
					}
				}
			});
		}
		
	});
	
	//--------------------------------------------------------------------------
	
	jQuery('#boton_limpiar_listado').click(function()
	{
		var lista_count = document.getElementById('lista_llegada');
		if ( lista_count.length > 0 )
		{
			jQuery.ajax(
			{
				type: "POST",
				url: '/listallegadas/limpiar/',
				dataType: 'json',
				cache: false,
				async: false,
				success: function(json)
				{
					limpiar_buscar_trabajador();
					limpiar_info_trabajador();
					jQuery('#error_ingresar_trabajador').html('').hide();
					
					if ( json.resultado == true )
					{
						// Vaciamos el listado
						jQuery('#lista_llegada').removeOption(/./);
					}
				}
			});
		}
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
