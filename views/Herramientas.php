<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once '../config/config.php';
    require_once BASE_PATH . 'infrastructure/db/ClientPostgre.impl.php';
    require_once BASE_PATH . 'infrastructure/repositories/Autor.repo.impl.php';
    require_once BASE_PATH . 'infrastructure/services/Autor.service.impl.php';
    require_once BASE_PATH . 'infrastructure/controllers/AutorController.php';

    $db = new ClientPostgreSQL();
    $repo = new AutorRepository($db);
    $service = new AutorService($repo);
    $autorController = new AutorController($service);
    
        // require_once "infrastructure/controllers/AutorController.php";
    print_r($autorController::getAutores());
        // var_dump($_SERVER);
    ?>
</body>
</html>