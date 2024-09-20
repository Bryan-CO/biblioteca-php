<?php
    require_once BASE_PATH . "domain/repositories/Idioma.repository.php";
    require_once BASE_PATH . "domain/services/ClientDB.php";
    class IdiomaRepository implements IIdiomaRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return $this->dbClient->executeProcedure("getidiomas", TypeProcedure::FUNCTION);
        }
        public function add($nombre){
            $this->dbClient->executeProcedure("addidioma", TypeProcedure::CALL, [$nombre]);
        }
        public function edit(Idioma $idioma){
            
        }
        public function delete($id){
            
        }
    }