<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $thumb = isset($_POST["imagem_guid"]) ? ", thumbnail = '".mo_scape($_POST["imagem_guid"])."'" : "";
        $desc = mo_scape($_POST['desc']);
        $content = mo_scape($_POST['content']);
        $cn->query("UPDATE content SET name = '$name', image = '$image', description = '$desc', content = '$content' $thumb WHERE id = '" . $cn->scape($_POST['id']) . "'");
        break;
}