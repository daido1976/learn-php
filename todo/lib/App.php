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

    public function run()
    {
        $path = $this->request->getPath($this->request->rawPath());
        $method = $this->request->getMethod($this->request->rawMethod());
        $json = file_get_contents('php://input');
        $params = json_decode($json, true);
        $this->router->resolve($path, $method, $params);
    }
}
