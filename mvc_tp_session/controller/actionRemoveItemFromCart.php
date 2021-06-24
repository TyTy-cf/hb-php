<?php

if (isset($_GET['RemoveItem'])) {
    include 'session.php';
    if (isset($_SESSION['itemsCart']['item#'.$_GET['RemoveItem']])) {
        $_SESSION['itemsCart']['item#'.$_GET['RemoveItem']] -= 1;
        if ($_SESSION['itemsCart']['item#'.$_GET['RemoveItem']] == 0) {
            unset($_SESSION['itemsCart']['item#'.$_GET['RemoveItem']]);
        }
    }
}

header('location: ../view/cart.php');
