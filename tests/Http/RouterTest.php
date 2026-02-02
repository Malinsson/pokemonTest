<?php

declare(strict_types=1);

namespace tests\Http;

use App\Exceptions\NotFoundHttpException;
use App\Http\Router;
use Exception;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $router = new Router(
            [
                '/' => '/controllers/pokedex.php',
                '/pokemon' => '/controllers/pokemon.php'
            ]
        );

        $path = $router->direct('/');
        $this->assertSame('/controllers/pokedex.php', $path);
    }

    public function test_route_not_found()
    {
        $router = new Router(
            [
                '/' => '/controllers/pokedex.php',
                '/pokemon' => '/controllers/pokemon.php'
            ]
        );

        $this->expectException(NotFoundHttpException::class);
        $router->direct('/hello');
    }
}
