<?php

include_once('Monstre.php');

/**
 * Class Dragon.php
 *
 * @author Kevin Tourret
 */
class Dragon extends Monstre
{

    /**
     * Dragon constructor.
     * @param int $level
     */
    public function __construct(int $level)
    {
        parent::__construct($level, 140, 81, 0.7, 8.6, 8.9, 0.33, 1.65);
    }
}
