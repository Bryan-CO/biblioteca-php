<?php
    require_once BASE_PATH . "domain/services/Libro.service.php";

    class LibroService implements ILibroService{
        private $libroRepository;
        public function __construct(ILibroRepository $libroRepository){
            $this->libroRepository = $libroRepository;
        }

        public function getLibros(){
            return $this->libroRepository->getAll();
        }
        public function getLibroById($id){
            return $this->libroRepository->getById($id);
        }
        public function addLibro(Libro $libro){
            $this->libroRepository->add($libro);
        }
        public function editLibro(Libro $libro){
            $this->libroRepository->edit($libro);
        }
        public function deleteLibro($id){
            $this->libroRepository->delete($id);
        }
    }