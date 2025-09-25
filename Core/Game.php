<?php

class Game
{
    private Deck $deck;
    public function __construct()
    {
        $this->deck = new Deck();
    }

    public function dealRound(): array
    {
        return $this->deck->drawFromAllColumns();
    }
}
