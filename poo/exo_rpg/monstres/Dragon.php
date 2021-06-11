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
        parent::__construct($level, 130, 81, 0.7, 8.3, 8.6, 0.33, 1.65);
    }
}
