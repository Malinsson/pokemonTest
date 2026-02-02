<?php

declare(strict_types=1);

function view(string $path)
{
    return __DIR__ . './../views/' . $path . '.view.php';
}
