<?php

// Il était possible de faire l'exercice plus rapidement avec
// array_unique, mais ce n'était pas ce qui était demandé...

$initialArray = [5, 5, 10, 1, 2, 2, 3, 3, 3, 4, 5, 5];

function removeDuplicate($array) {
    $sortedArray = [];
    foreach ($array as $value) {
        // in_array : permet de savoir si la valeur existe
        // dans le tableau
        if (!in_array($value, $sortedArray)) {
            $sortedArray[] = $value;
        }
    }
    return $sortedArray;
}

print_r(removeDuplicate($initialArray));

