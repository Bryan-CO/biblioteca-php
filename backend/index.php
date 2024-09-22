<?php
require_once 'config/config.php';
require_once CONFIG . 'Router.php';
require_once SHARED . 'ResponseModel.php';

// CORS
header("Access-Control-Allow-Origin: *");

// Métodos HTTP permitidos
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// Encabezados permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization");


// RUTAS
require_once ROUTE . 'LibroRoute.php';
require_once ROUTE . 'AutorRoute.php';