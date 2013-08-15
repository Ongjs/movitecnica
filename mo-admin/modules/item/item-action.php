<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $extra1 = mo_scape($_POST['extra1']);
        $thumbnail = mo_scape($_POST["imagec_guid"]);
        $image = mo_scape($_POST["imageg_guid"]);
        $desc = mo_scape($_POST['desc']);
        $content = mo_scape($_POST['content']);
        $cn->query("UPDATE image SET name = '$name', extra1 = '$extra1', thumbnail = '$thumbnail', image = '$image', description = '$desc', content = '$content' WHERE id = '" . $_POST['id'] . "'");
        break;
    case 2:
        $select = mo_scape($_POST['select']);
        $name = mo_scape($_POST['name']);
        $extra1 = mo_scape($_POST['extra1']);
        $thumbnail = mo_scape($_POST["imagec_guid"]);
        $image = mo_scape($_POST["imageg_guid"]);
        $desc = mo_scape($_POST['desc']);
        $content = mo_scape($_POST['content']);
        $cn->query("insert into image(id,category_id,name,thumbnail,image,description,content,extra1) VALUES ('',$select,'$name','$thumbnail','$image','$desc','$content','$extra1')");
        break;
    case 4:
        $cn->query("DELETE from image WHERE id = " . $_POST['id']);
        break;
}