<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

use App\Database\QueryBuilder;
use App\Database\Connection;

$database = new QueryBuilder(
    Connection::make($_ENV['DATABASE_DRIVER'], $_ENV['DATABASE_HOST'], $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD'])
);
