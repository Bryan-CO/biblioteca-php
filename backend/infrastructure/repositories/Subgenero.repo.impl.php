<?php
require_once I_REPOSITORY . "Subgenero.repository.php";
require_once I_SERVICE . "ClientDB.php";
require_once MAPPER . 'SubgeneroMapper.php';
class SubgeneroRepository implements ISubgeneroRepository
{
  private $dbClient;
  public function __construct(IClientDB $dbClient)
  {
    $this->dbClient = $dbClient;
  }
  public function getAll()
  {
    return pgToSubgeneros($this->dbClient->executeProcedure("getsubgeneros", TypeProcedure::FUNCTION));
  }
  public function add($nombre)
  {
    return $this->dbClient->executeProcedure("addsubgenero", TypeProcedure::FUNCTION, [$nombre]);
  }
  public function edit(Subgenero $subgenero)
  {
    return $this->dbClient->executeProcedure("editsubgenero", TypeProcedure::FUNCTION, [$subgenero->getIdSubgenero(), $subgenero->getNombre()]);
  }
  public function delete($id)
  {
    $this->dbClient->executeProcedure("removesubgenero", TypeProcedure::CALL, [$id]);
  }
}
