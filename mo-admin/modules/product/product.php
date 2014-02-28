<?php
$cn->query("SELECT id, name FROM product WHERE parent_id = '0' AND type = '1' ORDER BY id asc");
?>
<a href="#" class="cancel list">Cancelar</a>
<a href="#" class="new list">Nuevo</a>
<h1>Categorías</h1>
<a href="./">Inicio </a> - <a href="./?mod=40">Categorías</a><br /><br /><br />
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
        var mod = 42;
        mo_addcat(mod, "", "");
        mo_list(mod);
        $select = "";
        Shadowbox.init();
        var category_value = "", category_text, $array = new Array(), $select, $arraylen, cont, target;
        $array.push(category_value);
        $(document).on("change",".cat_prod", function() {
            $select = $(this);
            category_value = $select.val();
            mo_list(mod, category_value);
            category_text = $select.find("option:selected").text();
            if (category_value !== "") {
                mo_addcat(mod, category_value, category_text);
            }
            $arraylen = $array.length;
            cont = 0;
            target = $select.parent().parent();
            if ($select.val() !== "" && category_text === "") {
                target = target.prev();
            }
            while (target.next().is("tr")) {
                cont++;
                target.next().remove();
            }
            $array.splice($arraylen - cont,cont);
            if(category_value !== ""){
                $array.push(category_value);
            }
            return false; 
        });
        $(document).on("keyup","#search",function(){ mo_search(mod); return false; });
        $(document).on("click",".list", function(){ mo_list(mod,category_value); return false; });
        $(document).on("click",".update", function(){
            if($select === ""){
//                alert("Seleccione una sub categoria");
            }else if($select.val() === ""){
//                alert("Seleccione una sub categoria");
            }else{
                mo_update(mod, $(this), $select.val()); 
            }
            return false; });
        $(document).on("click",".delete", function(){ mo_delete(mod, $(this)); return false; });
        $(document).on("click",".status", function(){ mo_status(mod, $(this)); return false; });
        $(".new").on("click", function(){ 
            if($select === ""){
                alert("No es posible crear un producto en la categoria actual");
            }else if($select.val() === ""){
                alert("No es posible crear un producto en la categoria actual");
            }else{
                mo_new(mod, category_value, $select.val());
            } 
            return false; });

        $(document).on("submit","form#update", function() {
            $("#img_file").val($("#image").val()); 
            tinyMCE.triggerSave();
            if (!required('#name', 'Debe ingresar un nombre.')) return false;
            mo_submit_cat(mod, 5, category_value, $array);
            return false;
        });
        $(document).on("submit","form#save", function(){
            tinyMCE.triggerSave();
            if(!required('#name', 'Debe ingresar un nombre.')) return false;
            mo_submit_cat(mod, 2, category_value, $array);
            return false;
        });
    });
</script>