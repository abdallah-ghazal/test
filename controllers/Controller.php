<?php
namespace app\controllers;

use app\core\Router;

class Controller
{

    public function render($view,$mainview = 'main',$params=[])
    {
        $router = new Router();
        $router->renderView($view,$mainview,$params);
    }

}