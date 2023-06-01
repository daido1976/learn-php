<?php

declare (strict_types = 1);
require_once __DIR__ . "/../http-router/App.php";
require_once __DIR__ . "/../http-router/Request.php";
require_once __DIR__ . "/../http-router/Router.php";
require_once __DIR__ . "/Todo.php";

$app = new App();

$app->router->get('/', function () {
    return 'Hello, todo web server!';
});

$app->router->get('/todos', function () {
    $todos = (new Todo)->all();
    return json_encode($todos);
});

$app->router->post('/todos', function (array $params) {
    $todo = (new Todo)->add($params);
    return json_encode($todo);
});

// TODO: implement other methods(put, delete)

$app->run();
