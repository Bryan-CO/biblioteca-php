<?php
require_once 'Request.php';
class Router
{
    private static Request $req;

    public static function initializeRequest($params = [])
    {
        self::$req = new Request($params);
    }

    static function GET($url, $callback)
    {
        if (REQUEST_METHOD === 'GET' && self::isMatch($url)) {
            ob_clean();
            header('Content-Type: application/json');
            $callback(self::$req);
            exit;
        }
    }

    static function POST($url, $callback)
    {
        if (REQUEST_METHOD === 'POST' && self::isMatch($url)) {
            ob_clean();
            header('Content-Type: application/json');
            $callback(self::$req);
            exit;
        }
    }

    private static function isMatch($pathUrl)
    {

        $param = self::containParameters($pathUrl);
        if ($param === null) {
            self::initializeRequest();
            return $pathUrl === REQUEST_URL;
        }

        $subRuta = explode('/', $pathUrl);
        $subReqRuta = explode('/', REQUEST_URL);
        if (count($subReqRuta) === count($subRuta)) {
            $params = [$param => $subReqRuta[2]];
            self::initializeRequest($params);
        }
        return $subRuta[1] === $subReqRuta[1];
    }
    private static function containParameters($pathUrl)
    {
        $param = null;
        foreach (explode('/', $pathUrl) as $rt) {
            if (str_starts_with($rt, ':')) {
                $param = substr($rt, 1);
            }
        }
        return $param;
    }
}