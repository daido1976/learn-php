<?php

declare (strict_types = 1);
require_once dirname(__FILE__) . "/wf/App.php";
require_once dirname(__FILE__) . "/wf/Request.php";
require_once dirname(__FILE__) . "/wf/Router.php";
require_once dirname(__FILE__) . "/Todo.php";

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

$app->run();
