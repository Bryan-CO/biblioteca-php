<?php
    
    class EditorialController
    {
        private static $editorialService;
        public function __construct(IEditorialService $editorialService)
        {
            self::$editorialService = $editorialService;
        }
        public static function getAutores()
        {
            return self::$editorialService->getEditoriales();
        }

        public static function addCategoria($nombre)
        {
            self::$editorialService->addEditorial($nombre);
        }

        public static function editAutor($id)
        {
            self::$editorialService->editEditorial($id);
        }

        public static function deleteAutor($id)
        {
            self::$editorialService->deleteEditorial($id);
        }
}