<?php
require_once DB . 'ClientPostgre.impl.php';
require_once REPOSITORY . 'Subgenero.repo.impl.php';
require_once SERVICE . 'Subgenero.service.impl.php';
require_once CONTROLLER . 'SubgeneroController.php';

function getSubgeneroController() : SubgeneroController
{
    $db = new ClientPostgreSQL();
    $repo = new SubgeneroRepository($db);
    $service = new SubgeneroService($repo);
    $controller = new SubgeneroController($service);
    return $controller;
}