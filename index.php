<?php

$controller =  ucfirst($_GET['controller']);
$action = $_GET['action'];

require "src/controllers/$controller.php";

$controller = new $controller;

$controller->$action();
