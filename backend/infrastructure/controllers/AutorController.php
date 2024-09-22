<?php
    
    class AutorController
    {
        private $autorService;
    
        public function __construct(IAutorService $autorService)
        {
            $this->autorService = $autorService;
        }
    
        public function getAutores()
        {
            return $this->autorService->getAutores();
        }
    
        public function addAutor($nombre)
        {
            return $this->autorService->addAutor($nombre);
        }
    
        public function editAutor($id)
        {
            $this->autorService->editAutor($id);
        }
    
        public function deleteAutor($id)
        {
            $this->autorService->deleteAutor($id);
        }
    }