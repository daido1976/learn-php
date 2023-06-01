<?php

declare (strict_types = 1);

class Request
{
    public function getPath(): string
    {
        $path = $this->rawPath() ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod(): string
    {
        $m = $this->rawMethod() ?? 'GET';
        return strtolower($m);
    }

    public function getQueryParams(): array
    {
        $queryString = parse_url($this->rawPath(), PHP_URL_QUERY);
        $queryParams = [];
        if ($queryString !== null) {
            parse_str($queryString, $queryParams);
        }
        return $queryParams;
    }

    private function rawPath():  ? string
    {
        return $_SERVER['REQUEST_URI'];
    }

    private function rawMethod() :  ? string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
