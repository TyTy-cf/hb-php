<?php
$string = '';
if (isset($_GET['firstName'])) {
    $string .= ' mon prénom est ' . $_GET['firstName'] . ',';
}

if (isset($_GET['lastName'])) {
    $string .= ' mon nom est ' . $_GET['lastName'] . ',';
}

if (isset($_GET['sexe'])) {
    $string .= ' mon sexe est ' . $_GET['sexe'] . ',';
}

if (isset($_GET['age'])) {
    $string .= " j'ai " . $_GET['age'] . ' ans,';
}

if (isset($_GET['job'])) {
    $string .= " mon métier est " . $_GET['job'];
}

if ($string[strlen($string)-1] === ',') {
    $string = substr($string, 0, -1);
}

echo($string . '.');
