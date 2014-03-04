<?php

function tbl_blog($do = "theme-list", $param = "") {
    $cn = Connection::getInstance();
    if ($do == "theme-detail") {
        $cn->query("SELECT name, file, detail, content, date FROM blog WHERE id = '$param' and status = '1'");
        return $cn->fetch();
    } elseif ($do == "theme-featured") {
        $cn->query("SELECT id, name, file, detail FROM blog WHERE status = '1' ORDER BY id DESC LIMIT 1");
        return $cn->fetch();
    } elseif ($do == "theme-list") {
        $result = array();
        $pagination = array("start" => 1, "display" => 10);
        if ($param != "")
            $pagination = array_merge($pagination, $param);
        $cn->query("SELECT id, name, file, thumbnail, detail, date FROM blog WHERE status = '1' ORDER BY id DESC LIMIT " . $pagination['start'] . ", " . $pagination['display']);
        while ($row = $cn->fetch())
            $result[] = $row;
        return $result;
    }
}

function tbl_comment($blog) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT nickname, content, date FROM comment WHERE blog_id = '$blog' and status = '1' ORDER BY id");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_cut($text, $length = 100) {
    return strlen($text) > $length ? substr(strip_tags($text), 0, $length) . "..." : strip_tags($text);
}

function mo_cutFilename($text, $length = 40) {
    return strlen($text) > $length ? substr(strip_tags($text), 0, round(strlen($text) / 2)) . " ..... ." . end(explode(".", $text)) : strip_tags($text);
}

function mo_strstr2($text, $search) {
    return substr($text, 0, strpos($text, $search));
}

function mo_parseFile($file, $download = false) {
    $file = substr(strstr($file, "_"), 1);
    return $download ? friendly($file) : str_replace("_", " ", $file);
}

function mo_parseTime($time) {
    if ($time == 0)
        return "N/A";
    return date("d F Y h:i A", $time);
}

function mo_parseDate($date) {
    if ($date == "0000-00-00 00:00:00")
        return "N/A";
    list($date, $time) = explode(" ", $date);
    list($year, $month, $day) = explode("-", $date);
    list($hour, $minute, $second) = explode(":", $time);
    return "$month/$day/$year " . str_pad(($hour > 12 ? $hour - 12 : $hour), 2, 0, STR_PAD_LEFT) . ":$minute " . ($hour > 12 ? "PM" : "AM");
}

function mo_formatSize($size) {
    $sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
    return $size == 0 ? "n/a" : (round($size / pow(1024, ($i = floor(log($size, 1024)))), $i > 1 ? 2 : 0) . $sizes[$i]);
}

function mo_friendly($url) {
    $url = htmlentities($url, ENT_IGNORE, "UTF-8");
    $url = html_entity_decode($url);
    $url = strtolower($url);
    $search = array('á', 'à', 'â', 'ã', 'é', 'è', 'ê', 'í', 'ì', 'î', 'ò', 'ó', 'ô', 'õ', 'ú', 'ù', 'û', 'ç', 'ñ');
    $replace = array('a', 'a', 'a', 'a', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'c', 'n');
    $url = str_replace($search, $replace, $url);
    $url = strtolower($url);
    $url = str_replace(array(' ', '&', '\r', '\n', '+', '_'), '-', $url);
    return preg_replace(array('/[^a-z0-9\-\.]/', '/[\-]+/'), array('', '-'), $url);
}

function mo_domain($email) {
    return substr($email, strpos($email, "@") + 1, strlen($email));
}

function mo_scape($text) {
    if (!get_magic_quotes_gpc())
        $text = addslashes($text);
    return trim($text);
}

function mo_unscape($text) {
    return htmlspecialchars($text);
}

$states = array("AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" => "California", "CO" => "Colorado", "CT" => "Connecticut", "DE" => "Delaware", "DC" => "District of Columbia", "FL" => "Florida", "GA" => "Georgia", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana", "IA" => "Iowa", "KS" => "Kansas", "KY" => "Kentucky", "LA" => "Louisiana", "ME" => "Maine", "MD" => "Maryland", "MA" => "Massachusetts", "MI" => "Michigan", "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire", "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota", "OH" => "Ohio", "OK" => "Oklahoma", "OR" => "Oregon", "PA" => "Pennsylvania", "RI" => "Rhode Island", "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX" => "Texas", "UT" => "Utah", "VT" => "Vermont", "VA" => "Virginia", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin", "WY" => "Wyoming");

// MOVITECNICA!
function mo_get_data($get, $id) {
    $cn = Connection::getInstance();
    $result = "";
    switch ($get) {
        case 1 :
            $get = 'name';
            break;
        case 2 :
            $get = 'image';
            break;
        case 3 :
            $get = 'content';
            break;
        case 4 :
            $get = 'description';
            break;
        case 5 :
            $get = 'thumbnail';
            break;
    }
    $cn->query("SELECT $get FROM content WHERE id = $id");
    while ($row = $cn->fetch())
        $result = $row;
    return $result[0];
}

function mo_get_url($id) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT name,description FROM content WHERE category_id = $id and status = 1 ");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_data_select($id) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT name,image,content,extra1 FROM image WHERE id = $id and status = 1  order by (updated) desc");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result[0];
}

function mo_get_ar($cod, $pag) {
    $cn = Connection::getInstance();
    $ini = (($pag - 1) * 2);
    $result = array();
    $cn->query("SELECT id,name,thumbnail,image,description,content,extra1,updated FROM image WHERE category_id in($cod) and status = 1  order by (updated) desc limit $ini,6 ");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_galeria() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT image,name,description,extra1 FROM image WHERE category_id in(7) and status = 1  order by (updated) desc");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_pag($cod, $pag) {
    $cn = Connection::getInstance();
    $rang = 0;
    $result = array();
    $cn->query("SELECT id FROM image WHERE category_id in($cod) and status = 1 ");
    $total = $cn->numrows();
    $total = ceil($total / 6);
    if (($pag + 2) > $total) {
        $result[0] = $total;
        $result[1] = 0;
        return $result;
    } else {
        $result[0] = $pag + 2;
        $result[1] = 1;
        return $result;
    }
}

function mo_get_tra() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,thumbnail FROM image WHERE category_id = 1 and status = 1 ");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_category($id) {
    $cn = Connection::getInstance();
    $cn->query("SELECT category_id FROM image WHERE id = $id and status = 1 ");
    while ($row = $cn->fetch())
        $result = $row;
    return $result[0];
}

function mo_get_desc() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,description,updated FROM `image` where category_id = 5 and status = 1  order by (updated) desc limit 0,2");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_proy($catid) {
    $limit = 0;
    switch ($catid) {
        case 2 :
            $limit = 3;
            break;
        case 5 :
            $limit = 2;
            break;
        case 4 :
            $limit = 1;
            break;
    }
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name,description,thumbnail FROM `image`  where category_id = $catid and status = 1  order by (updated) desc limit 0,$limit");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_cats_parents() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name FROM `product` where parent_id = '0' and type = '1' and status = '1' ");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_cats_mar() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT parent_id,name,image,id,hidden FROM `product` where  type = '2' and status = 1 ");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_sub_cat() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT parent_id FROM `product` where  type = '1'    and status = 1");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_cat_content($id) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name,parent_id,type FROM `product` where type = '1' and status = 1 and parent_id = '$id'");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_all_content($id) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name,type,image,content,file FROM `product` where  status = 1 and parent_id = '$id' and type = '3' order by (type) asc");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_all_content_mark($id, $mark) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name,type,image,content,file FROM `product` where  status = 1 and parent_id = '$id' and type = '3' and prod_mark = '$mark'  order by (type) asc");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_all_cat_content() {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name,type,image,content,file FROM `product` where  status = 1 and type = '1' and parent_id = '0' order by (type) asc");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_curret_marc($id) {
    $cn = Connection::getInstance();
    $result = "";
    $cn->query("SELECT id,name,image,parent_id  FROM `product` where status = 1 and id = '$id'");
    while ($row = $cn->fetch())
        $result = $row;
    return $result;
}

function mo_get_filt_prod($text) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name,type,image,content,file FROM `product` where  status = 1 and type = '3' and name like '%$text%' order by (name) asc");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

function mo_get_hidden($id) {
    $cn = Connection::getInstance();
    $cn->query("SELECT hidden FROM `product` where  id = '$id'");
    while ($row = $cn->fetch())
        $result = $row;
    return $result[0];
}

function mo_get_parent($id) {
    $cn = Connection::getInstance();
    $cn->query("SELECT parent_id FROM `product` where  id = '$id'");
    while ($row = $cn->fetch())
        $result = $row;
    return $result[0];
}

function mo_get_marc_parent($id) {
    $cn = Connection::getInstance();
    $result = array();
    $cn->query("SELECT id,name FROM `product` where type = '2' and parent_id = '$id'");
    while ($row = $cn->fetch())
        $result[] = $row;
    return $result;
}

?>