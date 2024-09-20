<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('config/config.php');
    require_once('config/Router.php');
    require_once('infrastructure/db/ClientPostgre.impl.php');
    require_once('infrastructure/repositories/Libro.repository.impl.php');
    require_once('infrastructure/services/Libro.service.impl.php');
    require_once('infrastructure/controllers/LibroController.php');
    



    Router::GET('/libro', function ($req) {
        $db = new ClientPostgreSQL();
        $repo = new LibroRepository($db);
        $service = new LibroService($repo);
        $controller = new LibroController($service);
        
        $autores = $controller->getLibros();
        echo json_encode($autores);
    });

    
    Router::GET('/libro/:id', function ($req) {
        $db = new ClientPostgreSQL();
        $repo = new LibroRepository($db);
        $service = new LibroService($repo);
        $controller = new LibroController($service);
        
        $autores = $controller->getLibroById(1);
        echo json_encode($autores);
    });
    ?>
</body>

</html>