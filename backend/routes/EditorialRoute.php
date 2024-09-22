<?php
    require_once CONTAINER . 'EditorialContainer.php';

    Router::GET('/editoriales', fn() => getEditorialController()->getEditoriales());
    Router::POST('/editoriales', fn(Request $req) => getEditorialController()->addEditorial($req));