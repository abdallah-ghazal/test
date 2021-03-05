<?php 
namespace app\core;
class Router
{
    public $routes=[];
    public $request;
    public $response;

    public function __construct()
    {
        $this->request= new Request();
        $this->response = new Response();
    }

    public function get($path,$view)
    {
        $this->routes['get'][$path] = $view;

    }

    public function post($path,$view)
    {
        $this->routes['post'][$path] = $view;

    }

    public function resolve()
    {
        $method = $this->request->getMethod();
        $uri = $this->request->getPath();
        $view= $this->routes[$method][$uri]??false;
        if(!$view){
            $this->response->httpResponse(404);
            $this->renderView(404);
        }else{
            if(is_array($view)){
                $ints= new $view[0];
                $func=$view[1];
                // print_r(new $view[0]);
                // echo $view[1];
                call_user_func( [$ints,$func] );
                return;
            }
           $this->renderView($view);
        };
 

    }

    public function bufferMainVeiw($mainview)
    {

        ob_start();
        include_once __DIR__ . "/../views/layout/$mainview.php";
        return ob_get_clean();
    }

    public function bufferSecVeiw($view,$params=[])
    {
        ob_start();
        $vars =$params;
        include_once __DIR__ . "/../views/$view.php";

        return ob_get_clean();
    }
    public function renderView($view,$mainview = 'main',$params= [])
    {

        $mainview = $this->bufferMainVeiw($mainview,$params);
        $secondveiw = $this->bufferSecVeiw($view,$params);
        $modified = str_replace('{{content}}',$secondveiw,$mainview);
        echo $modified;
        exit;
        // include_once __DIR__ . "/../views/$view.php";
    }
}