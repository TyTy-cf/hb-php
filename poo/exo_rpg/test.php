<?php

include_once('hero/Mage.php');
include_once('hero/Warrior.php');
include_once('hero/Rogue.php');
include_once('monstres/Gobelin.php');

$mage = new Mage('Valerie');
echo $mage;

echo '<br>';

$mage->levelUp();
$mage->setLevel(60);
echo $mage;

echo '<br>';

$rogue = new Rogue('Jimmy');
echo $rogue;

echo '<br>';

$rogue->levelUp();
echo $rogue;

echo '<br>';

$warrior = new Warrior('Maryne');
echo $warrior;

echo '<br>';

$warrior->levelUp();
echo $warrior;

$gobelin = new Gobelin(5);
print_r($gobelin);


//$warrior->attack($mage);

