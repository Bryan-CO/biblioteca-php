<?php
require_once DB . 'ClientPostgre.impl.php';
require_once REPOSITORY . 'Libro.repository.impl.php';
require_once SERVICE . 'Libro.service.impl.php';
require_once CONTROLLER . 'LibroController.php';

function getController() : LibroController
{
    $db = new ClientPostgreSQL();
    $repo = new LibroRepository($db);
    $service = new LibroService($repo);
    $controller = new LibroController($service);
    return $controller;
}