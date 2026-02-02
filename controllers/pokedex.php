<?php

declare(strict_types=1);

use App\Pokemon;

$pokemons = $database->select()->from('pokemon')->get();

$monsters = array_map(
    function ($monster) {
        return new Pokemon(
            id: $monster->id,
            name: $monster->name
        );
    },
    $pokemons
);

require view('pokedex');
