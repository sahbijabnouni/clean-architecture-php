<?php

require __DIR__ . '/../vendor/autoload.php';
use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions( __DIR__ . '/Infrastructure/config.php');
$container = $containerBuilder->build();

$app = \DI\Bridge\Slim\Bridge::create($container);

require __DIR__ . '/Api/routes.php';

$app->run();

