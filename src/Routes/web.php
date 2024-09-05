<?php

use Src\Http\Controllers\WishlistController;
use Src\Http\Controllers\AddGameController;

// add routes
$app->get('/AddGame', AddGameController::class . ':addGame');
$app->post('/store', AddGameController::class . ':store');

$app->get('/[{category}]', WishlistController::class . ':index');
$app->get('/game/[{gameslug}]', WishlistController::class . ':detail');
$app->post('/addCategory', WishlistController::class . ':addCategory');
