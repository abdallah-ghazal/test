<?php
namespace app\core;
class Response
{
    public function httpResponse($code)
    {
        return http_response_code($code);
    }
}