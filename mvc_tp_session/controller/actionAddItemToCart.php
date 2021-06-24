<?php

if (isset($_GET['AddItem'])) {
    include 'session.php';
    if (!isset($_SESSION['itemsCart'])) {
        $_SESSION['itemsCart'] = [];
    }
    if (isset($_SESSION['itemsCart']['item#'.$_GET['AddItem']])) {
        $_SESSION['itemsCart']['item#'.$_GET['AddItem']] += 1;
    } else {
        $_SESSION['itemsCart']['item#'.$_GET['AddItem']] = 1;
    }
}

header('location: ../view/accueil.php');