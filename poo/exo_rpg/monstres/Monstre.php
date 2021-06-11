<?php

include_once('RpgEntity.php');


/**
 * Class Monstre.php
 *
 * @author Kevin Tourret
 */
abstract class Monstre extends RpgEntity
{

    /**
     * Monstre constructor.
     * @param int $level
     * @param int $hpCoef
     * @param int $manaCoef
     * @param float $defenseCoef
     * @param int $damageMinCoef
     * @param int $damageMaxCoef
     * @param float $scoreCriticalStrikeCoef
     * @param float $criticalDamageCoef
     */
    public function __construct(
        int $level,
        int $hpCoef,
        int $manaCoef,
        float $defenseCoef,
        int $damageMinCoef,
        int $damageMaxCoef,
        float $scoreCriticalStrikeCoef,
        float $criticalDamageCoef
    ) {
        $this->level = $level;
        $this->hp = $hpCoef * $this->level;
        $this->hpMax = $manaCoef * $this->level;
        $this->mana = $manaCoef * $this->level;
        $this->manaMax = $manaCoef * $this->level;
        $this->defense = $defenseCoef * $this->level;
        $this->damageMin = $damageMinCoef * $this->level;
        $this->damageMax = $damageMaxCoef * $this->level;
        $this->scoreCriticalStrike = $scoreCriticalStrikeCoef * $this->level;
        $this->criticalDamage = $criticalDamageCoef;
    }
}
