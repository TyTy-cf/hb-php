<?php


abstract class Difficulty
{
    /**
     * @var String[]
     */
    protected array $monsters;

    protected int $currentIndex;

    protected int $maxIndex;

    /**
     * Difficulty constructor.
     */
    public function __construct()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return String[]
     */
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * @return int
     */
    public function getCurrentIndex(): int
    {
        return $this->currentIndex;
    }

    /**
     * @return int
     */
    public function getMaxIndex(): int
    {
        return $this->maxIndex;
    }

    public function getMonsterByLevel(int $level): Monstre {
        $monster = new $this->monsters[$this->currentIndex]($level);
        $this->currentIndex++;
        return $monster;
    }
}