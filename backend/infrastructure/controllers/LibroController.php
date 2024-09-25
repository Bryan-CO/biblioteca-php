<?php
    
    class LibroController
{
    private $libroService;

    public function __construct(ILibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    public function getLibros()
    {
        ResponseModel::success($this->libroService->getLibros());
    }

    public function getLibroById(Request $req)
    {
        try{
            $id = $req->params['id'];
            ResponseModel::success($this->libroService->getLibroById($id));
        }catch(Error $e){
            ResponseModel::error($e->getMessage(), 404);
        }
    }

    public function addLibro(Request $req)
    {
        $serialNumber = $req->body['serialNumber'];
        $nombre = $req->body['nombre'];
        $sinopsis = $req->body['sinopsis'];
        $idAutor = $req->body['idAutor'];
        $idIdioma = $req->body['idIdioma'];
        $idEditorial = $req->body['idEditorial'];
        $idCategoria = $req->body['idCategoria'];
        $idSubgenero = $req->body['idSubgenero'];
        $anio = $req->body['anio'];
        $unidades = $req->body['unidades'];
        $cantPaginas = $req->body['cantPaginas'];
        $urlImagen = $req->body['urlImagen'];

        $libro = new Libro(
            $serialNumber,
            $nombre,
            $sinopsis,
            new Autor($idAutor, null),
            new Idioma($idIdioma, null),
            new Editorial($idEditorial, null),
            new Categoria($idCategoria, null),
            new Subgenero($idSubgenero, null),
            $anio,
            $unidades,
            $cantPaginas,
            $urlImagen
        );

        ResponseModel::success($this->libroService->addLibro($libro));
    }

    public function editLibro($id)
    {
        $this->libroService->editLibro($id);
    }

    public function deleteLibro($id)
    {
        $this->libroService->deleteLibro($id);
    }
}