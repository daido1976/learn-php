<?php
declare (strict_types = 1);

// Usage:
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Request.php";
require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/Method.php";

$app = new App();

$app->get('/', function () {
    return 'Hello, simple http router!';
});

$app->get('/params/{id}', function (array $_, array $queryParams, array $pathParams) {
    return json_encode([
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->post('/params/{id}', function (array $bodyParams, array $queryParams, array $pathParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->patch('/params/{id}', function (array $bodyParams, array $queryParams, array $pathParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->delete('/params/{id}', function (array $bodyParams, array $queryParams, array $pathParams) {
    return json_encode([
        'bodyParams' => $bodyParams,
        'queryParams' => $queryParams,
        'pathParams' => $pathParams,
    ]);
});

$app->run();
