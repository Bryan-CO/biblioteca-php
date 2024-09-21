<?php
    require_once BASE_PATH . "domain/repositories/Subgenero.repository.php";
    require_once BASE_PATH . "domain/services/ClientDB.php";
    class SubgeneroRepository implements ISubgeneroRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return $this->dbClient->executeProcedure("getsubgeneros", TypeProcedure::FUNCTION);
        }
        public function add($nombre){
            $this->dbClient->executeProcedure("addsubgenero", TypeProcedure::CALL, [$nombre]);
        }
        public function edit(Subgenero $subgenero){
            
        }
        public function delete($id){
            
        }
    }