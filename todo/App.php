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
        $this->router->resolve($path, $method);
    }
}
