<a href="#" class="cancel list">Cancelar</a>
<h1>Lista de Elementos</h1><br /><br /><br >
<div class="MOForm">
    <fieldset class="search">
        <legend>Filtrar Información</legend>
        <table>
            <tr>
                <td><label for="search">Seleccione categoria a filtrar</label></td>
                <td><select name="opt_cat" id ="opt_cat">
                        <option value="7">Galería Principal</option>
                        <option value="1">Equipo de Trabajo</option>
                        <option value="2">Proyectos</option>
                        <option value="3">Servicios</option>
                        <option value="4">Testimonios</option>
                        <option value="5">Noticia</option>
                        <option value="6">Nota de Prensa</option>
                    </select></td>
            </tr>
            <a href="#" class="new list">Nuevo</a>
            <tr>
                <td><label for="search">Búsqueda por nombre</label></td>
                <td><input type="text" name="search" id="search" /></td>
            </tr>
        </table>
    </fieldset>
    <div id="list"></div>
    <div id="form"></div>
</div>
<script src="../lib/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    var mod = 30;
    mo_list(mod);
    Shadowbox.init();
    $("#opt_cat").change(function(){ mo_search(mod, true); return false; });
    $("#search").keyup(function(){ mo_search(mod); return false; });
    $(".list").on("click", function(){ mo_list(mod); return false; });
    $(document).on("click",".update", function(){ mo_update(mod, $(this)); return false; });
    $(document).on("click",".delete", function(){ mo_delete(mod, $(this)); return false; });
    $(document).on("click",".status", function(){ mo_status(mod, $(this)); return false; });
    $(".new").on("click", function(){ mo_new(mod, $(this)); return false; });

    $(document).on("submit","form#update", function() {
        $("#img_file").val($("#image").val()); 
        tinyMCE.triggerSave();
        if (!required('#name', 'You must enter a Name')) return false;
        if (!required('#tinymce', 'You must enter a Content')) return false;
        mo_submit(mod, 5);
        return false;
    });
    $(document).on("submit","form#save", function(){
		tinyMCE.triggerSave();
		if(!required('#name', 'You must enter a Name')) return false;
		if(!required('#tinymce', 'You must enter a Content')) return false;
		mo_submit(mod, 2);
		return false;
	});
});
</script>