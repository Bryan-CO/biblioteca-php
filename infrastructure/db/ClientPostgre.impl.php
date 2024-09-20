<?php
require_once BASE_PATH . "domain/services/ClientDB.php";
require_once BASE_PATH . "config/config.php";

class ClientPostgreSQL implements IClientDB
{
    private $db;
    public function __construct()
    {
        $db_host = config::$DB_HOST;
        $db_port = config::$DB_PORT;
        $db_name = config::$DB_NAME;
        $db_user = config::$DB_USER;
        $db_pass = config::$DB_PASS;

        // Conexion
        $this->db = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    }
    public function getConnection(){
        return $this->db;
    }
    public function executeProcedure($nameProcedure, TypeProcedure $typeProcedure, $params = null)
    {
        $db = $this->getConnection();
        $query = "{$typeProcedure->value} {$this->buildQuery($nameProcedure, $params)};";

        $stmt = $db->prepare($query);
        if ($params !== null){
            for($i = 1; $i <= count($params); $i++){
                $stmt->bindValue(":$i", $params[$i - 1]);
            }
        }
        
        $stmt->execute();

        if ($typeProcedure->name !== 'CALL'){
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $db = null;
            return $rows;
        }
    }

    private function buildQuery($nameProcedure, $params = null){
        if($params == null){
            return "{$nameProcedure}()";
        }

        $paramCount = '(';
        for($i = 1; $i <= count($params); $i++){
            $paramCount .= chop(":{$i}");
            if($i !== count($params)){
                $paramCount .= ", ";
            }
            else {
                $paramCount .= chop(");");
            }
        }

        $query = "$nameProcedure$paramCount";
        return $query;
    }
}