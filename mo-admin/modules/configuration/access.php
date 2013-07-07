<h1>Configuración</h1>
<a href="./">Inicio </a> - <a href="#" class="list">Acceso</a><br />
<div align="center" class="MOForm">
	<br /><div id="list"></div>
	<br /><div id="form"></div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	var mod = 10;
	mo_list(mod);
	$(document).on("click", ".list", function(){ mo_list(mod); return false; });
	$(document).on("click", ".update", function(){ mo_update(mod, $(this)); return false; });
	$(document).on("submit", "form", function(){ mo_submit(mod, 5); return false; });
});
</script>