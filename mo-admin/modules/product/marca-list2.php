<?php
require_once "../conf.php";
$id = isset($_POST['cat']) ? mo_scape($_POST['cat']) : "0";
$ext = isset($_POST['ext']) ? $_POST['ext'] : "";
$cn->query("SELECT parent_id, name FROM product WHERE type = '2' ORDER BY id asc");
if (!$cn->numrows()) exit;
echo '<select name="opt_cat" class="cat_prod" id="mar_prod">';
echo '<option value="' . $id . '"></option>';
while ($row = $cn->fetch()) {
    $selected = (int)$ext === (int)$row['parent_id'] ? "selected" : "";
    echo '<option value="'. $row['parent_id'] . '" ' . $selected . '>' . $row['name'] . '</option>';
}
echo '</select>';