<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $content = mo_scape($_POST['cont']);
        $cn->query("UPDATE product SET name = '$name', image = '$image', content = '$content' WHERE id = '" . mo_scape($_POST['id']) . "'");
        break;
    case 2:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $content = mo_scape($_POST['cont']);
        $ncat = mo_scape($_POST['ncat']) != "" ? mo_scape($_POST['ncat']) : "0";
        $cn->query("insert into product(id,parent_id,type,name,image,content,status) VALUES ('',$ncat,'1','$name','$image','$content','1')");
        break;
    case 4:
        $cn->query("DELETE from product WHERE id = " . mo_scape($_POST['id']));
        break;
    case 3: 
	$cn->query("UPDATE product SET status = '".($_POST['value'] == 1 ? 0 : 1)."' WHERE id = '" . mo_scape($_POST['id']) . "'");
	break;
}