<?php
require_once BASE_PATH . 'infrastructure/db/ClientPostgre.impl.php';
require_once BASE_PATH . 'infrastructure/repositories/Autor.repo.impl.php';
require_once BASE_PATH . 'infrastructure/services/Autor.service.impl.php';
require_once BASE_PATH . 'infrastructure/controllers/AutorController.php';

function getAutorController() : AutorController
{
    $db = new ClientPostgreSQL();
    $repo = new AutorRepository($db);
    $service = new AutorService($repo);
    $controller = new AutorController($service);
    return $controller;
}