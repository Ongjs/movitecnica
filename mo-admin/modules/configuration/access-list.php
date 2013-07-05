<?php
require_once "../conf.php";
$cn->query("select username, password from configuration");
?>
<br />
<fieldset>
	<legend>Informacion</legend>
	<table width="100%">
		<tr>
			<td><label for="user">Usuario</label></td>
			<td><?php echo $cn->result('username'); ?></td>
		</tr>
		<tr>
			<td><label for="password">Contraseña</label></td>
			<td><?php echo $cn->result('password'); ?></td>
		</tr>
		<tr>
			<td colspan="2"><input type="button" value="Editar" class="update" /></td>
		</tr>
	</table>
</fieldset>
<script type="text/javascript">
$(document).ready(function(){
	var mod = 10;
	$(".update").on("click", function(){ mo_update(mod, $(this)); return false; });
});
</script>