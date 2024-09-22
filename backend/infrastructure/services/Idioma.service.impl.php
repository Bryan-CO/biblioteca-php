<?php
    require_once I_SERVICE . "Idioma.service.php";

    class IdiomaService implements IIdiomaService{
        private $idiomaRepository;
        public function __construct(IIdiomaRepository $idiomaRepository){
            $this->idiomaRepository = $idiomaRepository;
        }

        public function getIdiomas(){
            return $this->idiomaRepository->getAll();
        }
        public function addIdioma($nombre){
            $this->idiomaRepository->add($nombre);
        }
        public function editIdioma(Idioma $idioma){
            $this->idiomaRepository->edit($idioma);
        }
        public function deleteIdioma($id){
            $this->idiomaRepository->delete($id);
        }
    }