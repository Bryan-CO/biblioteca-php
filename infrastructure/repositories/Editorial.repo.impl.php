<?php
    require_once BASE_PATH . "domain/repositories/Editorial.repository.php";
    require_once BASE_PATH . "domain/services/ClientDB.php";
    class EditorialRepository implements IEditorialRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return $this->dbClient->executeProcedure("geteditoriales", TypeProcedure::FUNCTION);
        }
        public function add($nombre){
            $this->dbClient->executeProcedure("addeditorial", TypeProcedure::CALL, [$nombre]);
        }
        public function edit(Editorial $editorial){
            
        }
        public function delete($id){
            
        }
    }