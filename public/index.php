<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/slim/slim/Slim/View.php';
require __DIR__ . '/../app/view/Mustache.php';

$app = new Slim(array(
	'templates.path' => __DIR__ . '/../app/templates',
	'view' => new app\view\Mustache(),
));

$app->get('/', function () use ($app)  {
	$app->render('index.mustache');
});

$app->run();
