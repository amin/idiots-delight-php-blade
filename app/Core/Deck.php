<?php

declare(strict_types=1);

namespace Core;

class Deck
{
    private array $deck = [[], [], [], []];

    public function __construct()
    {
        $this->generateDeck();
    }

    private function generateDeck(): void
    {
        $range = range(0, 51);
        shuffle($range);

        $this->deck = array_map(
            fn($column) => (array_map(fn($value) => new Card($value), $column)),
            array_chunk($range, 13)
        );
    }

    public function drawFromAllColumns(): array
    {
        return array_map(
            fn($i) => array_pop($this->deck[$i]),
            array_keys($this->deck)
        );
    }
}
