<?php

    require_once CONTAINER . 'SubgeneroContainer.php';

    Router::GET('/subgeneros', fn() => getSubgeneroController()->getSubgeneros());