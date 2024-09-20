<?php
class Request
{
    public $body;
    public $query;
    public $params;

    public function __construct($params = [])
    {   
        $jsonBody = file_get_contents('php://input');
        echo $jsonBody;
        $this->body = json_decode($jsonBody, true);
        $this->query = $_GET;
        $this->params = $params;
    }
}
