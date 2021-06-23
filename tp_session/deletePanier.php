<?php
session_start();

include_once 'item.php';

$itemIndex = 0;

foreach ($_POST as $content => $empty) {
    $itemIndex = substr($content, strlen('itemDelete'), strlen($content));
    $arrayKeys = array_keys($item);
}

if(isset($_SESSION['item'.$itemIndex])) {
    $_SESSION['item'.$itemIndex] -= 1;
    if ($_SESSION['item'.$itemIndex] == 0) {
        unset($_SESSION['item'.$itemIndex]);
    }
}

header('location:panier.php');
