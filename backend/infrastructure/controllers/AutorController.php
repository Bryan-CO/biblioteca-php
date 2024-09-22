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
            try{
                $nombre = $req->body['nombre'];
                ResponseModel::success($this->autorService->addAutor($nombre));
            }
            catch(Exception $e){
                ResponseModel::error('Algo ocurrio :(');
            }
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