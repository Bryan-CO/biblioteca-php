<?php
    
    class CategoriaController
    {
        private static $categoriaService;
        public function __construct(ICategoriaService $categoriaService)
        {
            self::$categoriaService = $categoriaService;
        }
        public static function getAutores()
        {
            return self::$categoriaService->getCategorias();
        }

        public static function addCategoria($nombre)
        {
            self::$categoriaService->addCategoria($nombre);
        }

        public static function editAutor($id)
        {
            self::$categoriaService->editCategoria($id);
        }

        public static function deleteAutor($id)
        {
            self::$categoriaService->deleteCategoria($id);
        }
}