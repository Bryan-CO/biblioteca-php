<?php
    
    class IdiomaController
    {
        private static $idiomaService;
        public function __construct(IIdiomaService $idiomaService)
        {
            self::$idiomaService = $idiomaService;
        }
        public static function getIdiomas()
        {
            return self::$idiomaService->getIdiomas();
        }

        public static function addIdioma($nombre)
        {
            self::$idiomaService->addIdioma($nombre);
        }

        public static function editIdioma($id)
        {
            self::$idiomaService->editIdioma($id);
        }

        public static function deleteIdioma($id)
        {
            self::$idiomaService->deleteIdioma($id);
        }
}