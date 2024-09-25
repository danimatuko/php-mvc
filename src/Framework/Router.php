<?php

namespace Framework;

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
    public function match(string $route)
    {
        $pattern = '#^/(?<controller>[a-z]+)/(?<action>[a-z]+$)#'; // Named capture groups: controller and action

        if (preg_match($pattern, $route, $matches)) {
            // Named capture groups can also be accessed by their names
            $matches = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            echo '<pre>';
            print_r($matches);
            echo '</pre>';
        } else {
            echo '</br>' . 'No match found.';
        }
    }
}
