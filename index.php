<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

use App\Exceptions\NotFoundHttpException;
use App\Http\Router;
use App\Http\Request;

$router = new Router([
    '/' => '/controllers/pokedex.php',
    '/pokemon' => '/controllers/pokemon.php'
]);

try {
    $path = $router->direct(Request::uri());
    require __DIR__ . $path;
} catch (NotFoundHttpException) {
    require view('404');
}
