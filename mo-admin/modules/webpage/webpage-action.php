<?php
require_once "../conf.php";
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $file = mo_scape($_POST['file_guid']);
        $thumbnail = mo_scape($_POST['thumbnail_guid']);
        $detail = mo_scape($_POST['detail']);
        $content = mo_scape($_POST['content']);
        $cn->query("UPDATE content SET name = '$name', file = '$file', thumbnail = '$thumbnail', detail = '$detail', content = '$content' WHERE id = '" . $_POST['id'] . "'");
        break;
}