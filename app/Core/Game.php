<?php

declare(strict_types=1);

namespace Core;

class Game
{
    private Deck $deck;
    private array $tableau = [[], [], [], []];

    public function __construct()
    {
        $this->deck = new Deck();
    }

    public function dealRound(): void
    {

        array_walk($this->deck->drawFromAllColumns(), fn($card, $i) => $card && $this->tableau[$i][] = $card);
    }

    public function getGame(): array
    {
        return $this->tableau;
    }
}
