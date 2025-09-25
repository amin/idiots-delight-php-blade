<?php

class Game
{
    private Deck $deck;
    public function __construct()
    {
        $this->deck = new Deck();
    }
}
