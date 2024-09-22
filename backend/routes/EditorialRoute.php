<?php

    require_once CONTAINER . 'EditorialContainer.php';

    Router::GET('/editoriales', function(Request $req){
        $editoriales = getEditorialController()->getEditoriales();
        ResponseModel::success($editoriales);
    });