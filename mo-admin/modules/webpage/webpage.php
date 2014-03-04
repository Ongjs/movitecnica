<a href="#" class="cancel list">Cancelar</a>
<h1>Paginas Web</h1><br /><br /><br >
<div class="MOForm">
    <fieldset class="search">
        <legend>Filtrar Información</legend>
        <table>
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
    var mod = 20;
    mo_list(mod);
    Shadowbox.init();
    $("#search").keyup(function(){ mo_search(mod); return false; });
    $(".list").on("click", function(){ mo_list(mod); return false; });
    $(document).on("click",".update", function(){ mo_update(mod, $(this)); return false; });

    $(document).on("submit","form#update", function() {
        $("#img_file").val($("#image").val()); 
        tinyMCE.triggerSave();
        if (!required('#name', 'Debe ingresar un nombre.')) return false;
        mo_submit(mod, 5);
        return false;
    });
});
</script>