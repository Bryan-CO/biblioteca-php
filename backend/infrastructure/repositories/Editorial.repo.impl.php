<?php
require_once I_REPOSITORY . "Editorial.repository.php";
require_once I_SERVICE . "ClientDB.php";
require_once MAPPER . 'EditorialMapper.php';
class EditorialRepository implements IEditorialRepository
{
  private $dbClient;
  public function __construct(IClientDB $dbClient)
  {
    $this->dbClient = $dbClient;
  }
  public function getAll()
  {
    return pgToEditoriales($this->dbClient->executeProcedure("geteditoriales", TypeProcedure::FUNCTION));
  }
  public function add($nombre)
  {
    return $this->dbClient->executeProcedure("addeditorial", TypeProcedure::FUNCTION, [$nombre]);
  }
  public function edit(Editorial $editorial)
  {
    return $this->dbClient->executeProcedure("editeditorial", TypeProcedure::FUNCTION, [$editorial->getIdEditoral(), $editorial->getNombre()]);
  }
  public function delete($id)
  {
    $this->dbClient->executeProcedure("removeeditorial", TypeProcedure::CALL, [$id]);
  }
}
