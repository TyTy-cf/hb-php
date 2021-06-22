<?php


class Adventurer extends Explorator
{

    /**
     * Adventurer constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->monsters[] = ['Ogre', 'Ogre', 'Ogre'];
        $this->maxIndex = count($this->monsters);
    }
}