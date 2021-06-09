<?php

include_once('Mage.php');

$mage = new Mage('Valerie');
echo $mage;

echo '<br>';

$mage->levelUp();
echo $mage;


