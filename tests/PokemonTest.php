<?php

declare(strict_types=1);

namespace tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{
    public function testCreatePokemon()
    {
        $pokemon = new Pokemon(1, 'Charizard');
        $this->assertSame(1, $pokemon->id);
        $this->assertSame('Charizard', $pokemon->name);
        $this->assertSame("https://img.pokemondb.net/sprites/bank/normal/charizard.png", $pokemon->getImageUrl());
    }
}
