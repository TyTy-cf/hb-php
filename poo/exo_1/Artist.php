<?php

include_once('style.php');

class Artist
{
    private array $styles;

    private string $name;

    private string $nationality;

    private int $beginningYear;

    /**
     * Artist constructor.
     */
    public function __construct()
    {
        $this->styles = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     */
    public function setNationality(string $nationality): void
    {
        $this->nationality = $nationality;
    }

    /**
     * @return int
     */
    public function getBeginningYear(): int
    {
        return $this->beginningYear;
    }

    /**
     * @param int $beginningYear
     */
    public function setBeginningYear(int $beginningYear): void
    {
        $this->beginningYear = $beginningYear;
    }

    public function getStyles(): array {
        return $this->styles;
    }

    public function addStyle(Style $style): void {
        // Si le Style en paramètre n'existe pas dans le tableau
        // Alors on l'ajoute
        if (!in_array($style, $this->styles)) {
            $this->styles[] = $style;
        }
    }

}