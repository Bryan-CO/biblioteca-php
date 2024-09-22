<?php
    require_once I_SERVICE . "Subgenero.service.php";

    class SubgeneroService implements ISubgeneroService{
        private $subgeneroRepository;
        public function __construct(ISubgeneroRepository $subgeneroRepository){
            $this->subgeneroRepository = $subgeneroRepository;
        }

        public function getSubgeneros(){
            return $this->subgeneroRepository->getAll();
        }
        public function addSubgenero($nombre){
            return $this->subgeneroRepository->add($nombre);
        }
        public function editSubgenero(Subgenero $subgenero){
            $this->subgeneroRepository->edit($subgenero);
        }
        public function deleteSubgenero($id){
            $this->subgeneroRepository->delete($id);
        }
    }