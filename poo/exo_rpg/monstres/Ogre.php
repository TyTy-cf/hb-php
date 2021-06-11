<?php

include_once('Monstre.php');

/**
 * Class Ogre.php
 *
 * @author Kevin Tourret
 */
class Ogre extends Monstre
{

    /**
     * Ogre constructor.
     * @param int $level
     */
    public function __construct(int $level)
    {
        parent::__construct($level, 112, 71, 0.5, 6.4, 6.8, 0.28, 1.5);
    }
}
