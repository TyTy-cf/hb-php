<?php

include_once('Hero.php');

class Rogue extends Hero
{

    /**
     * Rogue constructor.
     */
    public function __construct(string $name)
    {
        parent::__construct(14, 30, 11, $name);
        $this->updateAttributesFromCarac($this->agility);
        $this->criticalDamage = 1.75;
    }

    function levelUp(): void
    {
        $this->updateMainAttributes(2, 5, 1);
        $this->updateAttributesFromCarac(5);
    }
}
