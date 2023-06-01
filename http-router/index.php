<?php

declare (strict_types = 1);
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Request.php";
require_once __DIR__ . "/Router.php";

$app = new App();

$app->router->get('/', function () {
    return 'Hello, simple http router!';
});

$app->router->get('/params', function ( ? array $_, array $queryParams) {
    return json_encode([
        'queryParams' => $queryParams,
    ]);
});

$app->router->post('/params', function (array $bodyParams, array $queryParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
    ]);
});

// TODO: implement other methods(put, delete)

$app->run();
