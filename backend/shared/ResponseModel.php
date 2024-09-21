<?php
class ResponseModel implements JsonSerializable
{
    private $success;
    private $data;
    private $message;
    private function __construct($success, $data, $message)
    {
        $this->success = $success;
        $this->data = $data;
        $this->message = $message;
    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
    static function success($data, $statusCode = 200, $message = null)
    {
        $response = new ResponseModel(true, $data, $message);
        http_response_code($statusCode);
        echo json_encode($response);
    }
}