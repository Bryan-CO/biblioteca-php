<?php
require_once DB . 'ClientPostgre.impl.php';
require_once REPOSITORY . 'Idioma.repo.impl.php';
require_once SERVICE . 'Idioma.service.impl.php';
require_once CONTROLLER . 'IdiomaController.php';

function getIdiomaController() : IdiomaController
{
    $db = new ClientPostgreSQL();
    $repo = new IdiomaRepository($db);
    $service = new IdiomaService($repo);
    $controller = new IdiomaController($service);
    return $controller;
}