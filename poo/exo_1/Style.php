<?php

include_once('TraitName.php');

class Style
{
    use TraitName;

    public function __toString(): string
    {
        return $this->name;
    }

}