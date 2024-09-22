<?php
    require_once I_REPOSITORY . "Autor.repository.php";
    require_once I_SERVICE . "ClientDB.php";
    require_once MAPPER . 'AutorMapper.php';
    class AutorRepository implements IAutorRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return pgToAutores($this->dbClient->executeProcedure("getautores", TypeProcedure::FUNCTION));
        }
        public function add($nombre){
            return $this->dbClient->executeProcedure("addaut1or", TypeProcedure::FUNCTION, [$nombre]);
        }
        public function edit(Autor $autor){
            
        }
        public function delete($id){
            
        }
    }