<?php

    require_once CONTAINER . 'CategoriaContainer.php';

    Router::GET('/categorias', fn() => getCategoriaController()->getCategorias());