<?php

// 7.1.
echo 'Exercice 7.1 : <br>';

function createHero($name, $hp, $damage) {
    return [
        'name' => $name,
        'hp' => $hp,
        'damage' => $damage,
    ];
}

$warrior = createHero('Warrior', 540, 25);
$mage = createHero('Mage', 430, 31);

echo '<br>';

// 7.2.
echo 'Exercice 7.2 : <br>';

function displayHero($hero) {
    echo 'Nom : ' . $hero['name'] . '<br>';
    echo 'Point de vie : ' . $hero['hp'] . '<br>';
    echo 'Dégâts : ' . $hero['damage'] . '<br>';
}

echo '<br>';

// 7.3.
echo 'Exercice 7.3 : <br>';

// Le & correspond à un passage par référence, c'est à dire que l'on
// Veut modifier la variable à l'intérieur de la fonction
function dealDamages($heroAtk, &$heroDef) {
    $heroDef['hp'] -= $heroAtk['damage'];
    if ($heroDef['hp'] <= 0) {
        echo $heroAtk['name'] . ' a gagné !';
        return false;
    }
    displayHero($heroDef);
    return true;
}

while ($warrior['hp'] > 0 && $mage['hp'] > 0) {
    $keepFighting = dealDamages($warrior, $mage);
    if (!$keepFighting) {
        break;
    }
    dealDamages($mage, $warrior);
}