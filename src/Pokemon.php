<?php

declare(strict_types=1);

namespace App;

class Pokemon
{
    public function __construct(public int $id, public string $name) {}

    public function getImageUrl()
    {
        return sprintf("https://img.pokemondb.net/sprites/bank/normal/%s.png", strtolower($this->name));
    }
}
