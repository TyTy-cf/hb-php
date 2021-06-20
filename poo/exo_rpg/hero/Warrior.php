<?php

include_once('Hero.php');

class Warrior extends Hero
{

    public function __construct(string $name)
    {
        parent::__construct(24, 12, 14, $name);
        $this->updateAttributesFromCarac($this->strength);
        $this->ability = new Ability('Heurtoir', 150, $this->strength * 1.8);
    }

    function levelUp(): void
    {
        $this->updateMainAttributes(5, 2, 2);
        $this->updateAttributesFromCarac(5);
        $this->ability->setDamage($this->strength * 1.8);
    }
}
