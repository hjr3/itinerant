<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new Slim(array(
	'templates.path' => __DIR__ . '/../app/templates',
	'view' => new Itinerant\View\Mustache(),
));

$app->get('/', function () use ($app)  {
	$app->render('index.mustache');
});

$app->run();
