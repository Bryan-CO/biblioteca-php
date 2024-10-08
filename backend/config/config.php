<?php
$folderLength = strlen(dirname($_SERVER['SCRIPT_NAME']));
$requestUrl = $folderLength > 1 ? substr($_SERVER['REQUEST_URI'], $folderLength) : $_SERVER['REQUEST_URI'];

define('BASE_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
define('REQUEST_URL', $requestUrl);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
// Routes directories
define('ENTITIES', BASE_PATH . "domain/entities/");
define('I_REPOSITORY', BASE_PATH . "domain/repositories/");
define('I_SERVICE', BASE_PATH . "domain/services/");
define('CONTROLLER', BASE_PATH . "infrastructure/controllers/");
define('REPOSITORY', BASE_PATH . "infrastructure/repositories/");
define('SERVICE', BASE_PATH . "infrastructure/services/");
define('DB', BASE_PATH . "infrastructure/db/");
define('CONTAINER', BASE_PATH . "infrastructure/containers/");
define('MAPPER', BASE_PATH . "adapters/mappers/");
define('CONFIG', BASE_PATH . "config/");
define('ROUTE', BASE_PATH . "routes/");
define('SHARED', BASE_PATH . "shared/");

class config
{
    public static $DB_USER = "postgres";
    public static $DB_PASS = "rdbHjwMBMBbmMOMatScaLQAtmgLjbTrs";
    public static $DB_HOST = "junction.proxy.rlwy.net";
    public static $DB_PORT = 52259;
    public static $DB_NAME = "sistema_biblioteca";
}
