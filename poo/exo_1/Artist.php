<?php

include_once('style.php');

class Artist
{

    use TraitName;

    /**
     * @var Style[]
     */
    private array $styles;

    private string $nationality;

    private int $beginningYear;

    /**
     * Artist constructor.
     *
     * Un constructeur permet de définir un comportement à l'instanciation de l'objet
     */
    public function __construct()
    {
        $this->styles = [];
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
     * @return Artist
     */
    public function setNationality(string $nationality): Artist
    {
        $this->nationality = $nationality;

        return $this;
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
     * @return Artist
     */
    public function setBeginningYear(int $beginningYear): Artist
    {
        $this->beginningYear = $beginningYear;

        return $this;
    }

    public function getStyles(): array {
        return $this->styles;
    }

    public function addStyle(Style $style): Artist {
        // Si le Style en paramètre n'existe pas dans le tableau
        // Alors on l'ajoute
        if (!in_array($style, $this->styles)) {
            $this->styles[] = $style;
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name . ' - ' . $this->beginningYear . ' (' . $this->nationality . ')';
    }

}
