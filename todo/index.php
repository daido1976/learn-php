<?php

declare (strict_types = 1);
require_once dirname(__FILE__) . "/App.php";
require_once dirname(__FILE__) . "/Request.php";
require_once dirname(__FILE__) . "/Router.php";

$app = new App();

$app->router->get('/', function () {
    return 'Hello, world';
});

$app->router->get('/contact', function () {
    return 'Contact';
});

$app->run();
