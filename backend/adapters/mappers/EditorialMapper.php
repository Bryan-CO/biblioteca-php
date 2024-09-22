<?php
    function pgToEditoriales($editoriales){
        $editorialesMapped = [];
        foreach($editoriales as $edi){
            $editorial = new Editorial(
                $edi["ideditorial"],
                $edi["nombre"]
            );
            array_push($editorialesMapped, $editorial);
        }
        
        return $editorialesMapped;
    }