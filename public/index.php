<?php

$autoloader = include __DIR__ . '/../vendor/autoload.php';
$autoloader->addPsr4('ProycerWeb\\', __DIR__ . '/../app/src');

try {
    $app = new Popcorn\Pop($autoloader, include __DIR__ . '/../app/config/app.http.php');
    $app->register(new ProycerWeb\Module());
    $app->run();
} catch (Exception $exception) {
    $app = new ProycerWeb\Module();

	try {
		$app->httpError($exception);
	} catch (\Pop\Http\Exception $e) {
		var_dump($e);
	} catch (\Pop\View\Exception $e) {
		var_dump($e);
	}
}
