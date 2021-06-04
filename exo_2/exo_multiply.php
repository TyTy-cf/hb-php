<?php

function displayMultiplyTable($multiplier, $max) {
    for($i = 1; $i <= $max; $i++) {
        echo $multiplier . 'x' . $i . ' = ' . ($multiplier * $i) . '<br>';
    }
}

displayMultiplyTable(11, 12);
