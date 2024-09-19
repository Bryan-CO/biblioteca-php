<?php
    require_once BASE_PATH . "domain/services/Autor.service.php";
    class AutorService implements IAutorService{
        private $autorRepository;
        public function __construct(IAutorRepository $autorRepository){
            $this->autorRepository = $autorRepository;
        }
        public function getAutores(){
            return $this->autorRepository->getAll();
        }
        public function addAutor(Autor $autor){
            $this->autorRepository->add($autor);
        }
        public function editAutor(Autor $autor){
            $this->autorRepository->edit($autor);
        }
        public function deleteAutor($id){
            $this->autorRepository->delete($id);
        }
    }