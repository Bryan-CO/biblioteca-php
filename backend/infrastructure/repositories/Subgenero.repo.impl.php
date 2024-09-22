<?php
    require_once I_REPOSITORY . "Subgenero.repository.php";
    require_once I_SERVICE . "ClientDB.php";
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