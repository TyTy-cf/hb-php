<?php


abstract class Hero
{
    protected int $level = 0;

    protected float $scoreCriticalStrike = 0.0;

    protected float $criticalDamage = 0.0;

    protected int $damageMin = 0;

    protected int $damageMax = 0;

    protected int $intelligence = 0;

    protected int $agility = 0;

    protected int $strength = 0;

    protected int $hp = 0;

    protected int $hpMax = 0;

    protected int $mana = 0;

    protected int $manaMax = 0;

    protected string $name;

    protected float $defense = 0.0;

    /**
     * Hero constructor.
     * @param int $strength
     * @param int $agility
     * @param int $intelligence
     * @param string $name
     */
    public function __construct(
        int $strength, int $agility, int $intelligence, string $name
    ) {
        $this->scoreCriticalStrike = 12;
        $this->criticalDamage = 1.5;
        $this->name = $name;
        $this->updateMainAttributes($strength, $agility, $intelligence);
    }

    protected function updateMainAttributes(
        int $strength, int $agility, int $intelligence
    ): void
    {
        $this->level++;
        $this->setStrength($strength);
        $this->setAgility($agility);
        $this->setIntelligence($intelligence);
    }

    protected function updateAttributesFromCarac(int $carac) {
        $this->damageMin += $carac * 1.2;
        $this->damageMax += $carac * 1.4;
        $this->scoreCriticalStrike += ($carac * 0.08);
    }

    protected function setStrength(int $strength)
    {
        $this->strength += $strength;
        $this->hp += $strength * 19;
        $this->hpMax += $strength * 19;
    }

    protected function setIntelligence(int $intelligence)
    {
        $this->intelligence += $intelligence;
        $this->mana += $intelligence * 19;
        $this->manaMax += $intelligence * 19;
    }

    protected function setAgility(int $agility)
    {
        $this->agility += $agility;
        $this->defense += round($agility / 6, 2);
    }

    /**
     * Set un level à un héro, le héro arrive directement à ce niveau
     * Cependant, le niveau passé en paramètre doit être forcément supérieur au niveau actuel, sinon il ne se passera rien
     *
     * @param int $newLevel
     */
    public function setLevel(int $newLevel):void {
        if ($newLevel > $this->level) {
            for ($i=$this->level; $i < $newLevel; $i++){
                $this->levelUp();
            }
        }
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return float|int
     */
    public function getScoreCriticalStrike()
    {
        return $this->scoreCriticalStrike;
    }

    /**
     * @param int $hp
     * @return Hero
     */
    public function setHp(int $hp): Hero
    {
        $this->hp = $hp;
        return $this;
    }

    /**
     * @return float
     */
    public function getCriticalDamage(): float
    {
        return $this->criticalDamage;
    }

    /**
     * @return int
     */
    public function getDamageMin(): int
    {
        return $this->damageMin;
    }

    /**
     * @return int
     */
    public function getDamageMax(): int
    {
        return $this->damageMax;
    }

    /**
     * @return int
     */
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    /**
     * @return int
     */
    public function getAgility(): int
    {
        return $this->agility;
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @return int
     */
    public function getHpMax(): int
    {
        return $this->hpMax;
    }

    /**
     * @return int
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     * @return int
     */
    public function getManaMax(): int
    {
        return $this->manaMax;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getDefense(): float
    {
        return $this->defense;
    }

    abstract function levelUp(): void;

    public function __toString()
    {
        // get_class vous donne le nom de la classe en string
        $string = 'Classe : ' . get_class($this) . '<br>';
        $string .= 'Nom : ' . $this->name . '<br>';
        $string .= 'Level : ' . $this->level . '<br>';
        $string .= 'Force : ' . $this->strength . '<br>';
        $string .= 'Agilité : ' . $this->agility . '<br>';
        $string .= 'Intelligence : ' . $this->intelligence . '<br>';
        $string .= 'HP : ' . $this->hp . '/' . $this->hpMax . '<br>';
        $string .= 'Mana : ' . $this->mana . '/' . $this->manaMax . '<br>';
        $string .= 'Defense : ' . $this->defense . '<br>';
        $string .= 'Degats min : ' . $this->damageMin . '<br>';
        $string .= 'Degats max : ' . $this->damageMax . '<br>';
        $string .= 'Score crit : ' . $this->scoreCriticalStrike . '<br>';
        $string .= 'Crit damage : x' . $this->criticalDamage . '<br>';
        return $string;
    }

}
