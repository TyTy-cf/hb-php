<?php
// Importe un autre fichier php
include_once('marque.php');


class Voiture
{
    /**
     * @var string|null
     */
    private ?string $couleur;

    public static int $nbRoues = 4;

    /**
     * @var Marque
     */
    private Marque $marque;

    public function __construct(?string $couleur) {
        $this->couleur = $couleur;
    }

    /**
     * Getter : récupère l'attribut
     * @return string|null
     */
    public function getCouleur(): ?string {
        return $this->couleur;
    }

    /**
     * Setter : modifie l'attribut
     * @param string|null $couleur
     */
    public function setCouleur(?string $couleur): void {
        $this->couleur = $couleur;
    }

    /**
     * Getter : récupère l'attribut
     * @return Marque
     */
    public function getMarque(): Marque {
        return $this->marque;
    }

    /**
     * Setter : modifie l'attribut
     * @param Marque $marque
     */
    public function setMarque(Marque $marque): void {
        $this->marque = $marque;
    }

    /**
     * Permet d'afficher votre objet sous forme de chaîne de caractères
     * (Sinon php ne sait pas afficher un objet via un echo !)
     * @return string
     */
    public function __toString(): string {
        // Appelle l'attribut static via self à l'intérieur de la classe
        self::$nbRoues;
        return 'Voiture de marque ' . $this->marque->getNom() . ' et de couleur ' . $this->couleur;
    }

    public static function getNbRoues(): int {
        echo 'Une voiture ça a 4 roues voyont !';
        return self::$nbRoues;
    }
}

$car = new Voiture('Verte');
//$car->setCouleur(null);
$car->setMarque(new Marque('Ford'));
$car1 = new Voiture('Bleu');
// Appelle l'attribut static en dehors de la classe
// On utilise le nom directement de la classe suivi de ::
echo Voiture::getNbRoues();
