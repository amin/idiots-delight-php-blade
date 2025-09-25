<?php

declare(strict_types=1);

namespace Core;

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
