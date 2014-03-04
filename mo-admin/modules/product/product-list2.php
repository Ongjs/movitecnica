<?php
require_once "../conf.php";
$id = isset($_POST['cat']) ? mo_scape($_POST['cat']) : "0";
$ext = isset($_POST['ext']) ? $_POST['ext'] : "";
$cn->query("SELECT id, name FROM product WHERE parent_id = '$id' AND type = '1' ORDER BY id asc");
if (!$cn->numrows()) exit;
echo '<select name="opt_cat" class="cat_prod">';
echo '<option value="' . $id . '"></option>';
while ($row = $cn->fetch()) {
    $selected = (int)$ext === (int)$row['id'] ? "selected" : "";
    echo '<option value="'. $row['id'] . '" ' . $selected . '>' . $row['name'] . '</option>';
}
echo '</select>';