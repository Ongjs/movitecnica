<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $parent = mo_scape($_POST['opt_cat']);
        $cn->query("UPDATE product SET name = '$name', parent_id = '$parent', image = '$image' WHERE id = '" . mo_scape($_POST['id']) . "'");
        break;
    case 2:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $parent = mo_scape($_POST['opt_cat']);
        $cn->query("insert into product(id,parent_id,type,name,image) VALUES ('',$parent,'2','$name','$image')");
        break;
    case 4:
        $cn->query("DELETE from product WHERE id = " . mo_scape($_POST['id']));
        break;
    case 3: 
	$cn->query("UPDATE product SET status = '".($_POST['value'] == 1 ? 0 : 1)."' WHERE id = '" . mo_scape($_POST['id']) . "'");
	break;
}