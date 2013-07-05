<a href="#" class="new">Nuevo</a>
<a href="#" class="cancel list">Cancelar</a>
<h1>Blog</h1>
<a href="./">Inicio </a> - <a href="#" class="list">Temas</a><br /><br /><br />
<div class="MOForm">
	<fieldset class="search">
		<legend>Filtrar informacion</legend>
		<table>
			<tr>
				<td><label for="search">Introdusca el termino a buscar</label></td>
				<td><input type="text" name="search" id="search" /></td>
			</tr>
		</table>
	</fieldset>
	<div id="list"></div>
	<div id="form"></div>
</div>
<script src="../lib/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	var mod = 80;
	mo_list(mod);
	Shadowbox.init();
	$(".new").click(function(){ mo_new(mod); return false; });
	$("#search").keyup(function(){ mo_search(mod); return false; });
	$(".list").on("click", function(){ mo_list(mod); return false; });
	$(".status").on("click", function(){ mo_status(mod, $(this)); return false; });
	$(".delete").on("click", function(){ mo_delete(mod, $(this)); return false; });
	$(".update").on("click", function(){ mo_update(mod, $(this)); return false; });

	$("form#save").on("submit", function(){
		tinyMCE.triggerSave();
		if(!required('#name', 'You must enter a Name')) return false;
		if(!required('#file_guid', 'Choose a File')) return false;
		if(!required('#detail', 'You must enter a Detail')) return false;
		if(!required('#tinymce', 'You must enter a Content')) return false;
		mo_submit(mod, 2);
		return false;
	});

	$("form#update").on("submit", function(){
		tinyMCE.triggerSave();
		if(!required('#name', 'You must enter a Name')) return false;
		if(!required('#file_guid', 'Choose a File')) return false;
		if(!required('#detail', 'You must enter a Detail')) return false;
		if(!required('#tinymce', 'You must enter a Content')) return false;
		mo_submit(mod, 5);
		return false;
	});
});
</script>