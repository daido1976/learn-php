<?php

declare (strict_types = 1);

class Request
{
    public function getPath(?string $rawPath): string
    {
        $path = $rawPath ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod(?string $rawMethod): string
    {
        $m = $rawMethod ?? 'GET';
        return strtolower($m);
    }

    public function rawPath(): ?string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function rawMethod(): ?string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
