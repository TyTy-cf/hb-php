<?php


class Marque
{
    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

}