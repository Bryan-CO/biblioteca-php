<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('domain/entities/Categoria.entity.php');
        require_once('config/config.php');
        require_once('config/Router.php');
        
        
        Router::GET('/xd', function(Request $req){
            $autor = new Categoria(1, 'Fantasía');
            $autor2 = new Categoria(2, 'Terror');
            $autores = [$autor, $autor2];
            print_r($req->params);
        });
        Router::POST('/xd', function(Request $req){
            $autor = new Categoria(1, 'Fantasía');
            $autor2 = new Categoria(2, 'Terror');
            $autores = [$autor, $autor2];
            print_r($req->body);
        });
    ?>
</body>
</html>