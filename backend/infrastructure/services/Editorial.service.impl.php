<?php
    require_once BASE_PATH . "domain/services/Editorial.service.php";

    class EditorialService implements IEditorialService{
        private $editorialRepository;
        public function __construct(IEditorialRepository $editorialRepository){
            $this->editorialRepository = $editorialRepository;
        }

        public function getEditoriales(){
            return $this->editorialRepository->getAll();
        }
        public function addEditorial($nombre){
            $this->editorialRepository->add($nombre);
        }
        public function editEditorial(Editorial $editorial){
            $this->editorialRepository->edit($editorial);
        }
        public function deleteEditorial($id){
            $this->editorialRepository->delete($id);
        }
    }