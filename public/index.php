<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;

$app = new Application();

$app->router->get('/','home');

$app->router->get('/about','about');

$app->router->get('/testomonial','testomonial');

$app->router->get('/contact',[SiteController::class,'contact']);

$app->router->post('/contact',[SiteController::class,'handleSubmit']);

$app->router->get('/login',[AuthController::class,'login']);

$app->router->post('/login',[AuthController::class,'register']);

$app->run();