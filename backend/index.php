<?php
require_once 'config/config.php';
require_once 'config/Router.php';
require_once 'shared/ResponseModel.php';

// CORS
header("Access-Control-Allow-Origin: *");

// Métodos HTTP permitidos
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// Encabezados permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization");


// RUTAS
require_once 'routes/LibroRoute.php';
require_once 'routes/AutorRoute.php';