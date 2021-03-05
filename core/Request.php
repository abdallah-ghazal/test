<?php
namespace app\core;
class Request
{
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath()
    {

        $uri = $_SERVER['REQUEST_URI'];
        $postion  = strpos($uri,'?');
        if($postion){
            $uri = substr($uri,0,$postion);
        }
        return $uri;
    }

    public function isGet()
    {
        return $this->getMethod()==='get';
    }
    
    public function isPost()
    {
        return $this->getMethod()==='post';
    }

    public function getBody()
    {
        $body = [];

        $body = $_POST;

        // foreach($body as $key=>$value)
        // {
        //     $body["$$key"]=$value;
        // }

        return $body;
    }
}