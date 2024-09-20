<?php
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
    define('REQUEST_URL', $_SERVER['PATH_INFO']);
    define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
    class config{
        public static $DB_USER = "postgres";
        public static $DB_PASS = "rdbHjwMBMBbmMOMatScaLQAtmgLjbTrs";
        public static $DB_HOST = "junction.proxy.rlwy.net";
        public static $DB_PORT = 52259;
        public static $DB_NAME = "sistema_biblioteca";
    }