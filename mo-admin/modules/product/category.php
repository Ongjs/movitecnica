<?php
$cn->query("SELECT id, name FROM product WHERE parent_id = '0' AND type = '1' ORDER BY id asc");
?>
<a href="#" class="cancel list">Cancelar</a>
<a href="#" class="new list">Nuevo</a>
<h1>Categorías</h1>
<a href="./">Inicio </a> - <a href="#" class="list">Categorías</a><br /><br /><br />
<div class="MOForm">
    <fieldset class="search">
        <legend>Filtrar Información</legend>
        <table>
            <tr>
                <td><label for="search">Seleccione categoria a filtrar</label></td>
                <td>
                    <select name="opt_cat" id="opt_cat">
                        <option value=""></option>
                        <?php while ($row = $cn->fetch()) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="search">Introduzca el termino a buscar</label></td>
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
    var mod = 40;
    mo_list(mod);
    Shadowbox.init();
    $("#opt_cat").change(function(){ mo_search(mod); return false; });
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