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
            ResponseModel::success($this->autorService->getAutores());
        }
    
        public function addAutor(Request $req)
        {
            $nombre = $req->body['nombre'];
            echo json_encode($this->autorService->addAutor($nombre));
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