<?php
require_once '../core/Router.php';
require_once '../core/Database.php';

$router = new Router();
$router->addRoute('GET', 'libro', 'LibroController@index');
$router->addRoute('POST', 'libro/create', 'LibroController@create');
$router->addRoute('POST', 'libro/update', 'LibroController@update');
$router->addRoute('GET', 'libro/edit', 'LibroController@edit');
$router->addRoute('GET', 'libro/delete', 'LibroController@delete');

$router->dispatch();
