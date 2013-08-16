<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $desc = mo_scape($_POST['desc']);
        $content = mo_scape($_POST['content']);
//        if($_POST['id'] != "1" && $_POST['id'] != "31"){
//            $content = $content;
//        }
        $cn->query("UPDATE content SET name = '$name', image = '$image', description = '$desc, content = '$content' WHERE id = '" . $cn->scape($_POST['id']) . "'");
        break;
}