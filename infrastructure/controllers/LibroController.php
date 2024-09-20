<?php
    
    class LibroController
    {
        private static $libroService;
        public function __construct(ILibroService $libroService)
        {
            self::$libroService = $libroService;
        }
        public static function getLibros()
        {
            return self::$libroService->getLibros();
        }

        public static function getLibroById($id){
            return self::$libroService->getLibroById($id);
        }

        public static function addLibro($nombre)
        {
            self::$libroService->addLibro($nombre);
        }

        public static function editLibro($id)
        {
            self::$libroService->editLibro($id);
        }

        public static function deleteLibro($id)
        {
            self::$libroService->deleteLibro($id);
        }
}