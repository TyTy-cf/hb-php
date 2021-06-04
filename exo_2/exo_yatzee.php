<?php

/**
 * Throw a number of dice
 * @param $nbDice
 * @return int[]
 */
function getRollDice($nbDice): array {
    $dice = [];
    for($i = 0; $i < $nbDice; $i++) {
        $dice[] = rand(1, 6);
    }
    return $dice;
}

/**
 * @param array $arrayDice
 */
function showDice(array $arrayDice): void {
    foreach($arrayDice as $dice) {
        echo '( ' . $dice . ' ) ';
    }
    echo '<br>';
}

function showResult(array $dice): void {
    $diceCountValue = array_count_values($dice);
    $hasResult = false;

    $largeStraight = [
        [1, 2, 3, 4, 5],
        [2, 3, 4, 5, 6],
    ];
    $smallStraight = [
        [1, 2, 3, 4],
        [2, 3, 4, 5],
        [3, 4, 5, 6],
    ];

    $hasResult = isStraight($largeStraight,
                            $dice,
                        'Grande suite ! GG EZ');
    if (!$hasResult) {
        $hasResult = isStraight($smallStraight,
                                $dice,
                                'Petite suite ! Bien, mais pas si bien que ça o/');
    }
    if (!$hasResult) {
        if (sizeof($diceCountValue) == 1) {
            $hasResult = true;
            echo 'Yam\'s !!!!! GG WP EZ';
        } else if (in_array(4, $diceCountValue)) {
            $hasResult = true;
            echo 'Carré ! Not bad at all';
        } else if (in_array(3, $diceCountValue)
            && in_array(2, $diceCountValue)
        ) {$hasResult = true;
            echo 'Full ! o/';
        } else if (in_array(3, $diceCountValue)) {
            $hasResult = true;
            echo 'Brelan ! C\'est bien, mais pas top !';
        }
    }
    if (!$hasResult) {
        echo 'GeT ReKt';
    }
}

/**
 * PErmet de déterminer si un lancé de dé est une suite ou non
 * A partir d'un tableau de solution
 *
 * @param $solutionStraight, le tableau de solution attendu
 * @param $dice, le lancé de dé
 * @param $result, le texte à afficher si la solution est valide
 * @return bool
 */
function isStraight($solutionStraight, $dice, $result): bool {
    foreach ($solutionStraight as $straight) {
        // array_diff comparé le deuxième tableau avec le premier
        // et renvoie un tableau contenant les valeurs manquantes entre les deux
        if (count(array_diff($straight, $dice)) == 0) {
            echo $result;
            return true;
        }
    }
    return false;
}

$dice = getRollDice(5);
showDice($dice);
showResult($dice);