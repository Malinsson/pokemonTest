<?php

declare(strict_types=1);

namespace App\Http;

use App\Exceptions\NotFoundHttpException;
use Exception;

class Router
{
    public function __construct(public array $routes) {}

    public function direct(string $uri)
    {
        if (!array_key_exists($uri, $this->routes)) {
            throw new NotFoundHttpException();
        }
        return parse_url($this->routes[$uri], PHP_URL_PATH);
    }
}
