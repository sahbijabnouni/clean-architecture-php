<?php


use Api\Controllers\UserController;

$app->post('/users', [UserController::class, 'add']);
$app->get('/users/{id}', [UserController::class, 'get']);