<?php

$stringNumber = $_GET['number'];
$array = str_split($stringNumber);
$totalTry = 0;
foreach ($array as $char) {
    $num = intval($char);

    $randomNumber = 0;

    do {
        $randomNumber = getRandomNumber();
        $totalTry++;
    } while ($randomNumber !== $num);
}

function getRandomNumber()
{
    return rand(1, 9);
}

echo $totalTry;
