<?php
    require_once I_SERVICE . "Categoria.service.php";

    class CategoriaService implements ICategoriaService{
        private $categoriaRepository;
        public function __construct(ICategoriaRepository $categoriaRepository){
            $this->categoriaRepository = $categoriaRepository;
        }

        public function getCategorias(){
            return $this->categoriaRepository->getAll();
        }
        public function addCategoria($nombre){
            $this->categoriaRepository->add($nombre);
        }
        public function editCategoria(Categoria $categoria){
            $this->categoriaRepository->edit($categoria);
        }
        public function deleteCategoria($id){
            $this->categoriaRepository->delete($id);
        }
    }