<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

spl_autoload_register(function (string $class_name) {
    require "src/" . str_replace("\\", "/", $class_name . ".php");
});

$router = new Framework\Router();

$router->add("home/index", ['controller' => 'home', 'action' => 'index']);
$router->add("/products", ['controller'  => 'products', 'action' => 'index']);
$router->add("/", ['controller'          => 'home', 'action' => 'index']);

$segments = explode("/", $path);

$controller =  "App\Controllers\\" . ucfirst($segments[1]);
$action = $segments[2];

$controller = new $controller;
$controller->$action();
