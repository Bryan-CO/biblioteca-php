<?php
require_once DB . 'ClientPostgre.impl.php';
require_once REPOSITORY . 'Editorial.repo.impl.php';
require_once SERVICE . 'Editorial.service.impl.php';
require_once CONTROLLER . 'EditorialController.php';

function getEditorialController() : EditorialController
{
    $db = new ClientPostgreSQL();
    $repo = new EditorialRepository($db);
    $service = new EditorialService($repo);
    $controller = new EditorialController($service);
    return $controller;
}