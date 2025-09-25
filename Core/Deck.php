<?php

class Deck
{
    private array $deck = [[], [], [], []];

    public function __construct()
    {
        $this->generateDeck();
    }

    private function generateDeck()
    {
        $range = range(0, 51);
        shuffle($range);

        $this->deck = array_map(null, ...array_chunk($range, 4));
        $this->deck = array_map(fn($column) => array_map(fn($i) => new Card($i), $column), $this->deck);
    }

    public function getDeck(): array
    {
        return $this->deck;
    }
}
