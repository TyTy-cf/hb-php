<?php

include_once('Hero.php');

class Warrior extends Hero
{

    public function __construct(string $name)
    {
        parent::__construct(24, 12, 14, $name);
        $this->updateAttributesFromCarac($this->strength);
    }

    function levelUp(): void
    {
        $this->updateMainAttributes(5, 1, 2);
        $this->updateAttributesFromCarac(5);
    }
}