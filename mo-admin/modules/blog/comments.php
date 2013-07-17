<h1>Blog</h1>
<a href="./">Home </a> - <a href="#" class="list">Comentarios</a><br /><br /><br />
<div class="MOForm">
	<fieldset class="search">
		<legend>Filtrar informacion</legend>
		<table>
			<tr>
				<td><label for="blog">Elija un blog</label></td>
				<td><select class="filter"><option value="">todos los blog</option><?php
				$cn->query("SELECT id, name from content ORDER BY id DESC");
				while($row = $cn->fetch()) echo "<option value=\"$row[0]\"".($row[0] == $id ? ' selected="selected"' : '').">$row[1]</option>";
				?></select></td>
			</tr>
			<tr>
				<td><label for="search">Ingrese el termino a buscar</label></td>
				<td><input type="text" name="search" id="search" /></td>
			</tr>
		</table>
	</fieldset>
	<div id="list"></div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	var mod = 81;
	mo_list(mod);
	$("#search").keyup(function(){ mo_search(mod); return false; });
	$(".filter").change(function(){ mo_list(mod); return false; });
	$(".list").on("click", function(){ mo_list(mod); return false; });
	$(".status").on("click", function(){ mo_status(mod, $(this)); return false; });
	$(".delete").on("click", function(){ mo_delete(mod, $(this)); return false; });
});
</script>