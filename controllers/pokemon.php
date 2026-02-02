<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use App\Pokemon;

$id = $_GET['id'] ?? 1;

try {
    $pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->first();

    $monster = new Pokemon(
        id: $pokemon->id,
        name: $pokemon->name
    );
} catch (NotFoundHttpException) {
    require view('404');
    exit();
}

require view('pokemon');
