<?php

// 1.
echo 'Exercice 1 : <br>';
$age = 42;
$currentYear = date('Y');
echo 'Tu es né en ' . ($currentYear - $age);
echo '<br>';
echo '<br>';

// 2.
echo 'Exercice 2 : <br>';
$array = [12, 15, 19, 2];
$average = 0;
foreach ($array as $grade) {
    $average += $grade;
}
echo 'La moyenne est de ' . ($average / sizeof($array));
echo '<br>';
echo '<br>';

// 3.
echo 'Exercice 3 : <br>';
$unitPrice = 12;
$quantity = 42;
echo 'Prix TTC de tous les articles : ' . (round($unitPrice * $quantity * 1.2, 2)) . '€';
echo '<br>';
echo '<br>';

// 4.
echo 'Exercice 4 : <br>';
$temp = 100;
if ($temp >= 70) {
    echo 'C\'est du gaz !';
} else if ($temp < 0) {
    echo 'C\'est solide !';
} else {
    echo 'C\'est liquide !';
}
echo '<br>';
echo '<br>';

// 5.
echo 'Exercice 5 : <br>';
$grades = [
    'Albert' => [12, 8, 9, 7, 13],
    'Michel' => [14, 13, 12, 11, 10],
    'Vincent' => [17, 16, 15, 18, 13],
];

function displayAverageByGrades($array) {
    $average = 0;
    foreach ($array as $grade) {
        $average += $grade;
    }
    echo 'La moyenne est de ' . ($average / sizeof($array));
    echo '<br>';
}

displayAverageByGrades($grades['Albert']);

function displayAllAveragesByGrades($arrayGrades) {
    foreach ($arrayGrades as $student => $grade) {
        echo 'La moyenne de ' . $student . ' est de ' . (array_sum($grade)/count($grade));
        echo '<br>';
    }
}
displayAllAveragesByGrades($grades);
echo '<br>';

// 6.
echo 'Exercice 6 : <br>';

function increasePrice($price, $percentile) {
    echo 'Prix augmenté est de : ' . (($price * $percentile) / 100 + $price);
    echo '<br>';
}

increasePrice(100, 15);
echo '<br>';

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
