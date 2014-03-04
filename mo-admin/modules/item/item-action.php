<?php
require_once '../conf.php';
require_once '../class/MO_Image.class.php';
$image_path = '../userfiles/';
switch ($do) {
    case 5:
        $name = mo_scape($_POST['name']);
        $extra1 = mo_scape($_POST['extra1']);
        $thumbnail = mo_scape($_POST["imagec_guid"]);
        if ($thumbnail != "") {
            $MO_Image = new MO_Image($image_path . $thumbnail);
            $MO_Image->thumbnail(100, 100, true, false);
            $MO_Image->save();
        }
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
        if ($thumbnail != "") {
            $MO_Image = new MO_Image($image_path . $thumbnail);
            $MO_Image->thumbnail(100, 100, true, false);
            $MO_Image->save();
        }
        $image = mo_scape($_POST["imageg_guid"]);
        $desc = mo_scape($_POST['desc']);
        $content = mo_scape($_POST['content']);
        $cn->query("insert into image(id,category_id,name,thumbnail,image,description,content,extra1,status) VALUES ('',$select,'$name','$thumbnail','$image','$desc','$content','$extra1','1')");
        break;
    case 4:
        $cn->query("DELETE from image WHERE id = " . $_POST['id']);
        break;
    case 3: 
	$cn->query("UPDATE image SET status = '".($_POST['value'] == 1 ? 0 : 1)."' WHERE id = '".$_POST['id']."'");
	break;
}
