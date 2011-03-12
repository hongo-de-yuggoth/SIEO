//-----------------------------------------------------------------------------

function nombre_vacio()
{
	if ( jQuery('#nombre').val() == '' )
	{
		jQuery('#error_nombre').html('Escribe el nombre del trabajador.').show();
		return true;
	}
	else
	{
		jQuery('#error_nombre').hide();
		return false;
	}
}

//-----------------------------------------------------------------------------

function numero_documento_con_logica()
{
	// Primero revisamos que no esté vacia.
	if ( jQuery('#numero_documento').val() == '' )
	{
		jQuery('#error_numero_documento').html('Escribe el n&uacute;mero de documento.').show();
		return false;
	}
	// Verificamos que no exista ya un trabajador con este mismo numero de documento.
	else if ( existe_numero_documento(jQuery('#tipo_documento').val(), jQuery('#numero_documento').val()) )
	{
		jQuery('#error_numero_documento').html('Este trabajador ya se encuentra en el sistema.').show();
		return false;
	}
	else
	{
		jQuery('#error_numero_documento').html('').hide();
		return true;
	}
}

//-----------------------------------------------------------------------------

function direccion_vacio()
{
	if ( jQuery('#direccion').val() == '' )
	{
		jQuery('#error_direccion').html('Escribe la direcci&oacute;n.').show();
		return true;
	}
	else
	{
		jQuery('#error_direccion').hide();
		return false;
	}
}

//--------------------------------------------------------------------------

function telefonos_vacio()
{
	if ( jQuery('#telefono_familiar').val() == '' && jQuery('#telefono_personal').val() == '' )
	{
		jQuery('#error_telefonos').html('Escribe al menos un telefono.').show();
		return true;
	}
	else
	{
		jQuery('#error_telefonos').hide();
		return false;
	}
}

//--------------------------------------------------------------------------

function fecha_nacimiento_vacio()
{
	if ( jQuery('#fecha_dia').val() == 'day' || jQuery('#fecha_mes').val() == '-1' || jQuery('#fecha_anio').val() == '' )
	{
		jQuery('#error_fecha_nacimiento').html('Escribe la fecha de nacimiento.').show();
		return true;
	}
	else
	{
		jQuery('#error_fecha_nacimiento').hide();
		return false;
	}
}

//--------------------------------------------------------------------------

function cargo_vacio()
{
	if ( jQuery('#cargo_desempenar').val() == '' )
	{
		jQuery('#error_cargo_desempenar').html('Escribe el cargo que desempeñar&aacute; el trabajador.').show();
		return true;
	}
	else
	{
		jQuery('#error_cargo_desempenar').hide();
		return false;
	}
}

//-----------------------------------------------------------------------------

function eps_vacio()
{
	if ( jQuery('#eps').val() == '' )
	{
		jQuery('#error_eps').html('Escribe el EPS del trabajador.').show();
		return true;
	}
	else
	{
		jQuery('#error_eps').hide();
		return false;
	}
}

//-----------------------------------------------------------------------------

function estado_civil_vacio()
{
	if ( jQuery('#estado_civil').val() == '' )
	{
		jQuery('#error_estado_civil').html('Escribe el estado civil del trabajador.').show();
		return true;
	}
	else
	{
		jQuery('#error_estado_civil').hide();
		return false;
	}
}

//--------------------------------------------------------------------------

function cant_hijos_con_logica()
{
	if ( jQuery('#cant_hijos').val() == '' )
	{
		jQuery('#cant_hijos').val('0');
	}
	if ( es_numero(jQuery('#cant_hijos').val()) )
	{
		jQuery('#error_cantidad_hijos').html('').hide();
		return true;
	}
	else
	{
		jQuery('#error_cantidad_hijos').html('Debe ser un valor num&eacute;rico.').show();
		return false;
	}
	
}

//-----------------------------------------------------------------------------
	
function config_input(kp)
{
	if ( kp.which == 13 )
	{
		return false;
	}
	return true;
}

//-----------------------------------------------------------------------------

function existe_numero_documento(tipo_documento, numero_documento)
{
	jQuery.ajax(
	{
		type: "POST",
		url: '/trabajadores/existe/'+tipo_documento+'/'+numero_documento,
		dataType: 'json',
		cache: false,
		async: false,
		success: function(json)
		{
			return json.existe;
		}
	});
}

//--------------------------------------------------------------------------

function cargar_datos_empresa()
{
	jQuery.ajax(
	{
		type: "POST",
		url: '/empresas/datos/'+jQuery('#empresa').val(),
		dataType: 'json',
		cache: false,
		async: false,
		success: function(json)
		{
			if ( json.resultado == true )
			{
				$('#ciudad').html(json.ciudad);
				$('#departamento').html(json.departamento);
				$('#arp').html(json.arp);
			}
		}
	});
}

//--------------------------------------------------------------------------

/*function edad(fecha_nacimiento)
{
	// mm/dd/aaaa
	hoy = new Date();
	hoy.setHours(0);
	hoy.setMinutes(0)
	hoy.setSeconds(0);
	console.log('hoy'+hoy);
	
	return parseInt((hoy - fecha_nacimiento)/365/24/60/60/1000);
}*/

//--------------------------------------------------------------------------

/*function cargar_edad()
{
	// Revisamos si todos los campos de fecha tienen información.
	if ( jQuery('#fecha_dia').val() != 'day' &&
			jQuery('#fecha_mes').val() != '-1' &&
			es_numero(jQuery('#fecha_anio').val()) )
	{
		jQuery('#edad').html(edad(jQuery('#fecha_mes').val()+'/'+jQuery('#fecha_dia').val()+'/'+jQuery('#fecha_anio').val())+' años.');
	}
}*/
	
//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------

jQuery(document).ready(function()
{
	// Configuración inicial
	jQuery('#nombre').keypress(config_input);
	jQuery('#numero_documento').keypress(config_input);
	jQuery('#fecha_anio').keypress(config_input);
	jQuery('#direccion').keypress(config_input);
	jQuery('#telefono_familiar').keypress(config_input);
	jQuery('#telefono_personal').keypress(config_input);
	jQuery('#cargo_desempenar').keypress(config_input);
	jQuery('#eps').keypress(config_input);
	jQuery('#estado_civil').keypress(config_input);
	jQuery('#cant_hijos').keypress(config_input);
	cargar_datos_empresa();
	datePickerController.createDatePicker(
	{
		formElements:{"fecha_anio":"Y","fecha_mes":"n","fecha_dia":"j"},
		showWeeks:false,
		noTodayButton:true,
		noFadeEffect:true,
		statusFormat:"l-cc-sp-d-sp-F-sp-Y"
	});
	
	/*
	datePickerController.createDatePicker(
	{
		formElements:{"fecha_anio":"Y","fecha_mes":"n","fecha_dia":"j"},
		showWeeks:false,
		noTodayButton:true,
		noFadeEffect:true,
		statusFormat:"l-cc-sp-d-sp-F-sp-Y",
		callbackFunctions:
		{
			'dateset':[function(info)
			{
				console.log(info.date);
				if ( info.date != null )
				{
					jQuery('#edad').html(edad(info.date)+' años.');
				}
				else
				{
					jQuery('#edad').html('');
				}
				
			}]
		}
	});
	*/
	
	jQuery('#departamento_trabajador [value=33]').attr('selected', 'selected');
	
	if ( jQuery('#cuadro_notificaciones').not(':hidden') )
	{
		jQuery('#cuadro_notificaciones').hide().slideDown('slow');
		jQuery('#cuadro_notificaciones').fadeTo(10000, 0.9).fadeOut(7000);
	}
	
	//--------------------------------------------------------------------------
	// Programamos los diferentes EVENTOS.
	
	/*jQuery('#fecha_dia').change(cargar_edad);
	jQuery('#fecha_mes').change(cargar_edad);
	jQuery('#fecha_anio').change(cargar_edad);*/
	
	jQuery('#empresa').change(cargar_datos_empresa);
	//--------------------------------------------------------------------------
	jQuery('#departamento_trabajador').change(function()
	{
		depto_seleccionado = jQuery('#departamento_trabajador').val();
		if ( depto_seleccionado == '33' )
		{
			jQuery('#etiqueta_ciudad_localidad').html('Localidad:');
			cargar_localidades('ciudades', 'localidades');
		}
		else
		{
			jQuery('#etiqueta_ciudad_localidad').html('Municipio:');
			cargar_ciudades(depto_seleccionado, 'ciudad_trabajador', 'ciudades', 'localidades');
		}
	});
	//--------------------------------------------------------------------------
	// Validamos los datos del formulario.
	jQuery('#ingresar_trabajador').submit(function()
	{
		// Validamos los datos requeridos.
		nv = nombre_vacio();
		ndcl = numero_documento_con_logica();
		dv = direccion_vacio();
		tv = telefonos_vacio();
		fnv = fecha_nacimiento_vacio();
		cv = cargo_vacio();
		epsv = eps_vacio();
		ecv = estado_civil_vacio();
		chcl = cant_hijos_con_logica();
		
		// Si pasa todas las validaciones hacemos el Submit.
		if ( nv==false && ndcl==true && dv==false && tv==false && fnv==false && cv==false && epsv==false && ecv==false && chcl==true )
		{
			jQuery('#nombre').val(jQuery.trim(jQuery('#nombre').val()));
			jQuery('#numero_documento').val(jQuery.trim(jQuery('#numero_documento').val()));
			jQuery('#fecha_nacimiento').val(jQuery('#fecha_anio').val()+'-'+jQuery('#fecha_mes').val()+'-'+jQuery('#fecha_dia').val());
			jQuery('#direccion').val(jQuery.trim(jQuery('#direccion').val()));
			jQuery('#telefono_familiar').val(jQuery.trim(jQuery('#telefono_familiar').val()));
			jQuery('#telefono_personal').val(jQuery.trim(jQuery('#telefono_personal').val()));
			jQuery('#cargo_desempenar').val(jQuery.trim(jQuery('#cargo_desempenar').val()));
			jQuery('#eps').val(jQuery.trim(jQuery('#eps').val()));
			jQuery('#estado_civil').val(jQuery.trim(jQuery('#estado_civil').val()));
			jQuery('#cant_hijos').val(jQuery.trim(jQuery('#cant_hijos').val()));
			
			jQuery('#ingresar_trabajador').attr('action', '/trabajadores/add');
			return true;
		}
		else
		{
			return false;
		}
	});
	//--------------------------------------------------------------------------
	
	jQuery('#cant_hijos').blur(function()
	{
		// Chekeamos si es numerico
		
		// Verificamos que sea menor o igual a 20
		
		// en caso negativo se muestra mensaje.
		
		// en caso positivo se oculta mensaje-
	});
	
	//--------------------------------------------------------------------------
});
