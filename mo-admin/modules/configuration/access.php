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
	$(".list").on("click", function(){ mo_list(mod); return false; });
	$(".update").on("click", function(){ mo_update(mod, $(this)); return false; });
	$("form").on("submit", function(){ mo_submit(mod, 5); return false; });
});
</script>