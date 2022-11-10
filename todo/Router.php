<?php

declare (strict_types = 1);

class Router
{
    public Request $request;
    /** @var array<string, array<string, callable>> */
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $path, callable $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            http_response_code(404);
            echo "Not found";
            exit;
        }
        echo call_user_func($callback);
    }
}
