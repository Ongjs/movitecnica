<?php
$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : 0;
$id = isset($_GET['id']) ? $_GET['id'] : "";
$do = isset($_REQUEST['do']) ? $_REQUEST['do'] : "";
$do = isset($_REQUEST['up']) ? 0 : $do;
$page = isset($_POST['mod']) ? (empty($do) ? "-list" : ($do == 1 ? "-form" : "-action")) : "";
$page = isset($_POST['cat']) ? "-list2" : $page;
$page = isset($_POST['subs']) ? "-sublist" : $page;
switch ($mod) {
    case 0: include "modules/welcome.php"; break;
    case 1: include "modules/upload.php"; break;
    case 2: include "modules/activate.js"; break;
    case 3: include "modules/tinymce.js"; break;
    case 5: include "modules/access.php"; break;
    case 6: include "modules/forgot_password.php"; break;
    case 7: include "modules/logout.php"; break;

    case 10: include "modules/configuration/access$page.php"; break;
//    case 11: include "modules/configuration/appearance$page.php"; break;
//    case 12: include "modules/configuration/company$page.php"; break;
//    case 13: include "modules/configuration/api$page.php"; break;

    case 20: include "modules/webpage/webpage$page.php"; break;

    case 30: include "modules/item/item$page.php"; break;

    case 40: include "modules/product/category$page.php"; break;
    case 41: include "modules/product/marca$page.php"; break;
    case 42: include "modules/product/product$page.php"; break;
    
    default: include "modules/sale.php"; break;
}