<?php
require_once "../conf.php";
$id = isset($_POST['cat']) ? mo_scape($_POST['cat']) : "0";
$cn->query("SELECT id, name FROM product WHERE parent_id = '$id' AND type = '1' ORDER BY id asc");
?>
<select name="opt_cat" class="cat_prod">
    <?php while ($row = $cn->fetch()) { ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php } ?>
</select>