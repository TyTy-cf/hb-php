<?php
// Importe un autre fichier php
include_once('marque.php');


class Voiture
{
    /**
     * Le '?' signifie que la valeur peut être null
     * Si vous ne le faite pas, et que vous essayer d'affecter la valeur null
     * à l'attribut, php va râler
     * @var string|null
     */
    private ?string $couleur;

    private string $model;

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
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * Permet d'afficher votre objet sous forme de chaîne de caractères
     * (Sinon php ne sait pas afficher un objet via un echo !)
     * Lorsque vous faites un echo de votre objet, par défaut vous
     * ne pouvez pas l'afficher.
     * Cependant, si vous avez définit votre fonction toString
     * Alors php appelle implicitement cette méthode lorsque vous faites un echo de votre objet
     * @return string
     */
    public function __toString(): string {
        // Appelle l'attribut static via self à l'intérieur de la classe
        return  $this->model . ' (' . $this->marque->getNom() . ')';
    }

    public static function getNbRoues(): int {
        echo 'Une voiture ça a 4 roues voyont !';
        return self::$nbRoues;
    }
}

$car = new Voiture('Verte');
//$car->setCouleur(null);
$car->setMarque(new Marque('Ford'));
$car->setModel('Fiesta');
// Appelle l'attribut static en dehors de la classe
// On utilise le nom directement de la classe suivi de ::
echo $car;
