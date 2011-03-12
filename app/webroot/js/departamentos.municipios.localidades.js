/*
Dependiendo del Departamento carga las Ciudades correspondientes.
*/
function cargar_ciudades(departamento, select_ciudades, contenedor_ciudades, contenedor_localidades)
{
	jQuery.ajax(
	{
		type: "POST",
		url: '/ciudades/crear_select/'+departamento,
		dataType: 'json',
		cache: false,
		async: false,
		success: function(json)
		{
			if ( json.resultado == true )
			{
				jQuery('#'+select_ciudades).html(json.options);
			}
			else
			{
				jQuery('#'+select_ciudades).html('<option value="0">No disponible</option>');
			}
			jQuery('#'+contenedor_localidades).hide();
			jQuery('#'+contenedor_ciudades).show();
		}
	});
}

//-----------------------------------------------------------------------------

function cargar_localidades(contenedor_ciudades, contenedor_localidades)
{
	jQuery('#'+contenedor_ciudades).hide();
	jQuery('#'+contenedor_localidades).show();
}