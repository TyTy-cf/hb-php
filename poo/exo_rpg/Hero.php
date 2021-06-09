<?php


class Hero
{
    protected int $level;

    protected int $scoreCriticalStrike;

    protected float $criticalDamage;

    protected int $damageMin;

    protected int $damageMax;

    /**
     * Hero constructor.
     */
    public function __construct(
        int $strength, int $agility, int $intelligence, string $name
    ) {
        $this->level = 1;
        $this->scoreCriticalStrike = 12;
        $this->criticalDamage = 1.5;
    }

    protected function setDamages(int $carac) {
        $this->damageMin = $carac * 1.2;
        $this->damageMax = $carac * 1.;
    }

}