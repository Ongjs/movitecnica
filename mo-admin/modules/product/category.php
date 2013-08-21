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
        <table id="category">
            <tr>
                <td><label for="search">Introduzca el termino a buscar</label></td>
                <td><input type="text" name="search" id="search" /></td>
            </tr>
            <tr>
                <td><label for="search">Seleccione categoria a filtrar</label></td>
                <td>
                    <select name="opt_cat" id="opt_cat" class="cat_prod">
                        <option value=""></option>
                        <?php while ($row = $cn->fetch()) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
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
        mo_list_cat(mod);
        Shadowbox.init();
        var ncat = "",$select;
        
        $(document).on("change",".cat_prod", function(e){ mo_list_cat(mod,e.currentTarget.value); return false; });
        $(document).on("change",".cat_prod", function(e){
            $select = $(e.currentTarget);
            ncat = $select.val();
            console.log(ncat);
            var target = $(e.currentTarget).parent().parent();
            if($.isNumeric(parseInt(ncat))){
                mo_addcat(mod,e.currentTarget.value);
            }
            while(target.next().get(0).localName == "tr"){
                target.next().remove();
            }
            return false; 
        });
        $("#search").keyup(function(){ mo_search(mod); return false; });
        $(".list").on("click", function(){ mo_list(mod); return false; });
        //aqui queria ver si puedo obligar a una vez terminado el ajax reseleccionar esa option de tal forma q se vuelva a listar ya q hay un error de q no se actualiza
        $(document).on("click",".update", function(){ mo_update(mod, $(this)); $($select + ' option[value="' + ncat + '"]'); return false; });
        $(document).on("click",".delete", function(){ mo_delete(mod, $(this)); return false; });
        $(document).on("click",".status", function(){ mo_status(mod, $(this)); return false; });
        $(".new").on("click", function(){ mo_new(mod, ncat); return false; });

        $(document).on("submit","form#update", function() {
            $("#img_file").val($("#image").val()); 
            tinyMCE.triggerSave();
            if (!required('#name', 'You must enter a Name')) return false;
            mo_submit_cat(mod, 5);
            return false;
        });
        $(document).on("submit","form#save", function(){
            tinyMCE.triggerSave();
            if(!required('#name', 'You must enter a Name')) return false;
            mo_submit_cat(mod, 2, ncat);
            return false;
        });
    });
</script>