<?php

declare (strict_types = 1);

class Request
{
    public Router $router;

    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod(): string
    {
        $m = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        return strtolower($m);
    }
}
