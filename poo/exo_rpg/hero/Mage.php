<?php

include_once('Hero.php');

class Mage extends Hero
{

    /**
     * Mage constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct(13, 8, 36, $name);
        $this->updateAttributesFromCarac($this->intelligence);
        $this->ability = new Ability('Fireball', 110, $this->intelligence * 2);
    }

    function levelUp(): void
    {
        $this->updateMainAttributes(2, 1, 6);
        $this->updateAttributesFromCarac(6);
        $this->ability->setDamage($this->intelligence * 2);
    }
}
