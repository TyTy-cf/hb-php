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
    $heroDef['hp'] -= getDamages($heroAtk['damage']);
    if ($heroDef['hp'] <= 0) {
        echo $heroAtk['name'] . ' a gagné !';
        return false;
    }
    displayHero($heroDef);
    return true;
}

/**
 * represent the fact that a hero can do critical damage
 * @param int $damages initial damages of the hero
 * @return int damage final of the hero
 */
function getDamages(int $damages): int {
    // rand permet d'avoir un chiffre aléatoire :
    // - Soit compris entre les 2 valeurs
    // - Ou sans valeur
    // Autre manière de procéder : on laisse le rand définir son chiffre
    // Si ce dernier est un multiple de 15 (modulo 15 = 0)
    // Alors c'est un crit !
//    if (rand()%15 === 0) {
//    }
    if (rand(0, 100) <= 15) {
        echo 'Coup critique !!! <br>';
        $damages = $damages * 1.5;
    }
    return $damages;
}

$turn = 0;
while ($warrior['hp'] > 0 && $mage['hp'] > 0) {
    $turn++;
    $keepFighting = dealDamages($warrior, $mage);
    if (!$keepFighting) {
        break;
    }
    dealDamages($mage, $warrior);
}
echo 'Il y a eu : ' . $turn . ' tours';