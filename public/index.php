<?php

$autoloader = include __DIR__ . '/../vendor/autoload.php';
$autoloader->addPsr4('ProycerWeb\\', __DIR__ . '/../app/src');

try {
    $app = new Pop\Application($autoloader, include __DIR__ . '/../app/config/app.http.php');
    $app->register(new ProycerWeb\Module());
    $app->run();
} catch (\Exception $exception) {
    $app = new ProycerWeb\Module();
    $app->httpError($exception);
}


