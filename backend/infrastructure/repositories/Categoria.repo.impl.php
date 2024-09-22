<?php
    require_once I_REPOSITORY . "Categoria.repository.php";
    require_once I_SERVICE . "ClientDB.php";
    class CategoriaRepository implements ICategoriaRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return $this->dbClient->executeProcedure("getcategorias", TypeProcedure::FUNCTION);
        }
        public function add($nombre){
            $this->dbClient->executeProcedure("addcategoria", TypeProcedure::CALL, [$nombre]);
        }
        public function edit(Categoria $categoria){
            
        }
        public function delete($id){
            
        }
    }