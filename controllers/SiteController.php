<?php
namespace app\controllers;

use app\core\Request;

class SiteController extends Controller
{
    public $request;

    public function __construct()
    {
        $this->request = new Request();

    }
    public function contact()
    {
        $this->render('contact');
    }

    public function handleSubmit()
    {
        var_dump($this->request->getBody());
    }
}