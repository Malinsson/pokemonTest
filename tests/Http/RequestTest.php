<?php

declare(strict_types=1);

namespace tests\Http;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testGetUri()
    {
        $_SERVER['REQUEST_URI'] = '/';
        $this->assertSame('/', Request::uri());
    }
}
