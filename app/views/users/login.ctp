<span style="text-align: center;"><h1>Bienvenido al</h1></span>
<span style="text-align: center;"><h1>Sistema de Informaci&oacute;n para la Eficiencia Ocupacional</h1></span>

<!--<div id="cuadro_notificaciones" class="<?php //echo $clase_notificacion; ?>" style="display: <?php //echo $display_notificacion; ?>;">
	<?php //echo $mensaje_notificacion; ?>
</div> -->

<div id="login_box">
	<table width="100%">
		<tr>
			<td height="250" align="center">
				<fieldset class="login_fieldset">
					<legend class="login_legend">Entrada al SIEO</legend>
					<form id="UserLoginForm" method="post" action="/users/login" accept-charset="utf-8">
						<table>
							<tr>
								<td><label for="UserUsername">Login</label></td>
								<td><input name="data[User][username]" type="text" maxlength="15" id="UserUsername" /></td>
							</tr>
							<tr align="left">
								<td></td>
								<td class="texto-error"><div id="error_username" style="display:none;" /></td>
							</tr>
							<tr>
								<td><label for="UserPassword">Clave</label></td>
								<td><input type="password" name="data[User][password]" id="UserPassword" /></td>
							</tr>
							<tr align="left">
								<td></td>
								<td class="texto-error"><div id="error_password" style="display:none;" /></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="button" id="boton_entrar" value="Entrar al Sistema" /></td>
							</tr>
						</table>
					</form>
				</fieldset>
			</td>
		</tr>
	</table>
</div>