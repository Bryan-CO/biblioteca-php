<?php
    require_once I_SERVICE . "Libro.service.php";

    class LibroService implements ILibroService{
        private $libroRepository;
        public function __construct(ILibroRepository $libroRepository){
            $this->libroRepository = $libroRepository;
        }

        public function getLibros(){
            return $this->libroRepository->getAll();
        }
        public function getLibroById($id){
            $libro = $this->libroRepository->getById($id);
            if (count($libro) === 0) throw new Error('Libro not found!');
            return $libro[0];
        }
        public function addLibro(Libro $libro){
            return $this->libroRepository->add($libro);
        }
        public function editLibro(Libro $libro){
            $this->libroRepository->edit($libro);
        }
        public function deleteLibro($id){
            $this->libroRepository->delete($id);
        }
    }