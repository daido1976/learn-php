<?php
declare (strict_types = 1);

// Usage:
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Request.php";
require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/Method.php";

$app = new App();

$app->router->get('/', function () {
    return 'Hello, simple http router!';
});

$app->router->get('/params/{id}', function (array $_, array $queryParams, array $pathParams) {
    return json_encode([
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->router->post('/params/{id}', function (array $bodyParams, array $queryParams, array $pathParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->router->patch('/params/{id}', function (array $bodyParams, array $queryParams, array $pathParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->router->delete('/params/{id}', function (array $bodyParams, array $queryParams, array $pathParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->run();
