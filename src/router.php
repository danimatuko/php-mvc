<?php


class Router
{
    private array $routes = [];

    public function add(string $path, array $params): void
    {
        $this->routes[] = [
            'path'   => $path,
            'params' => $params
        ];
    }

    public function match(array $route)
    {
        foreach ($this->routes as $route) {
            if ($route['path'] === $this->routes['path']) {

                $controller = $route['params']['controller'];
                $action = ['params']['action'];

                require "./controllers/$controller";

                $controller = new $controller;

                $controller->$action;
            } else {
                exit("Page not found");
            }
        }
    }
}
