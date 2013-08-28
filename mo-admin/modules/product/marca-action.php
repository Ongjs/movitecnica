<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $parent = mo_scape($_POST['opt_cat']);
        $hidden = mo_scape($_POST['cat_subs_status']);
        $cn->query("UPDATE product SET name = '$name', parent_id = '$parent', image = '$image', hidden = '$hidden' WHERE id = '" . mo_scape($_POST['id']) . "'");
        break;
    case 2:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $parent = mo_scape($_POST['opt_cat']);
        $hidden = mo_scape($_POST['cat_subs_status']);
        $cn->query("insert into product(id,parent_id,type,name,image,status,hidden) VALUES ('',$parent,'2','$name','$image','1','$hidden')");
        break;
    case 4:
        $cn->query("DELETE from product WHERE id = " . mo_scape($_POST['id']));
        break;
    case 3: 
	$cn->query("UPDATE product SET status = '".($_POST['value'] == 1 ? 0 : 1)."' WHERE id = '" . mo_scape($_POST['id']) . "'");
	break;
}