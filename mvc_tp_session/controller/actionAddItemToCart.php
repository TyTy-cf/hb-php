<?php

if (isset($_GET['AddItem'])) {
    include 'session.php';
    if (isset($_SESSION['item#'.$_GET['AddItem']])) {
        $_SESSION['item#'.$_GET['AddItem']] += 1;
    } else {
        $_SESSION['item#'.$_GET['AddItem']] = 1;
    }
}

// Pour le # : $arayExploded=explode('#', $_SESSION['item#'.$_GET['AddItem']])
// $arrayExploded[1] = toujours à l'id de ton item

header('location: ../view/accueil.php');