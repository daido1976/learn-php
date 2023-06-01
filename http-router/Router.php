<?php

declare (strict_types = 1);

class Router
{
    /** @var array<string, ?array<string, ?callable>> */
    private array $routes = [];

    public function get(string $path, callable $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, callable $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function put(string $path, callable $callback)
    {
        $this->routes['put'][$path] = $callback;
    }

    public function patch(string $path, callable $callback)
    {
        $this->routes['patch'][$path] = $callback;
    }

    public function delete(string $path, callable $callback)
    {
        $this->routes['delete'][$path] = $callback;
    }

    public function resolve(string $path, string $method,  ? array $bodyParams,  ? array $queryParams)
    {
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            http_response_code(404);
            echo "Not found";
            exit;
        }
        echo call_user_func($callback, $bodyParams, $queryParams);
    }
}
