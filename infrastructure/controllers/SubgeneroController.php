<?php
    
    class SubgeneroController
    {
        private static $subgeneroService;
        public function __construct(ISubgeneroService $subgeneroService)
        {
            self::$subgeneroService = $subgeneroService;
        }
        public static function getSubgeneros()
        {
            return self::$subgeneroService->getSubgeneros();
        }

        public static function addSubgenero($nombre)
        {
            self::$subgeneroService->addSubgenero($nombre);
        }

        public static function editSubgenero($id)
        {
            self::$subgeneroService->editSubgenero($id);
        }

        public static function deleteSubgenero($id)
        {
            self::$subgeneroService->deleteSubgenero($id);
        }
}