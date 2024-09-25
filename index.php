<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require "./src/router.php";
$router = new Router();

$router->add("home/index", ['controller' => 'home', 'action' => 'index']);
$router->add("/products", ['controller'  => 'products', 'action' => 'index']);
$router->add("/", ['controller'          => 'home', 'action' => 'index']);

$segments = explode("/", $path);

$controller =  ucfirst($segments[1]);
$action = $segments[2];
require "src/controllers/$controller.php";

$controller = new $controller;

$controller->$action();
