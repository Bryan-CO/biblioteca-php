<?php
    require_once "domain/repositories/Autor.repository.php";
    require_once "domain/services/ClientDB.php";
    class AutorRepository implements IAutorRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return $this->dbClient->executeProcedure("getautores", TypeProcedure::FUNCTION);
        }
        public function add(Autor $autor){

        }
        public function edit(Autor $autor){

        }
        public function delete($id){
            
        }
    }