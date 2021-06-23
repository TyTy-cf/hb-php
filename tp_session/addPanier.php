<?php

include_once 'item.php';

session_start();
$itemIndex = 0;

foreach ($_POST as $content => $empty) {
    $itemIndex = substr($content, strlen('addPanier'), strlen($content));
    $arrayKeys = array_keys($item);
}

if(!isset($_SESSION['item'.$itemIndex])) {
    $_SESSION['item'.$itemIndex] = 1;
}else{
    $_SESSION['item'.$itemIndex] += 1;
}

header('location:accueil.php');
