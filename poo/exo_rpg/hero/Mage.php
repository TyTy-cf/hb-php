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
        parent::__construct(15, 8, 27, $name);
        $this->updateAttributesFromCarac($this->intelligence);
    }

    function levelUp(): void
    {
        $this->updateMainAttributes(1, 1, 6);
        $this->updateAttributesFromCarac(6);
    }
}
