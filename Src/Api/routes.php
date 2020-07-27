<?php


use Api\Controllers\UserController;

$app->post('/projects', [UserController::class, 'add']);
$app->get('/projects/{id}', [UserController::class, 'get']);