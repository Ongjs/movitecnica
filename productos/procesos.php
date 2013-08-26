<?php
include '../class/Connection.class.php';
include '../class/Fuctions.php';
$id = isset($_POST['id']) ? $_POST['id'] : "";
$do = isset($_POST['do']) ? $_POST['do'] : "";
$parent = isset($_POST['parent']) ? $_POST['parent'] : "";
$current = isset($_POST['current']) ? $_POST['current'] : "";
if($do == "2"){
$content = mo_get_cats_mar();
foreach ($content as $val){
    ?>
    <div style="width: 240px; float: left; text-align: center; height: 150px">
        <div class='marca'>
            <div class="list_marc" data-id="<?php echo $val[0]; ?>" data-currentid="<?php echo $val[3]; ?>">
                <img src="../userfiles/<?php echo $val[2]; ?>">
            </div>
        </div>
        <div style=""><?php echo $val[1]; ?></div>
    </div>
    <?php
}
}else{ 
if($id != ""){
$content = mo_get_all_content($id);
}  else {
$content = mo_get_all_cat_content();
}
if(count($content)>0){
if(is_numeric($parent)){
    $marc = mo_get_curret_marc($current);
    ?>
<div>
    <h4><?php echo $marc[1]; ?></h4>
    <div class='marca' style="margin-left: -7px; float: none">
        <div>
            <a href="#"><img src="../userfiles/<?php echo $marc[2]; ?>"></a>
        </div>
    </div>
</div>
<br /><hr><br />
    <?php
} 
foreach ($content as $val){
    if((int)($val[2]) == 1){
    ?>
        <div style="float: left; width: 100%; margin-top: 20px; ">
            <h4 class="<?php echo is_numeric($parent) ? "list_cats_mar" : "list_cats"; ?>"><?php echo $val[1]; ?></h4>
            <div style="margin-top: 7px; margin-bottom: 7px;">
                <div style="width: 35%; float: left;" class="<?php echo is_numeric($parent) ? "list_cats_mar" : "list_cats"; ?>" data-id="<?php echo $val[0]; ?>"> <img src="../userfiles/<?php echo $val[3]; ?>" style=""></div>
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
                    <div class="overview" style="">
                        <div class="title_share">
                            <h3 style="width: 80%; float: left"><?php echo $val[1]; ?></h3>
                            <div class="addthis_toolbox addthis_default_style" style="width: 9%; float: right; height: 30px;">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_3"></a>
                            </div>
                        </div>
                        <?php echo $val[4]; ?>
                    </div>
                </div>
            </div>
            <div class="ficha_tecnica" style="margin-top: 10px;">
                <?php if ($val[5] != "") { ?><a href="../userfiles/<?php echo $val[5]; ?>"><img src="../images/pdf.png"></a><?php } ?>
            </div>
        </div>
    <?php
    }
}
}else{
    ?>
    <h2>No se encontraron productos disponibles</h2>
    <?php
}
}
?>
