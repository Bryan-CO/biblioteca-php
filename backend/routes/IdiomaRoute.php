<?php

    require_once CONTAINER . 'IdiomaContainer.php';

    Router::GET('/idiomas', fn() => getIdiomaController()->getIdiomas());