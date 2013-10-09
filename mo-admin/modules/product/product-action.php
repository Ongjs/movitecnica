<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $file = mo_scape($_POST["pdf_guid"]);
        $content = mo_scape($_POST['cont']);
        $prd_mark = mo_scape($_POST['prd_mark']);
        $cn->query("UPDATE product SET name = '$name', image = '$image', content = '$content', prod_mark = '$prd_mark', file = '$file' WHERE id = '" . mo_scape($_POST['id']) . "'");
        break;
    case 2:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $content = mo_scape($_POST['cont']);
        $prd_mark = mo_scape($_POST['prd_mark']);
        $file = mo_scape($_POST["pdf_guid"]);
        $ncat = mo_scape($_POST['ncat']) != "" ? mo_scape($_POST['ncat']) : "0";
        $cn->query("insert into product(id,parent_id,type,name,image,content,file,status,prod_mark) VALUES ('',$ncat,'3','$name','$image','$content','$file','1','$prd_mark')");
        break;
    case 4:
        $cn->query("DELETE from product WHERE id = " . mo_scape($_POST['id']));
        break;
    case 3: 
	$cn->query("UPDATE product SET status = '".($_POST['value'] == 1 ? 0 : 1)."' WHERE id = '" . mo_scape($_POST['id']) . "'");
	break;
}