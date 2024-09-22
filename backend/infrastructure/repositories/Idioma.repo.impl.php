<?php
    require_once I_REPOSITORY . "Idioma.repository.php";
    require_once I_SERVICE . "ClientDB.php";
    require_once MAPPER . 'IdiomaMapper.php';
    class IdiomaRepository implements IIdiomaRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return pgToIdiomas($this->dbClient->executeProcedure("getidiomas", TypeProcedure::FUNCTION));
        }
        public function add($nombre){
            $this->dbClient->executeProcedure("addidioma", TypeProcedure::CALL, [$nombre]);
        }
        public function edit(Idioma $idioma){
            
        }
        public function delete($id){
            
        }
    }