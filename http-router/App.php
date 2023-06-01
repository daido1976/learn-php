<?php

declare (strict_types = 1);

// TODO: Support query and path params
class App
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router();
    }

    public function run()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $json = file_get_contents('php://input');
        $params = json_decode($json, true);
        $this->router->resolve($path, $method, $params);
    }
}
