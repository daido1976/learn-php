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

    public function parsePathParams(string $routePath, string $requestPath): array
    {
        $routeParts = explode('/', trim($routePath, '/'));
        $requestParts = explode('/', trim($requestPath, '/'));

        $params = [];

        foreach ($routeParts as $index => $routePart) {
            if (strpos($routePart, '{') !== false && isset($requestParts[$index])) {
                $paramName = trim($routePart, '{}');
                $params[$paramName] = $requestParts[$index];
            }
        }

        return $params;
    }

    public function resolve(string $requestPath, string $method,  ? array $bodyParams,  ? array $queryParams)
    {
        foreach ($this->routes[$method] as $routePath => $callback) {
            $pathParams = $this->parsePathParams($routePath, $requestPath);
            if (!empty($pathParams) || $routePath === $requestPath) {
                echo call_user_func($callback, $bodyParams, $queryParams, $pathParams);
                return;
            }
        }

        // If no route matched
        http_response_code(404);
        echo "Not found";
        exit;
    }
}
