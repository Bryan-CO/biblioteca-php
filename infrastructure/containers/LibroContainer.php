<?php
require_once BASE_PATH . 'infrastructure/db/ClientPostgre.impl.php';
require_once BASE_PATH . 'infrastructure/repositories/Libro.repository.impl.php';
require_once BASE_PATH . 'infrastructure/services/Libro.service.impl.php';
require_once BASE_PATH . 'infrastructure/controllers/LibroController.php';

function getController() : LibroController
{
    $db = new ClientPostgreSQL();
    $repo = new LibroRepository($db);
    $service = new LibroService($repo);
    $controller = new LibroController($service);
    return $controller;
}