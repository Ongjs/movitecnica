<?php
include '../class/Connection.class.php';
include '../class/Fuctions.php';
$id = isset($_POST['id']) ? $_POST['id'] : "";
$do = isset($_POST['do']) ? $_POST['do'] : "";
$parent = isset($_POST['parent']) ? $_POST['parent'] : "";
$current = isset($_POST['current']) ? $_POST['current'] : "";
$filt = isset($_POST['filt']) ? $_POST['filt'] : "";
//$content = mo_get_all_content($id);
//echo sizeof($content);
?>
<div style="margin-bottom: 10px;">
<?php
if($do != "3"){
if($id != "" && (int)$id > 0){   
$atras = mo_get_curret_marc($id);
if((int)$atras[3] == 0){
    ?>
        
    <?php
}else{
    ?>
        
    <?php
}
?>
<?php
}else if((int)$id == 0){
    ?>
    <span style="cursor: pointer; display: a" class="regresar">Regresar</span>
    <?php
}
}else if($do == "3"){   
?>
    <span style="cursor: pointer; display: a" class="regresar">Regresar</span>
<?php
}
?>
    <input type="button" value="►" title="buscar" id="buscar" style=" float: right;"><input type="text" name="buscar_prod" value="" id="prod" size="42" style=" float: right;" placeholder="Introduzca Nombre de Producto a Buscar">
</div>
<br />
<br />

<?php
if($do == "3"){
$array_prod = mo_get_filt_prod($filt);
if(count($array_prod) > 0){ 
    ?>
        <h3>Resultados para <strong><?php echo $filt; ?></strong></h3>
        <br />
<?php
foreach ($array_prod as $val){
    ?>
<div class="prod_des" style="margin-bottom: 10px;">
    <div class="prod_image " style="margin-bottom: 20px; margin-right: 30px;">
        <?php if ($val[3] != "") { ?>
        <a href="../userfiles/<?php echo $val[3]; ?>" class="fancybox"><img src="../userfiles/<?php echo $val[3]; ?>"></a>
        <?php } ?>
    </div>
    <div class="scrollbar1" style="">
        <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport">
            <div class="overview" style="width: 100%">
                <div class="title_share" style="height: 40px">
                    <h3 style="width: 80%; float: left"><?php echo $val[1]; ?></h3>
                    <div class="addthis_toolbox addthis_default_style" style="width: 9%; float: right; height: 30px;">
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_3"></a>
                    </div>
                </div>
                <div style="text-align: left">
                <?php echo $val[4]; ?>
                    </div>
            </div>
        </div>
    </div>
    <div class="ficha_tecnica" style="margin-top: 10px;">
        <?php if ($val[5] != "") { ?><a href="../userfiles/<?php echo $val[5]; ?>" target="_blank"><img src="../images/pdf.png"></a><?php } ?>
    </div>
</div>
<?php
}  
}else{
?>
    <h3>No se encontraron resultados para <strong><?php echo $filt; ?></strong></h3>
<?php
}    
}else if($do == "2"){
$content = mo_get_cats_mar();
foreach ($content as $val){
    ?>
    <div style="width: 240px; float: left; text-align: center; height: 150px">
        <div class='marca' style="cursor : pointer">
            <div class="select_mark">
                <img src="../userfiles/<?php echo $val[2]; ?>">
            </div>
        </div>
        <div style="float:left;width: 100%;"><?php echo $val[1]; ?></div>
    </div>
    <?php
}
}else{
    if(is_numeric($parent)){
        $hidden = mo_get_hidden($current);
        $hidden = explode(",", $hidden);
    }else{
        $hidden = array();
    }
if($id != ""){
    if(is_numeric($parent)){
        $content = mo_get_all_content_mark($id,$current);    
    }else{
        $content = mo_get_all_content($id);
    }
}  else {
    $content = mo_get_all_cat_content();
}
if(is_numeric($parent)){
    $marc = mo_get_curret_marc($current);
    ?>
<div>
    <h4><?php echo $marc[1]; ?></h4>
    <div class='marca' style="margin-left: -7px; float: none">
        <div>
            <img src="../userfiles/<?php echo $marc[2]; ?>">
        </div>
    </div>
</div>
<br /><hr><br />
    <?php
}
if(count($content)>0){
if(sizeof($content)>0){
    ?>
    <div id="vacio" style="margin-top: 10px">
    <?php
}
foreach ($content as $val){
if(!in_array($val[0], $hidden)){
    if((int)($val[2]) == 1){
    ?>
        <div style="float: left; width: 100%; margin-top: 20px; ">
            <h4 ><?php echo $val[1]; ?></h4>
            <div style="margin-top: 7px; margin-bottom: 7px;">
                <div style="width: 35%; float: left;"  data-id="<?php echo $val[0]; ?>"> <img src="../userfiles/<?php echo $val[3]; ?>" style=""></div>
                <div style="" class="sub_cate_content">
                    <?php echo $val[4]; ?>
                </div>
            </div>
        </div>
        <?php
    }else if((int)($val[2]) == 3){
    ?>
        <div class="prod_des" style="margin-bottom: 10px;">
            <div class="prod_image " style="margin-bottom: 20px; margin-right: 30px;">
                <?php if ($val[3] != "") { ?>
                <a href="../userfiles/<?php echo $val[3]; ?>" class="fancybox"><img src="../userfiles/<?php echo $val[3]; ?>"></a>
                <?php } ?>
            </div>
            <div class="scrollbar1" style="">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview" style="width: 100%">
                        <div class="title_share" style="height: 40px">
                            <h3 style="width: 80%; float: left"><?php echo $val[1]; ?></h3>
                            <div class="addthis_toolbox addthis_default_style" style="width: 9%; float: right; height: 30px;">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_3"></a>
                            </div>
                        </div>
                        <div style="text-align: left">
                        <?php echo $val[4]; ?>
                            </div>
                    </div>
                </div>
            </div>
            <div class="ficha_tecnica" style="margin-top: 10px;">
                <?php if ($val[5] != "") { ?><a href="../userfiles/<?php echo $val[5]; ?>" target="_blank"><img src="../images/pdf.png"></a><?php } ?>
            </div>
        </div>
    <?php
    }
}
}
}else{
    ?>
    </div>
    <?php
}
}
?>
    
