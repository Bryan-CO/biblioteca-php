<?php
$folderLength = strlen(dirname($_SERVER['SCRIPT_NAME']));
$requestUrl = $folderLength > 1 ? substr($_SERVER['REQUEST_URI'], $folderLength) : $_SERVER['REQUEST_URI'];

define('BASE_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
define('REQUEST_URL', $requestUrl);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

$relative = str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]);
$folder = explode("/", trim($relative, "/"))[0];
$url = $_SERVER["DOCUMENT_ROOT"];
$folder = $url . "/" . $folder;

if (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
    define('BASE_URL', $folder . '/');
} elseif (strpos($_SERVER['SERVER_SOFTWARE'], '(Development Server)') !== false) {
    // PHP/8.3.11
    define('BASE_URL', $url . '/');
} else {
    define('BASE_URL', $url  . '/');
}

class config
{
    public static $DB_USER = "postgres";
    public static $DB_PASS = "rdbHjwMBMBbmMOMatScaLQAtmgLjbTrs";
    public static $DB_HOST = "junction.proxy.rlwy.net";
    public static $DB_PORT = 52259;
    public static $DB_NAME = "sistema_biblioteca";
}