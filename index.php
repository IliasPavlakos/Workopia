<?php

require 'helpers.php';

$routes = [
    '/Worktopia/' => 'controllers/home.php',
    '/Worktopia/listings' => 'controllers/listings/index.php',
    '/Worktopia/listings/create' => 'controllers/listings/create.php',
    '/Worktopia/404' => 'controllers/error/404.php',
];

$uri = $_SERVER['REQUEST_URI'];

inspect($uri);

if(array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
} else {
    require basePath($routes['404']);
}