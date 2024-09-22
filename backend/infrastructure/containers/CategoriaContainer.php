<?php
require_once DB . 'ClientPostgre.impl.php';
require_once REPOSITORY . 'Categoria.repo.impl.php';
require_once SERVICE . 'Categoria.service.impl.php';
require_once CONTROLLER . 'CategoriaController.php';

function getCategoriaController() : CategoriaController
{
    $db = new ClientPostgreSQL();
    $repo = new CategoriaRepository($db);
    $service = new CategoriaService($repo);
    $controller = new CategoriaController($service);
    return $controller;
}