<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $image = mo_scape($_POST["image_guid"]);
        $content = mo_scape($_POST['content']);
        $cn->query("UPDATE content SET name = '$name', image = '$image', content = '$content' WHERE id = '" . $cn->scape($_POST['id']) . "'");
        break;
}