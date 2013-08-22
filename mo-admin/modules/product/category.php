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
        </table>
    </fieldset>
    <div id="list"></div>
    <div id="form"></div>
</div>
<script src="../lib/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var mod = 40;
        mo_add_parent_cat(mod,0);
        mo_list_cat(mod);
        Shadowbox.init();
        var $array = new Array();
        var ncat = "0",$select,$arraylen;
        $array.push(ncat);
        $(document).on("change",".cat_prod", function(e){ mo_list_cat(mod,e.currentTarget.value); return false; });
        $(document).on("change",".cat_prod", function(e){
            $select = $(e.currentTarget);
            ncat = $select.val();
            var target = $(e.currentTarget).parent().parent();
            if($.isNumeric(parseInt(ncat))){
                mo_addcat(mod,e.currentTarget.value);
            }
            $arraylen = $array.length;
            var cont = 0;  
            while(target.next().is("tr")){
                cont++;
                target.next().remove();
            }
            $array.splice($arraylen - cont,cont);
            if(ncat != ""){
            $array.push(ncat);
            }
            return false; 
        });
        $(document).on("keyup","#search",function(){ mo_search(mod); return false; });
        $(document).on("click",".list", function(){ mo_list(mod); return false; });
        $(document).on("click",".update", function(){ mo_update(mod, $(this));  return false; });
        $(document).on("click",".delete", function(){ mo_delete(mod, $(this)); return false; });
        $(document).on("click",".status", function(){ mo_status(mod, $(this)); 
            
            return false; });
        $(".new").on("click", function(){ mo_new(mod, ncat); return false; });

        $(document).on("submit","form#update", function() {
            $("#img_file").val($("#image").val()); 
            tinyMCE.triggerSave();
            if (!required('#name', 'You must enter a Name')) return false;
            mo_submit_cat(mod, 5, ncat, $array);
            return false;
        });
        $(document).on("submit","form#save", function(){
            tinyMCE.triggerSave();
            if(!required('#name', 'You must enter a Name')) return false;
            mo_submit_cat(mod, 2, ncat, $array);
            return false;
        });
    });
</script>