<?php

class Card
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }


    public function getValue(): int
    {
        return $this->value;
    }

    public function getSuit(): string
    {
        return match ((int) ($this->value / 13)) {
            0 => 'Spades',
            1 => 'Hearts',
            2 => 'Diamonds',
            3 => 'Clubs',
        };
    }

    public function getRank(): string
    {
        return match (($this->value) % 13) {
            0 => '2',
            1 => '3',
            2 => '4',
            3 => '5',
            4 => '6',
            5 => '7',
            6 => '8',
            7 => '9',
            8 => '10',
            9 => 'J',
            10 => 'Q',
            11 => 'K',
            12 => 'A',
        };
    }
}
