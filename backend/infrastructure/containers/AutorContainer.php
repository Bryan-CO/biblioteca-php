<?php
require_once DB . 'ClientPostgre.impl.php';
require_once REPOSITORY . 'Autor.repo.impl.php';
require_once SERVICE . 'Autor.service.impl.php';
require_once CONTROLLER . 'AutorController.php';

function getAutorController() : AutorController
{
    $db = new ClientPostgreSQL();
    $repo = new AutorRepository($db);
    $service = new AutorService($repo);
    $controller = new AutorController($service);
    return $controller;
}