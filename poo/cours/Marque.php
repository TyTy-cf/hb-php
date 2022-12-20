<?php


//class Marque
//{
//    private string $nom;
//
//    public function __construct(string $nom)
//    {
//        $this->nom = $nom;
//    }
//
//    public function getNom(): string {
//        return $this->nom;
//    }
//
//}

class Marque
{

    public function __construct(private string $nom) { }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

}

$renault = new Marque('renault');

$name = $renault->getNom();

$renault->setNom('Renault');

