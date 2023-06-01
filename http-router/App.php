<?php

declare (strict_types = 1);

class App
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router();
    }

    public function get(string $path, callable $callback)
    {
        $this->router->register(HttpMethod::GET, $path, $callback);
    }

    public function post(string $path, callable $callback)
    {
        $this->router->register(HttpMethod::POST, $path, $callback);
    }

    public function put(string $path, callable $callback)
    {
        $this->router->register(HttpMethod::PUT, $path, $callback);
    }

    public function patch(string $path, callable $callback)
    {
        $this->router->register(HttpMethod::PATCH, $path, $callback);
    }

    public function delete(string $path, callable $callback)
    {
        $this->router->register(HttpMethod::DELETE, $path, $callback);
    }

    public function run()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $json = file_get_contents('php://input');
        $bodyParams = json_decode($json, true) ?: [];
        $queryParams = $this->request->getQueryParams();
        $this->router->resolve($path, $method, $bodyParams, $queryParams);
    }
}
