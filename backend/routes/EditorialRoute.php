<?php

    require_once CONTAINER . 'EditorialContainer.php';

    Router::GET('/editoriales', fn() => getEditorialController()->getEditoriales());