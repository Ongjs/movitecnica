<?php
$masoji_dir = rtrim(realpath(dirname(__FILE__)), DIRECTORY_SEPARATOR);
if ($manager = opendir("$masoji_dir/class/")) {
    while (($file = readdir($manager)) !== false) {
        if ($file != "." and $file != "..") {
            $file_parts = explode(".", $file);
            if (strtolower(end($file_parts)) == "php")
                require_once "$masoji_dir/class/$file";
        }
    }
    closedir($manager);
}
$cn = Connection::getInstance();
?>