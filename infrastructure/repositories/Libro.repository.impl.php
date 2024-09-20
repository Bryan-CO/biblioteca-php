<?php
    require_once BASE_PATH . "domain/repositories/Libro.repository.php";
    require_once BASE_PATH . "domain/services/ClientDB.php";
    class LibroRepository implements ILibroRepository{
        private $dbClient;
        public function __construct(IClientDB $dbClient){
            $this->dbClient = $dbClient;
        }
        public function getAll(){
            return $this->dbClient->executeProcedure("getlibros", TypeProcedure::FUNCTION);
        }
        public function getById($id){
            return $this->dbClient->executeProcedure("getlibro", TypeProcedure::FUNCTION, [$id]);
        }
        public function add(Libro $libro){
            $this->dbClient->executeProcedure("addlibro", TypeProcedure::CALL, [
                $libro->getSerialNumber(),
                $libro->getNombre(),
                $libro->getSinopsis(),
                $libro->getAutor()->getIdAutor(),
                $libro->getIdioma()->getIdIdioma(),
                $libro->getEditorial()->getIdEditoral(),
                $libro->getCategoria()->getIdCategoria(),
                $libro->getSubgenero()->getIdSubgenero(),
                $libro->getAnio(),
                $libro->getUnidades(),
                $libro->getCantPaginas(),
                $libro->getUrlImagen()
            ]);
        }
        public function edit(Libro $libro){
            
        }
        public function delete($id){
            
        }
    }