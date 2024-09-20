<?php
    
    class AutorController
    {
        private static $autorService;
        public function __construct(IAutorService $autorService)
        {
            self::$autorService = $autorService;
        }
        public static function getAutores()
        {
            return self::$autorService->getAutores();
        }

        public static function addAutor($nombre)
        {
            self::$autorService->addAutor($nombre);
        }

        public static function editAutor($id)
        {
            self::$autorService->editAutor($id);
        }

        public static function deleteAutor($id)
        {
            self::$autorService->deleteAutor($id);
        }
}