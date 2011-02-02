function username_vacio()
{
	if ( $('#UserUsername').val() == '' )
	{
		$('#error_username').html('Te falta escribir el login.').show();
		return true;
	}
	else
	{
		$('#error_username').html('').hide();
		return false;
	}
}

//-----------------------------------------------------------------------------

function password_vacio()
{
	if ( $('#UserPassword').val() == '' )
	{
		$('#error_password').html('Te falta escribir la clave.').show();
		return true;
	}
	else
	{
		$('#error_password').html('').hide();
		return false;
	}
}

//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------

jQuery(document).ready(function()
{
	/*if ( jQuery('#cuadro_notificaciones').not(':hidden') )
	{
		jQuery('#cuadro_notificaciones').hide().slideDown('slow');
		jQuery('#cuadro_notificaciones').fadeTo(10000, 0.9).fadeOut(7000);
	}*/

	//--------------------------------------------------------------------------
	// Programamos los diferentes EVENTOS.

	//--------------------------------------------------------------------------

	jQuery('#UserUsername').keypress(function(kp)
	{
		if ( kp.which == 13 )
		{
			jQuery('#boton_entrar').click();
			return false;
		}
		return true;
	});

	//--------------------------------------------------------------------------

	jQuery('#UserPassword').keypress(function(kp)
	{
		if ( kp.which == 13 )
		{
			jQuery('#boton_entrar').click();
			return false;
		}
		return true;
	});

	//--------------------------------------------------------------------------

	// Validamos los datos del formulario.
	jQuery('#boton_entrar').click(function()
	{
		jQuery('#UserUsername').val(jQuery.trim(jQuery('#UserUsername').val()));
		jQuery('#UserPassword').val(jQuery.trim(jQuery('#UserPassword').val()));

		// Validamos los datos requeridos.
		var uv = username_vacio();
		var pv = password_vacio();

		// Si pasa todas las validaciones hacemos el Submit.
		if ( uv==false && pv==false )
		{
			jQuery('#UserLoginForm').submit();
		}
	});
});
