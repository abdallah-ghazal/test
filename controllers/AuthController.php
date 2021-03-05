<?php
namespace app\controllers;
 
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{

    public function login()
    {
        $this->render('login','auth');
    }

    public function register()
    {
        $request = new Request();
        if ($request->isPost()):
            // echo '<pre>';
            // var_dump($request->getBody());
            // echo '</pre>';
            // echo '<br>';
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());
            var_dump($registerModel);
            if($registerModel->validate() && $registerModel->register()):
                return 'success';
            endif;
        endif;

    }
}