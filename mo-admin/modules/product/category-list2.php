<?php
require_once "../conf.php";
$id = isset($_POST['cat']) ? mo_scape($_POST['cat']) : "0";
$ext = isset($_POST['ext']) ? $_POST['ext'] : "";
$cn->query("SELECT id, name FROM product WHERE parent_id = '$id' AND type = '1' ORDER BY id asc");
?>
<select name="opt_cat" class="cat_prod">
    <?php
    if($id == "0"){
    ?>
    <option value=""></option>
    <?php
    }
    ?>
    <?php while ($row = $cn->fetch()) { 
            $index = "";
        if((int)$ext == (int)$row['id']){ 
            $index = "selected";
        }?>
        <option <?php echo $index; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php } ?>
</select>