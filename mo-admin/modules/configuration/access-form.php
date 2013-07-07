<?php
require_once "../conf.php";
$cn->query("select username, password from configuration");
?>
<form>
	<fieldset>
		<legend>Actualizar Informacion</legend>
		<table width="100%">
			<tr>
				<td><label for="user">Usuario</label></td>
				<td><input type="text" name="user" id="user" value="<?php echo $cn->result('username'); ?>" /></td>
			</tr>
			<tr>
				<td><label for="password">Contraseña</label></td>
				<td><input type="password" name="password" id="password" value="<?php echo $cn->result('password'); ?>" /></td>
			</tr>
			<tr>
				<td colspan="2"><br /><input id="submt" type="submit" value="Enviar" /> <input type="button" value="cancelar" class="list" /></td>
			</tr>
		</table>
                <input type="hidden" name="mod" value="10">
	</fieldset>
</form>