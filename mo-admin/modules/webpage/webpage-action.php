<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $thumbnail = mo_scape($_POST["img_file"]);
        $content = mo_scape($_POST['content']);
        $cn->query("UPDATE content SET name = '$name', image = '$thumbnail', content = '$content' WHERE id = '" . $_POST['id'] . "'");
        
        break;
}