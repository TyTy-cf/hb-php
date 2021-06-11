<?php

include_once('hero/Mage.php');
include_once('hero/Warrior.php');
include_once('hero/Rogue.php');
include_once('monstres/Gobelin.php');
include_once('monstres/Dragon.php');
include_once('monstres/Ogre.php');

$mage = new Mage('Valerie');

echo '<br>';

$mage->levelUp();
$mage->setLevel(60);
echo $mage;

echo '<br>';

$rogue = new Rogue('Jimmy');

echo '<br>';

$rogue->levelUp();
$rogue->setLevel(60);
echo $rogue;

echo '<br>';

$warrior = new Warrior('Maryne');

echo '<br>';

$warrior->levelUp();
$warrior->setLevel(60);
echo $warrior;

echo '<br>';

echo '<br>';

$gobelin = new Gobelin(60);
echo $gobelin;

echo '<br>';

echo '<br>';

$dragon = new Dragon(60);
echo $dragon;

echo '<br>';

echo '<br>';

$ogre = new Ogre(60);
echo $ogre;

echo '<br>';

echo '<br>';


echo '<h1>Simulation de combat</h1>';
// Ici on peut faire un while sans traitement, car une fonction est exécutée dans la condition (attack) et elle renvoit un booléen
// Tant que attack renvoie true, on faire les deux, si l'une des fonctions renvoit false (c'est à dire que l'un des deux, est mort)
// Alors la boucle s'arrêtera
$heros = [$mage, $warrior, $rogue];
$index = rand(0, 2);
while(($mage->attack($dragon) && $warrior->attack($dragon) && $rogue->attack($dragon)) && !$dragon->isDead()) {
    $dragon->attack($heros[$index]);
    $index = rand(0, 2);
    echo '------------ FIN DE ROUND --------------<br>';
}
echo '<br>';
//$dragon = new Dragon(60);
//while($warrior->attack($dragon) && $dragon->attack($warrior));
//echo '<br>';
//$dragon = new Dragon(60);
//while($rogue->attack($dragon) && $dragon->attack($rogue));


//$warrior->attack($mage);

