<?php

declare (strict_types = 1);
require_once __DIR__ . "/../http-router/App.php";
require_once __DIR__ . "/../http-router/Request.php";
require_once __DIR__ . "/../http-router/Router.php";
require_once __DIR__ . "/../http-router/Method.php";
require_once __DIR__ . "/Todo.php";

$app = new App();

$app->get('/', function () {
    return 'Hello, todo web server!';
});

$app->get('/todos', function () {
    $todos = (new Todo)->all();
    return json_encode($todos);
});

$app->post('/todos', function (array $bodyParams) {
    $todo = (new Todo)->add($bodyParams);
    return json_encode($todo);
});

// TODO: implement other methods(put, delete)

$app->run();
