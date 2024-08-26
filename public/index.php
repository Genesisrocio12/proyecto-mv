<?php
// public/index.php

require_once '../core/Router.php';
require_once '../app/controllers/LibroController.php';

$router = new Router();

$router->addRoute('/', 'LibroController@index');
$router->addRoute('/create', 'LibroController@create');
$router->addRoute('/edit/{id}', 'LibroController@edit');
$router->addRoute('/show/{id}', 'LibroController@show');

$router->dispatch($_SERVER['REQUEST_URI']);
