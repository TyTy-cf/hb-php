<?php


abstract class ChessPiece
{
    // protected = private, sauf que les attributs/fonctions sont considérés
    // comme public pour les classes filles
    protected string $color;

    protected string $name;

    protected string $pathImage;

    /**
     * ChessPiece constructor.
     * @param string $color
     * @param string $name
     * @param string $pathImage
     */
    public function __construct(
        string $color, string $name, string $pathImage
    ) {
        $this->color = $color;
        $this->name = $name;
        $this->pathImage = $pathImage;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return ChessPiece
     */
    public function setColor(string $color): ChessPiece
    {
        $this->color = $color;
        return $this;
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
     * @return ChessPiece
     */
    public function setName(string $name): ChessPiece
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPathImage(): string
    {
        return $this->pathImage;
    }

    /**
     * @param string $pathImage
     * @return ChessPiece
     */
    public function setPathImage(string $pathImage): ChessPiece
    {
        $this->pathImage = $pathImage;
        return $this;
    }

    public abstract function move(): void;

    public function echoName(): void {
        echo 'Bonjour de la classe mère';
    }
}